<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
class ProjectsController extends AppController
{
    // Función que se ejecuta antes de rederizar cualquier vista dentro la carpeta Projects.
    public function beforeFilter($event)
    {
        parent::beforeFilter($event);
        $this->token();
        $this->portalProjects();
        // CURL  que obtiene todos los proyectos publicados en el portal administrativo.
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/publicprojects/list/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$_SESSION["PortalToken"],
        "Cache-Control: no-cache"
      ),
    ));
        $Proj_response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $Proj_responses = json_decode($Proj_response, true);
            $ArrayProjectCodId = array();
            $ArrayProjectCodName = array();
            $All_Proj = array_values($Proj_responses)[0];
            $this->set('All_Proj', $All_Proj);
            foreach ($All_Proj as $row => $value3) {
              //Asigna por separado los valores del array de All_Proj
                $ProjectCodId = $value3["id_p_project"];
                $ProjectCodStatus = $value3["is_enabled"];
                array_push($ArrayProjectCodId, $ProjectCodId);
                $ProjectCodName = $value3["name"];
                $ProjectIdP6 = $value3["code_p6"];
                $ProjectCodId = $value3["id_p_project"];
                // Registra el proyecto en la BD local
                $logsTable = \Cake\ORM\TableRegistry::get('Projects', array('table' => 'projects'));
                $log = $logsTable->newEntity();
                $log->ID_PROJECT  = $ProjectCodId;
                $log->PROJECT_NAME  = $ProjectCodName.' ('.$ProjectIdP6.')';
                $log->STATUS  = $ProjectCodStatus;
                $logsTable->save($log);
                $this->set('ProjectCodId', $ArrayProjectCodId);
            }
            $ArrayProjDelete = array();
            $AllProjForDelete = $this->Projects->find('all');
            // Fpreach que obtiene todos los projectos que provienen de Web services y se encuentra deshabilitados o eliminados.
            foreach ($AllProjForDelete as $ProjDelete) {
                if (!in_array($ProjDelete->ID_PROJECT, $ArrayProjectCodId) && $ProjDelete->STATUS == 1) {
                    array_push($ArrayProjDelete, $ProjDelete->id);
                }
            }
            // Foreach que elimina que no existen en el WS de la base de datos local.
            foreach ($ArrayProjDelete as $ProjxDelete) {
                $this->delete($ProjxDelete);
            }
        }
    }
    public function index()
    {
        foreach ($_SESSION["Auth"] as $ProjArray => $valueArray) {
            $UserId = $valueArray["V_ID_P_USER"];
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/usersxprojects/list/?v_id_user=".$UserId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer ".$_SESSION["PortalToken"],
        ),
      ));
        $responseList = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responsesList = json_decode($responseList, true);
            $PrxUs = array();
            $ProjxUser = array_values($responsesList)[0];
            $this->set('AllUserProj', $ProjxUser);
            foreach ($ProjxUser as $projxuser => $PrValue) {
                $Pr = $PrValue["id_p_project"];
                array_push($PrxUs, $Pr);
                $this->set('ProjxUser', $PrxUs);
            }
        }
        $this->paginate = array(
        'limit' => 100,
        'order' => array(
            'Projects.id' => 'desc'
        ));
        $projects = $this->paginate($this->Projects);
        $this->set('projects', $projects);
        // $this->Indicators();
        // $this->Risks();
        // $this->Period();
    }
    public function alert()
    {
        $error = 'display:none';
        $this->set('error', $error);
    }
    public function Add()
    {
        $this->alert();
        $projects = $this->Projects->newEntity();
        if ($this->request->is('post')) {
            $projects = $this->Projects->patchEntity($projects, $this->request->getData());
            if ($this->Projects->save($projects)) {
                return $this->redirect(['action' => 'index']);
            }
            else {
              $error = '';
              $this->set('error', $error);
              $this->Flash->error('El proyecto no pudo ser creado');
            }
        }
        $this->set(compact('projects'));
    }
    public function AddEPS()
    {
        //$eps = $this->Eps->find('all');
        $eps = $this->paginate($this->Eps);
        $this->set('eps', $eps);
    }
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        $projects = $this->Projects->get($id);
        if ($this->Projects->delete($projects)) {
            // $this->Flash->success(__('El proyecto ha sido eliminado.'));
        } else {
            // $this->Flash->error(__('El proyecto no pudo ser eliminado, por favor, intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $projects = $this->Projects->get($id);
        $this->set('projects', $projects);
    }
    public function edit($id = null)
    {
        $projects = $this->Projects->get($id);
        if ($this->request->is(['patch','post','put'])) {
            $projects = $this->Projects->patchEntity($projects, $this->request->data);
            if ($this->Projects->save($projects)) {
                // $this->Flash->success('El proyecto ha sido modificado');
                return $this->redirect(['action'=>'index']);
            } else {
                $error = '';
                $this->set('error', $error);
                $this->Flash->error('El proyecto no pudo ser modificado');
            }
        }
        $this->set(compact('projects'));
    }
    public function project($id, $current_user_pr = null,$ActualEps = null, $Categoria1=null, $Categoria2 = null, $NameEps = null, $title = null, $idEpsParent = null,$name = null, $code = null, $spi = null, $corte = null, $graph = null)
    {
        $this->index();
        $this->IndicatorColor();
        // Nombre del proyecto.
        $decoded_Name = base64_decode(urldecode($name));
        // Nombre de la EPS
        $decoded_NameEpsPrjs = base64_decode(urldecode($NameEps));
        //Nombre de la EPS mandante
        $decoded_titlePrjs = base64_decode(urldecode($title));
        // Código de la EPS actual
        $decoded_EpsPrjs = base64_decode(urldecode($ActualEps));
        //Código de la categoría 1
        $decoded_Ctg1Prjs = base64_decode(urldecode($Categoria1));
        //Código de la categoría 2
        $decoded_Ctg2Prjs = base64_decode(urldecode($Categoria2));
        //Id de la EPS parent del proyecto seleccionado.
        $decoded_IdEpsParent = base64_decode(urldecode($idEpsParent));
        // Envía las variables a la vista de Projects.ctp.
        $this->set('idEpsParent', $decoded_IdEpsParent);
        $this->set('NameEpsPrjs', $decoded_NameEpsPrjs);
        $this->set('titlePrjs', $decoded_titlePrjs);
        //Id del usuario loggeado.
        $decoded_current_user_pr = base64_decode(urldecode($current_user_pr));
        $this->set('current_user_pr', $decoded_current_user_pr);
        $this->set('ActualEps', $decoded_EpsPrjs);
        $this->set('Categoria1', $decoded_Ctg1Prjs);
        $this->Risks();
        $this->ChartS($graph);
        $this->Donut($graph);
        $this->IndicatorsAC();
        $this->IndicatorsAC2();
        $this->IndicatorsAC3();
        // Variable que obtiene todos los registros de un proyecto registrado en la base de datos interna.
        $projects = $this->Projects->get($id);
        $this->importExcelfile($projects->ID_PROJECT,$projects->CHART);
        $this->set('current_user_pr', $current_user_pr);
        $this->set('projects', $projects);
        $this->set('name', $decoded_Name);
        $this->set('code', $code);
        $this->set('spi', $spi);
        $this->set('corte', $corte);
        $this->set('graph', $graph);
    }
    public function projects($current_user_pr = null, $EPS = null, $Categoria1 = null, $Categoria2 = null, $NameEps = null, $title=null, $idEpsParent = null)
    {
        $this->AllProjects();
        $this->IndicatorColor();
        // Decodifica todas la variables pasadas a través de la URL.
        $decoded_NameEpsPrjs = base64_decode(urldecode($NameEps));
        $decoded_titlePrjs = base64_decode(urldecode($title));
        $decoded_EpsPrjs = base64_decode(urldecode($EPS));
        $decoded_Ctg1Prjs = base64_decode(urldecode($Categoria1));
        $decoded_Ctg2Prjs = base64_decode(urldecode($Categoria2));
        $decoded_IdEpsParent = base64_decode(urldecode($idEpsParent));
        $this->set('idEpsParent', $decoded_IdEpsParent);
        $this->set('NameEpsPrjs', $decoded_NameEpsPrjs);
        $this->set('titlePrjs', $decoded_titlePrjs);
        $decoded_current_user_pr = base64_decode(urldecode($current_user_pr));
        //Variable que obtiene todos los proyectos relacionados a la EPS actual.
        $projectsCategory = $this->Projects->find(
            'all',
            array('conditions' => array('Projects.EPS_REL' => $decoded_EpsPrjs))
        );
        $this->set('projectsCategory', $projectsCategory);
        $this->set('ActualEps', $decoded_EpsPrjs);
        $this->set('Categoria1', $decoded_Ctg1Prjs);
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS=".$decoded_EpsPrjs."&V_PROJCODE1=".$decoded_Ctg1Prjs."&V_PROJCODE2=".$decoded_Ctg2Prjs."&V_ID_USER=".$decoded_current_user_pr,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer ".$_SESSION["PortalToken"],
          "Cache-Control: no-cache"
        ),
      ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responses = json_decode($response, true);
            $ArrayEpsId = array();
            $ArrayParentEpsId = array();
            $ArrayName = array();
            $ArrayLevel = array();
            // Arreglo que contiene los proyecto por categoría.
            $ProjectsWS = array_values($responses)[0];
            $this->set('ProjectsWS', $ProjectsWS);
        }
    }
    public function Indicators()
    {
        $this->loadModel('Indicators');
        $indicators= $this->Indicators->find('all');
        $this->set('indicators', $indicators->first());
    }
    public function Risks()
    {
        // Carga el modelo del Risks.
        $this->loadModel('Risks');
        // Obtiene todos los elementos de la tabla Risks
        $rks= $this->Risks->find('all',array())
        ->order(['RISK_NUMBER' => 'ASC']);
        $this->set('rks', $rks->all());
    }
    public function IndicatorsAC()
    {
        $this->loadModel('Presindicators');
        $indicatorsAC = $this->Presindicators->find('all');
        $this->set('indicatorsAC', $indicatorsAC->all());
    }
    public function IndicatorsAC2()
    {
        $this->loadModel('Presindicators');
        $indicatorsAC2 = $this->Presindicators->find('all');
        $this->set('indicatorsAC2', $indicatorsAC2->all());
    }
    public function IndicatorsAC3()
    {
        $this->loadModel('Presindicators');
        $indicatorsAC3 = $this->Presindicators->find('all');
        $this->set('indicatorsAC3', $indicatorsAC3->all());
    }
    public function Period()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://23.99.203.76:7001/ords/portal/periodtype/period');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array();
        $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result3 = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }
    public function ChartS($graph)
    {
        $data = $graph;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/graph/data/?P_PROJECT_ID=".$data."&P_PERIOD_TYPE=3",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer ".$_SESSION["PortalToken"],
          "Cache-Control: no-cache"
        ),
      ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responses = json_decode($response, true);
            $ArrayStartDate = array();
            $ArrayBL = array();
            $ArrayEV = array();
            $ArrayAC = array();
            $ArrayBLSnapshot = array();
            $ArrayEVSnapshot = array();
            $ArrayACSnapshot = array();
            $var1 = null;
            if ($responses != null) {
                $var1 = array_values($responses)[0];
            }
            if ($var1 != null) {
                foreach ($var1 as $row => $value) {
                    $StartDate = $value["start_date"];
                    $FinishDate = $value["finish_date"];
                    $BL = $value["cum_bl_lu"];
                    $EV = $value["cum_ev_lu"];
                    $AC = $value["cum_ac_lu"];
                    $StartDate1 = date("Y-m-d", strtotime($FinishDate));
                    $StartDate2 = date("Y-m-d", strtotime($StartDate));
                    array_push($ArrayStartDate, $StartDate2);
                    array_push($ArrayBL, str_replace(',','.',$BL));
                    array_push($ArrayEV, str_replace(',','.',$EV));
                    array_push($ArrayAC, str_replace(',','.',$AC));
                    if ($BL != null) {
                      array_push($ArrayBLSnapshot, $BL * 4);
                    } else{
                      array_push($ArrayBLSnapshot, null);
                    }
                    if ($EV != null) {
                      array_push($ArrayEVSnapshot, $EV * 4);
                    } else{
                      array_push($ArrayEVSnapshot, null);
                    }
                    if ($BL != null) {
                      array_push($ArrayACSnapshot, $AC * 4);
                    } else{
                      array_push($ArrayACSnapshot, null);
                    }
                    // $fecJson = json_encode($ArrayStartDate);
                    // $blJson = json_encode($ArrayBL);
                    // $evJson = json_encode($ArrayEV);
                    // $acJson = json_encode($ArrayAC);
                    $this->set('fecJson', $ArrayStartDate);
                    $this->set('blJson', $ArrayBL);
                    $this->set('evJson', $ArrayEV);
                    $this->set('acJson', $ArrayAC);
                    $this->set('blJsonSnapshot', $ArrayBLSnapshot);
                    $this->set('evJsonSnapshot', $ArrayEVSnapshot);
                    $this->set('acJsonSnapshot', $ArrayACSnapshot);
                }
            }
            $longitud = count($ArrayStartDate);
            $this->set('cont', $longitud);
        }
    }
    // Función que obtiene del Web Services el planeado y ejecutado de un proyecto para crear la Gráfica de dona.
    public function Donut($Id_proj)
    {
        if ($Id_proj == null) {
            $data = '30261';
        } else {
            $data = $Id_proj;
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/projectpercent//percents/?V_PROJECT=".$data,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$_SESSION["PortalToken"],
            "Cache-Control: no-cache"
          ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responses = json_decode($response, true);
            $ArrayPlan = array();
            $ArrayEjec = array();
            $var1 = null;
            if ($responses != null) {
                $var1 = array_values($responses)[0];
            }
            $Plan = null;
            $Ejec = null;
            if ($var1 != null) {
                foreach ($var1 as $row => $value) {
                    $Planeado = $value["planeado"];
                    $Ejecutado = $value["ejecutado"];
                    array_push($ArrayPlan, $Planeado);
                    array_push($ArrayEjec, $Ejecutado);
                    $Plan = json_encode($ArrayPlan);
                    $Ejec = json_encode($ArrayEjec);
                    ;
                    $this->set('Plan', $Planeado);
                    $this->set('Ejec', $Ejecutado);
                }
            } else {
                $this->set('Plan', $Plan);
                $this->set('Ejec', $Ejec);
            }
        }
    }
    public function companies($idEps = null, $title = null)
    {
        //Llamar la función portalProjects para obtener las Eps.
        $this->portalProjects();
        //Variables que albergan el id y el título de la EPS mandante
        $decoded_Eps = base64_decode(urldecode($idEps));
        $decoded_title = base64_decode(urldecode($title));
        $this->set('idEps', $decoded_Eps);
        $this->set('title', $decoded_title);
    }
    public function company($current_user = null, $Id_eps = null, $NameEps = null, $titleParentEps = null, $idParentEps = null)
    {
        $this->AllProjects();
        // Decodifica las variables pasadas a través de URL y las asigna a una nueva variable.
        $decoded_Id_eps = base64_decode(urldecode($Id_eps));
        $decoded_NameEps = base64_decode(urldecode($NameEps));
        $decoded_title = base64_decode(urldecode($titleParentEps));
        $decoded_IdParentEps = base64_decode(urldecode($idParentEps));
        $decoded_current_user = base64_decode(urldecode($current_user));
        // Envia las variables a la vista de company.ctp.
        $this->set('title', $decoded_title);
        $this->set('NameEps', $decoded_NameEps);
        $this->set('idEps', $decoded_Id_eps);
        $this->set('idEpsParent', $decoded_IdParentEps);
        // CURL que llama a los proyectos de la EPS correspondiente a la categoría de sostenimiento.
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS=".$decoded_Id_eps."&V_PROJCODE1=871&V_PROJCODE2=8997&V_ID_USER=".$decoded_current_user,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer ".$_SESSION["PortalToken"],
          "Cache-Control: no-cache"
        ),
      ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // Decodifica el JSON obtenido del WS
            $responseSostenimiento = json_decode($response, true);
            // Array que contiene los proyectos obtenidos del Web service.
            $ArrayResponseSostenimiento = array_values($responseSostenimiento)[0];
            // Cuenta la cantidad de elementos del array, haciendo referencía a la cantidad de proyectos.
            $longitudSostenimiento = count($ArrayResponseSostenimiento);
            $this->set('ContadorSostenimiento', $longitudSostenimiento);
        }
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS=".$decoded_Id_eps."&V_PROJCODE1=870&V_PROJCODE2=8996&V_ID_USER=".$decoded_current_user,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$_SESSION["PortalToken"],
            "Cache-Control: no-cache"
          ),
        ));
        $responseCrecimiento = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // Decodifica el JSON obtenido del WS
            $responsesCrecimiento = json_decode($responseCrecimiento, true);
            // Asigna el WS a un arreglo.
            $ArrayResponseCrecimiento = array_values($responsesCrecimiento)[0];
            // Contador de elementos del arreglo WS.
            $longitudCrecimiento = count($ArrayResponseCrecimiento);
            // Suma de los contadores de crecimiento y sostenimiento
            $SumResult = $longitudCrecimiento + $longitudSostenimiento;
            $this->set('SumResult', $SumResult);
            $this->set('ContadorCrecimiento', $longitudCrecimiento);
        }
    }
    public function companyGas($current_user = null, $Id_eps = null, $NameEps = null, $titleParentEps = null, $idParentEps = null)
    {
      $this->company($current_user, $Id_eps, $NameEps, $titleParentEps, $idParentEps);
    }
    // Función que obtiene todos los proyectos registros en la BD local.
    public function AllProjects(){
      $AllLocalDBProjects = $this->Projects->find('all');
      $this->set('AllLocalDBProjects', $AllLocalDBProjects->all());
    }
    // Función que se encarga la pestaña de Portal proyectos
    public function portalProjects()
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/list/eps/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$_SESSION["PortalToken"],
        "Cache-Control: no-cache"
      ),
      ));
        $responseEps = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responsesEps = json_decode($responseEps, true);
            $ArrayEpsId = array();
            $ArrayParentEpsId = array();
            $ArrayName = array();
            $ArrayLevel = array();
            $ArrayEps = array_values($responsesEps)[0];
            $this->set('ArrayEps', $ArrayEps);
            foreach ($ArrayEps as $rowEps => $valueEps) {
                if ($valueEps["parent_eps_object_id"] != null && $valueEps["parent_eps_object_id"]!=23305) {
                    $EpsIdNumber = $valueEps["eps_id"];
                    $ParentEpsIdNumber = $valueEps["parent_eps_object_id"];
                    $NameEPS = $valueEps["name"];
                    $LevelEPS = $valueEps["level"];
                    // Registra las EPS obtenidas del web services en la BD local.
                    $logsTableEps = \Cake\ORM\TableRegistry::get('Eps', array('table' => 'eps'));
                    $logEps = $logsTableEps->newEntity();
                    $logEps->EPS_ID  = $EpsIdNumber;
                    $logEps->EPS_NAME  = $NameEPS;
                    $logsTableEps->save($logEps);
                    $this->loadModel('Eps');
                    $this->set('eps', $this->Eps->find('list', [
                    'keyField' => 'EPS_ID',
                    'valueField' => 'EPS_NAME'
                    ]));
                }
            }
        }
    }
    // Función que crea una Curva S en base al tipo de periodo en project.ctp a través de una solicitud ajax.
    public function ajaxchart()
    {
        $this->layout = false;
        if ($this->request->is('Ajax')) { //Ajax Detection
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/graph/data/?P_PROJECT_ID=".$_POST['work']."&P_PERIOD_TYPE=".$_POST['workselected1'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
            CURLOPT_HTTPHEADER => array(
              "Authorization: Bearer ".$_SESSION["PortalToken"],
              "Cache-Control: no-cache"
            ),
          ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $responses = json_decode($response, true);
                $ArrayStartDate = array();
                $ArrayBL = array();
                $ArrayEV = array();
                $ArrayAC = array();
                $var1 = null;
                if ($responses != null) {
                    $var1 = array_values($responses)[0];
                }
                if ($var1 != null) {
                    foreach ($var1 as $row => $value) {
                        $StartDate = $value["start_date"];
                        $FinishDate = $value["finish_date"];
                        $BL = $value["cum_bl_lu"];
                        $EV = $value["cum_ev_lu"];
                        $AC = $value["cum_ac_lu"];
                        $StartDate1 = date("Y-m-d", strtotime($FinishDate));
                        $StartDate2 = date("Y-m-d", strtotime($StartDate));
                        array_push($ArrayStartDate, $StartDate2);
                        array_push($ArrayBL, $BL);
                        array_push($ArrayEV, $EV);
                        array_push($ArrayAC, $AC);
                        $fecJson = json_encode($ArrayStartDate);
                        $blJson = json_encode($ArrayBL);
                        $evJson = json_encode($ArrayEV);
                        $acJson = json_encode($ArrayAC);
                        $this->set('fecJson', $ArrayStartDate);
                        $this->set('blJson', $ArrayBL);
                        $this->set('evJson', $ArrayEV);
                        $this->set('acJson', $ArrayAC);
                    }
                }
                $longitud = count($ArrayStartDate);
                $this->set('cont', $longitud);
                $this->set('Column1_Color',$_POST['Column1_Color']);
                $this->set('Column2_Color',$_POST['Column2_Color']);
                $this->set('Column3_Color',$_POST['Column3_Color']);
                $this->set('chart_type',$_POST['Column1_Type']);
                $this->set('chart_type2',$_POST['Column2_Type']);
                $this->set('chart_type3',$_POST['Column3_Type']);
                if ($_POST['Column1_Type'] == "line") {
                  $Fill = 0;
                  $this->set('fill',$Fill);
                }
                else {
                  $Fill = 1;
                  $this->set('fill',$Fill);
                }
                if ($_POST['Column2_Type'] == "line") {
                  $Fill_Column2 = 0;
                  $this->set('fill_Column2',$Fill_Column2);
                }
                else {
                  $Fill_Column2 = 1;
                  $this->set('fill_Column2',$Fill_Column2);
                }
                if ($_POST['Column3_Type'] == "line") {
                  $Fill_Column3 = 0;
                  $this->set('fill_Column3',$Fill_Column3);
                  $this->set('dashLength_Column3',7);
                }
                else {
                  $Fill_Column3 = 1;
                  $this->set('fill_Column3',$Fill_Column3);
                  $this->set('dashLength_Column3',0);
                }
            }
        }
    }
    // Función que a través de web services obtiene los colores de los indicadores de proyectos en RGBA
    public function IndicatorColor()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/range/list/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer ".$_SESSION["PortalToken"],
          "Cache-Control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $ColorVar = null;
            if ($response != null) {
                $responseJson = json_decode($response, true);
                $ColorVar = array_values($responseJson)[0];
                $this->set('colorIndicator', $ColorVar);
            }
        }
    }
    public function token(){
      //CURL que genera un token necesario para solicitar un web service mediante una Url, un Client ID y Client Secret.
      $ch = curl_init('http://192.168.0.210:8080/ords/portal/oauth/token');
      // curl_setopt($ch, CURLOPT_HEADER, TRUE);
      curl_setopt($ch, CURLOPT_POST, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);//array
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
      curl_setopt($ch, CURLOPT_USERPWD, "eMA2D5DqyNSsgxc_tPYqTg..:i4LginH4m_75qMbN7rAsjQ..");
      $result=curl_exec($ch);
      curl_close($ch);
      $result_arr = json_decode($result, true);
      $token = array_values($result_arr)[0];
      $_SESSION["PortalToken"] = $token;
    }
    public function importExcelfile ($id = null, $CHART = null){
      $ArrayExcelDate = array();
      $ArrayExcelPlaneado = array();
      $ArrayExcelEjecutado = array();
      $ArrayExcelProyectado = array();
      if ($CHART != null) {
        // $helper = new Helper\Sample();
        $inputFileName = WWW_ROOT . 'files/tg/'.$id.'/'.$CHART;
        $spreadsheet = IOFactory::load($inputFileName);
        $ExcelData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        $EjecutadoTG = null;
        foreach ($ExcelData as $keyExcel => $valueExcel) {
          $PlaneadoExcel = str_replace(',', '.', $valueExcel["A"]);
          $EjecutadoExcel = str_replace(',', '.', $valueExcel["B"]);
          $ProyectadoExcel = str_replace(',', '.', $valueExcel["C"]);
          $dateExcel = $valueExcel["D"];
            array_push($ArrayExcelPlaneado,$PlaneadoExcel);
            if ($EjecutadoExcel == null) {
                $EjecutadoTG = "null";
            }
            else {
              $EjecutadoTG = $EjecutadoExcel;
            }
            array_push($ArrayExcelEjecutado,$EjecutadoTG);
            if ($EjecutadoExcel == null) {
                $EjecutadoTG = "null";
            }
            else {
              $EjecutadoTG = $EjecutadoExcel;
            }
            array_push($ArrayExcelProyectado,$ProyectadoExcel);
            if ($dateExcel != null) {
              array_push($ArrayExcelDate,$dateExcel);
            }
          }
        if (!is_numeric($ArrayExcelDate[0])) {
          unset($ArrayExcelDate[0]);
          unset($ArrayExcelPlaneado[0]);
          unset($ArrayExcelEjecutado[0]);
          unset($ArrayExcelProyectado[0]);
        }
        $this->set('excelPlaneado',$ArrayExcelPlaneado);
        $this->set('excelEjecutado',$ArrayExcelEjecutado);
        $this->set('excelProyectado',$ArrayExcelProyectado);
        $this->set('excelDate',$ArrayExcelDate);
      }
      $longitudArrayDate = count($ArrayExcelDate);
      $this->set('longitudArrayDate', $longitudArrayDate);
    }
    public function ajaxchartTg(){
      if ($this->request->is('Ajax')) {
        $this->importExcelfile($_POST["Project_Code"],$_POST["Project_Excel"]);
        $this->set('Column1_TG_Type',$_POST["Column1_TG_Type"]);
        $this->set('Column2_TG_Type',$_POST["Column2_TG_Type"]);
        $this->set('Column3_TG_Type',$_POST["Column3_TG_Type"]);
        $this->set('Column4_TG_Type',$_POST["Column4_TG_Type"]);
        $this->set('Column5_TG_Type',$_POST["Column5_TG_Type"]);
        $this->set('Column1_TG_Color',$_POST["Column1_TG_Color"]);
        $this->set('Column2_TG_Color',$_POST["Column2_TG_Color"]);
        $this->set('Column3_TG_Color',$_POST["Column3_TG_Color"]);
        $this->set('Column4_TG_Color',$_POST["Column4_TG_Color"]);
        $this->set('Column5_TG_Color',$_POST["Column5_TG_Color"]);
      }
    }
}
