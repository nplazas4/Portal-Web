<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      $projects = $this->paginate($this->Projects);
      $this->set('projects',$projects);
      $this->Indicators();
      $this->Risks();
      $this->Period();
  	}
    public function alert(){
      $error = 'display:none';
      $this->set('error',$error);
    }
    public function Add()
    {
      $this->alert();
      $projects = $this->Projects->newEntity();
      if ($this->request->is('post')) {
          $projects = $this->Projects->patchEntity($projects, $this->request->getData());
          if ($this->Projects->save($projects)) {
              $this->Flash->success(__('El proyecto ha sido creada.'));

              return $this->redirect(['action' => 'index']);
          }
          $error = '';
          $this->set('error',$error);
          $this->Flash->error('El proyecto no pudo ser creado');
      }
      $this->set(compact('projects'));
    }
    public function AddEPS(){
      //$eps = $this->Eps->find('all');
      $eps = $this->paginate($this->Eps);
      $this->set('eps',$eps);
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projects = $this->Projects->get($id);
        if ($this->Projects->delete($projects)) {
            $this->Flash->success(__('El proyecto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El proyecto no pudo ser eliminado, por favor, intente de nuevo.'));
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
        $this->alert();
        $projects = $this->Projects->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $projects = $this->Projects->patchEntity($projects,$this->request->data);
          if ($this->Projects->save($projects))
           {
             $this->Flash->success('El proyecto ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $error = '';
            $this->set('error',$error);
            $this->Flash->error('El proyecto no pudo ser modificado');
          }
        }
        $this->set(compact('projects'));
    }
    public function project($id)
    {
        $this->index();
        $this->Charts();
        $this->ChartAF();
        $this->IndicatorsAC();
        $this->IndicatorsAC2();
        $this->IndicatorsAC3();
        $projects = $this->Projects->get($id);
        $this->set('projects', $projects);
    }
    public function projects(){
      $this->index();
    }
    public function Indicators(){
      $this->loadModel('Indicators');
      $indicators= $this->Indicators->find('all');
      $this->set('indicators',$indicators->first());
    }
    public function Risks(){
      $this->loadModel('Risks');
      $rks= $this->Risks->find('all');
      $this->set('rks',$rks->all());
    }
    public function Charts(){
      $this->loadModel('Charts');
      $charts = $this->Charts->find('all');
      $this->set('charts',$charts->all());
    }
    public function IndicatorsAC(){
      $this->loadModel('Presindicators');
      $indicatorsAC = $this->Presindicators->find('all');
      $this->set('indicatorsAC',$indicatorsAC->all());
    }
    public function IndicatorsAC2(){
      $this->loadModel('Presindicators');
      $indicatorsAC2 = $this->Presindicators->find('all');
      $this->set('indicatorsAC2',$indicatorsAC2->all());
    }
    public function IndicatorsAC3(){
      $this->loadModel('Presindicators');
      $indicatorsAC3 = $this->Presindicators->find('all');
      $this->set('indicatorsAC3',$indicatorsAC3->all());
    }
    public function Period()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'http://23.99.203.76:7001/ords/portal/periodtype/period');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


        $headers = array();
        $headers[] = 'Authorization: Bearer hmlUoDM3XZMFM9qu82-akA..';
        $headers[] = 'Postman-Token: 3306332e-7998-49c0-8471-d74e63e7087c';
        $headers[] = 'Cache-Control: no-cache';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result3 = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        $_SESSION['algo'] = $result3;
    }
    function ChartAF()
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_PORT => "7001",
        CURLOPT_URL => "http://23.99.203.76:7001/ords/portal/graph/data/?P_PROJECT_ID=14897&P_PERIOD_TYPE=3",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
          "Authorization: Bearer oYPPniqltX9X8JnYRBgo8A..",
          "Postman-Token: fd1a5722-dd7d-414a-88d9-df5ad54d3d8a",
          "cache-control: no-cache"
        ),
      ));

      $response = curl_exec($curl);
      // $_SESSION['AF'] = $response;
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        // echo $responses;
        $responses = json_decode($response, true);
        $ArrayStartDate = array();
        $ArrayBL = array();
        $ArrayEV = array();
        $ArrayAC = array();
        $var1 = array_values($responses)[0];
        foreach($var1 as $row => $value)
        {
            $StartDate = $value["start_date"];
            $BL = $value["cum_bl_lu"];
            $EV = $value["cum_ev_lu"];
            $AC = $value["cum_ac_lu"];
            $StartDate2 = date("Y-m-d", strtotime($StartDate));
            array_push($ArrayStartDate , $StartDate2);
            array_push($ArrayBL, $BL);
            array_push($ArrayEV, $EV);
            array_push($ArrayAC, $AC);
            $fecJson = json_encode($ArrayStartDate);
            $blJson = json_encode($ArrayBL);
            $evJson = json_encode($ArrayEV);
            $acJson = json_encode($ArrayAC);
            $this->set('fecJson',$ArrayStartDate);
            $this->set('blJson',$ArrayBL);
            $this->set('evJson',$ArrayEV);
            $this->set('acJson',$ArrayAC);
        }
        $longitud = count($ArrayStartDate);
        $this->set('cont',$longitud);
      }
    }
    public function adv($var = null){
        print_r($var);
    }
}
