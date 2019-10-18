<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Chart\Chart;
use PhpOffice\PhpSpreadsheet\Chart\DataSeries;
use PhpOffice\PhpSpreadsheet\Chart\DataSeriesValues;
use PhpOffice\PhpSpreadsheet\Chart\Legend;
use PhpOffice\PhpSpreadsheet\Chart\PlotArea;
use PhpOffice\PhpSpreadsheet\Chart\Title;

class ProjectsController extends AppController
{
    private $Excel_Autor_Name;
    // Función que se ejecuta antes de rederizar cualquier vista dentro la carpeta Projects.
    // public function beforeFilter($event)
    // {
    //     parent::beforeFilter($event);
    //     $this->token();
    //     $this->portalProjects();
    //     // CURL  que obtiene todos los proyectos publicados en el portal administrativo.
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //     CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/publicprojects/list/",
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => "",
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 30,
    //     CURLOPT_CUSTOMREQUEST => "GET",
    //     CURLOPT_HTTPHEADER => array(
    //     "Authorization: Bearer ".$_SESSION["PortalToken"],
    //     "Cache-Control: no-cache"
    //   ),
    // ));
    //     $Proj_response = curl_exec($curl);
    //     $err = curl_error($curl);
    //     curl_close($curl);
    //     if ($err) {
    //         echo "cURL Error #:" . $err;
    //     } else {
    //         $Proj_responses = json_decode($Proj_response, true);
    //         $ArrayProjectCodId = array();
    //         $ArrayProjectCodName = array();
    //         $All_Proj = array_values($Proj_responses)[0];
    //         $this->set('All_Proj', $All_Proj);
    //         foreach ($All_Proj as $row => $value3) {
    //           //Asigna por separado los valores del array de All_Proj
    //             $ProjectCodId = $value3["id_p_project"];
    //             $ProjectCodStatus = $value3["is_enabled"];
    //             array_push($ArrayProjectCodId, $ProjectCodId);
    //             $ProjectCodName = $value3["name"];
    //             $ProjectIdP6 = $value3["code_p6"];
    //             $ProjectCodId = $value3["id_p_project"];
    //             // Registra el proyecto en la BD local
    //             $logsTable = \Cake\ORM\TableRegistry::get('Projects', array('table' => 'projects'));
    //             $log = $logsTable->newEntity();
    //             $log->ID_PROJECT  = $ProjectCodId;
    //             $log->PROJECT_NAME  = $ProjectCodName.' ('.$ProjectIdP6.')';
    //             $log->STATUS  = $ProjectCodStatus;
    //             $logsTable->save($log);
    //             // $this->set('ProjectCodId', $ArrayProjectCodId);//RV
    //         }
    //         $ArrayProjDelete = array();
    //         $AllProjForDelete = $this->Projects->find('all');
    //         // Foreach que obtiene todos los projectos que provienen de Web services y se encuentra deshabilitados o eliminados.
    //         foreach ($AllProjForDelete as $ProjDelete) {
    //             if (!in_array($ProjDelete->ID_PROJECT, $ArrayProjectCodId) && $ProjDelete->STATUS == 1) {
    //                 array_push($ArrayProjDelete, $ProjDelete->id);
    //             }
    //         }
    //         // Foreach que elimina que no existen en el WS de la base de datos local.
    //         foreach ($ArrayProjDelete as $ProjxDelete) {
    //             $this->delete($ProjxDelete);
    //         }
    //     }
    // }
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
        $projects = $this->Projects->get($id);
        if ($this->Projects->delete($projects)) {
        } else {
            $this->Flash->error(__('El proyecto no pudo ser eliminado, por favor, intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function edit($id = null)
    {
        $projects = $this->Projects->get($id);
        if ($this->request->is(['patch','post','put'])) {
            $projects = $this->Projects->patchEntity($projects, $this->request->data);
            if ($this->Projects->save($projects)) {
                return $this->redirect(['action'=>'index']);
            } else {
                $error = '';
                $this->set('error', $error);
                $this->Flash->error('El proyecto no pudo ser modificado');
            }
        }
        $this->set(compact('projects'));
    }
    public function pdf($Pdf_Title = null){
      $this->viewBuilder()->options([
      'pdfConfig' => [
        'orientation' => 'portrait',
        'filename' => $Pdf_Title.'.pdf'
      ]
      ]);
    }
    private function ProjectWbs($graph = null){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/wbs/list/?v_project='.$graph);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        $this->set('wbsEstructure', $var1);
      }
      curl_close($ch);
    }
    private function ProjectsFase(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/projectcodefase/list/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        $this->set('fase', $var1);
      }
      curl_close($ch);
    }
    Private function ProjectProfile($id_project = null){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/projects/projectid/'.$id_project);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        foreach ($var1 as $ws_project => $project_value) {
          $this->set('ws_project', $project_value);
        }
      }
      curl_close($ch);
    }
    Private function ProjectHitos($id_project = null){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/activity/list/?v_project_id='.$id_project);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        // foreach ($var1 as $ws_project => $project_value) {
          $this->set('hitos_project', $var1);
        // }
      }
      curl_close($ch);
    }
    // public function project($id, $current_user_pr = null,$ActualEps = null, $Categoria1=null, $Categoria2 = null, $NameEps = null, $title = null, $idEpsParent = null,$name = null, $code = null, $spi = null, $corte = null,
    //  $graph = null)
    public function project($id_p6 = null, $json_breadcrumb = null, $id = null)
    {
      $project_id_decode = base64_decode(urldecode($id_p6));
      $proj_id_decode = base64_decode(urldecode($id));
      $project_breadcrumb_decode = base64_decode(urldecode($json_breadcrumb));
      $project_json_decode = json_decode($project_breadcrumb_decode, true);
      $this->set('json_project', $project_breadcrumb_decode);
      $this->set('array_project', $project_json_decode);
      $this->set('project_id', $project_id_decode);
      $this->set('project_id_p6', $proj_id_decode);
      // DONA CHART TEMPORAL
      // $this->Donut($project_id_decode);
      $this->ProjectWbs($project_id_decode);
      // $this->ProjectHitos($project_id_decode);
      $this->loadModel('Projects');
        $local_id_project = $this->Projects->find(
              'all',
              array('conditions' => array('Projects.ID_PROJECT' => $proj_id_decode))
          )->select(['Projects.id', 'Projects.CHART']);
        foreach ($local_id_project as $local_db) {
          $this->Risks($local_db->id);
          $this->importExcelfile($proj_id_decode, $local_db->CHART);
        }
    }
    public function ImportExcelCaf()
    {
      $this->layout = false;
      if ($this->request->is('Ajax')) { //Ajax Detection
          $this->ExcelAutor();
          $spreadsheet = new Spreadsheet();
          $spreadsheet->getProperties()
          ->setCreator($this->Excel_Autor_Name)
          ->setLastModifiedBy($this->Excel_Autor_Name)
          ->setTitle("Curva de avance físico del proyecto ".$_POST["Name"])
          ->setDescription(
              "Curva de avance físico del proyecto ".$_POST["Name"]."."
          )
          ->setKeywords("Curva S")
          ->setCategory("Curva S");
          $worksheet = $spreadsheet->getActiveSheet();
          $worksheet->setTitle("Curva_S");
          $worksheet->setCellValue('B1', $_POST["Name"]);
          $worksheet->setCellValue('A2', 'Fecha');
          $worksheet->setCellValue('B2', "Planeado");
          $worksheet->setCellValue('C2', 'Ejecutado');
          $worksheet->setCellValue('D2', 'Estimado a completar');
          $worksheet->getRowDimension('1')->setRowHeight(80);
          $worksheet->getColumnDimension('A')->setWidth(25);
          $worksheet->getColumnDimension('B')->setWidth(25);
          $worksheet->getColumnDimension('C')->setWidth(25);
          $worksheet->getColumnDimension('D')->setWidth(25);
          $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
          $drawing->setName('Logo');
          $drawing->setDescription('Logo');
          if ($_POST["Id"] != 34012 && $_POST["Id"] != 34013 && $_POST["Id"] != 34015 && $_POST["Id"] != 34016 && $_POST["Id"] != 34018) {
            $Img_Dir = WWW_ROOT . 'img/logos/excel/logo.png';
          }else {
            $Img_Dir = WWW_ROOT . 'img/logos/excel/'.$_POST["Id"].'.png';
          }
          $drawing->setPath($Img_Dir); //Imagen
          $drawing->setHeight(70);
          $drawing->setCoordinates('A1');
          $drawing->setOffsetX(13);
          $drawing->setOffsetY(15);
          $Contador_Array = count($_POST["Curva_Date"]);
          for ($i=0; $i < $Contador_Array; $i++) {
            $Excel_Row = $i + 3;
            $worksheet->setCellValue('A'.$Excel_Row, $_POST["Curva_Date"][$i]);
            $worksheet->setCellValue('B'.$Excel_Row, $_POST["Curva_Plan"][$i]);
            $worksheet->setCellValue('C'.$Excel_Row, $_POST["Curva_Ejec"][$i]);
            $worksheet->setCellValue('D'.$Excel_Row, $_POST["Curva_Estimado"][$i]);
          }
          $dataSeriesLabels = [
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_S!$B$2', null, 1), // Planeado
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_S!$C$2', null, 1), // Ejecutado
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_S!$D$2', null, 1), // Estimado
          ];
          $xAxisTickValues = [
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_S!$A$3:$A$'.$Contador_Array, null, 4), // Fechas
          ];
          $dataSeriesValues = [
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_S!$B$3:$B$'.$Contador_Array, null, 4),
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_S!$C$3:$C$'.$Contador_Array, null, 4),
            new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_S!$D$3:$D$'.$Contador_Array, null, 4),
          ];
          $dataSeriesValues[2]->setLineWidth(20000);
          // Build the dataseries
          $series = new DataSeries(
            DataSeries::TYPE_LINECHART, // plotType
            DataSeries::GROUPING_STANDARD, // plotGrouping
            range(0, count($dataSeriesValues) - 1), // plotOrder
            $dataSeriesLabels, // plotLabel
            $xAxisTickValues, // plotCategory
            $dataSeriesValues        // plotValues
          );
          // Set the series in the plot area
          $plotArea = new PlotArea(null, [$series]);
          // Set the chart legend
          $legend = new Legend(Legend::POSITION_BOTTOM, null, false);
          $title = new Title('Curva de avance físico');
          $yAxisLabel = new Title('Valores');
          // Create the chart
          $chart = new Chart(
            'chart1', // name
            $title, // title
            $legend, // legend
            $plotArea, // plotArea
            true, // plotVisibleOnly
            0, // displayBlanksAs
            null, // xAxisLabel
            $yAxisLabel  // yAxisLabel
          );
          $drawing->setWorksheet($spreadsheet->getActiveSheet());
          // Set the position where the chart should appear in the worksheet
          $chart->setTopLeftPosition('F7');
          $chart->setBottomRightPosition('Q25');
          // Add the chart to the worksheet
          $worksheet->addChart($chart);
          // Save Excel 2007 file
          $writer = new Xlsx($spreadsheet);
          $writer->setIncludeCharts(true);
          $callStartTime = microtime(true);
          $Excel_File_Name = $_POST["Name"]."_Curva_S.xlsx";
          $writer->save($Excel_File_Name);
      }
      $this->autoRender = false;
    }
    public function ImportExcelTg(){
      $this->layout = false;
      if ($this->request->is('Ajax')) { //Ajax Detection
        $spreadsheet = new Spreadsheet();
        $this->ExcelAutor();
        $spreadsheet->getProperties()
        ->setCreator($this->Excel_Autor_Name)
        ->setLastModifiedBy($this->Excel_Autor_Name)
        ->setTitle("Curva de tres generaciones del proyecto ".$_POST["Name"])
        ->setDescription(
            "Curva de tres generaciones del proyecto ".$_POST["Name"]."."
        )
        ->setKeywords("Curva TG")
        ->setCategory("Curva TG");
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheet->setTitle("Curva_TG");
        $worksheet->setCellValue('B1', $_POST["Name"]);
        $worksheet->setCellValue('A2', 'Fecha');
        $worksheet->setCellValue('B2', "Planeado");
        $worksheet->setCellValue('C2', 'Ejecutado');
        $worksheet->setCellValue('D2', "Planeado");
        $worksheet->setCellValue('E2', 'Ejecutado');
        $worksheet->setCellValue('F2', 'Proyectado');
        $worksheet->getRowDimension('1')->setRowHeight(80);
        $worksheet->getColumnDimension('A')->setWidth(25);
        $worksheet->getColumnDimension('B')->setWidth(25);
        $worksheet->getColumnDimension('C')->setWidth(25);
        $worksheet->getColumnDimension('D')->setWidth(25);
        $worksheet->getColumnDimension('E')->setWidth(25);
        $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
        $drawing->setName('Logo');
        $drawing->setDescription('Logo');
        if ($_POST["Id"] != 34012 && $_POST["Id"] != 34013 && $_POST["Id"] != 34015 && $_POST["Id"] != 34016 && $_POST["Id"] != 34018) {
          $Img_Dir = WWW_ROOT . 'img/logos/excel/logo.png';
        }else {
          $Img_Dir = WWW_ROOT . 'img/logos/excel/'.$_POST["Id"].'.png';
        }
        $drawing->setPath($Img_Dir); //Imagen
        $drawing->setHeight(70);
        $drawing->setCoordinates('A1');
        $drawing->setOffsetX(13);
        $drawing->setOffsetY(15);
        $Contador_Array_Date = count($_POST["Info_Grafica_Date"]);
        for ($i=1; $i <= $Contador_Array_Date; $i++) {
          $Excel_Row = $i + 2;
          $worksheet->setCellValue('A'.$Excel_Row, $_POST["Info_Grafica_Date"][$i]);
          $cell_value = $worksheet->getCellByColumnAndRow(1, $i + 2)->getValue();
         if(strlen($_POST["Info_Grafica_Date"][$i])<5){
               if ($_POST["Info_Grafica_Planeado"][$i] != "null") {
                 $worksheet->setCellValue('B'.$Excel_Row, $_POST["Info_Grafica_Planeado"][$i]);
               }else{
                 $worksheet->setCellValue('B'.$Excel_Row, "");
               }
               if ($_POST["Info_Grafica_Ejecutado"][$i] != "null") {
                $worksheet->setCellValue('C'.$Excel_Row, $_POST["Info_Grafica_Ejecutado"][$i]);
              }else{
                $worksheet->setCellValue('C'.$Excel_Row, "");
              }
         }else if(strlen($_POST["Info_Grafica_Date"][$i])>4){
              if ($_POST["Info_Grafica_Planeado"][$i] != "null") {
               $worksheet->setCellValue('D'.$Excel_Row, $_POST["Info_Grafica_Planeado"][$i]);
             }else {
               $worksheet->setCellValue('D'.$Excel_Row, "");
             }
             if ($_POST["Info_Grafica_Ejecutado"][$i] != "null") {
               $worksheet->setCellValue('E'.$Excel_Row, $_POST["Info_Grafica_Ejecutado"][$i]);
             }else {
               $worksheet->setCellValue('E'.$Excel_Row, "");
             }
             if ($_POST["Info_Grafica_Proyectado"][$i] != "null") {
               $worksheet->setCellValue('F'.$Excel_Row, $_POST["Info_Grafica_Proyectado"][$i]);
             }else {
               $worksheet->setCellValue('F'.$Excel_Row, "");
             }
           }
        }
        $dataSeriesLabels = [
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$B$2', null, 1), // Planeado
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$C$2', null, 1), // Ejecutado
        ];
        $dataSeriesLabels2 = [
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$D$2', null, 1), // Planeado
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$E$2', null, 1), // Ejecutado
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$F$2', null, 1), // Estimado
        ];
        $xAxisTickValues = [
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_STRING, 'Curva_TG!$A$3:$A$'.$Excel_Row, null, 4), // Fechas
        ];
        $dataSeriesValues = [
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_TG!$B$3:$B$'.$Excel_Row, null, 4),
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_TG!$C$3:$C$'.$Excel_Row, null, 4),
        ];
        $dataSeriesValues2 = [
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_TG!$D$3:$D$'.$Excel_Row, null, 4),
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_TG!$E$3:$E$'.$Excel_Row, null, 4),
          new DataSeriesValues(DataSeriesValues::DATASERIES_TYPE_NUMBER, 'Curva_TG!$F$3:$F$'.$Excel_Row, null, 4),
        ];
        // $dataSeriesValues[2]->setLineWidth(20000);
        // Build the dataseries
        $series = new DataSeries(
          DataSeries::TYPE_BARCHART, // plotType
          DataSeries::GROUPING_STANDARD, // plotGrouping
          range(0, count($dataSeriesValues) - 1), // plotOrder
          $dataSeriesLabels, // plotLabel
          $xAxisTickValues, // plotCategory
          $dataSeriesValues        // plotValues
        );
        $series2 = new DataSeries(
          DataSeries::TYPE_LINECHART, // plotType
          DataSeries::GROUPING_STANDARD, // plotGrouping
          range(0, count($dataSeriesValues2) - 1), // plotOrder
          $dataSeriesLabels2, // plotLabel
          $xAxisTickValues, // plotCategory
          $dataSeriesValues2        // plotValues
        );
        // Set the series in the plot area
        $plotArea = new PlotArea(null, [$series,$series2]);
        // Set the chart legend
        $legend = new Legend(Legend::POSITION_BOTTOM, null, false);
        $title = new Title('Curva de tres Generaciones');
        $yAxisLabel = new Title('Valores');
        // Create the chart
        $chart = new Chart(
          'chart1', // name
          $title, // title
          $legend, // legend
          $plotArea, // plotArea
          true, // plotVisibleOnly
          0, // displayBlanksAs
          null, // xAxisLabel
          $yAxisLabel  // yAxisLabel
        );
        $drawing->setWorksheet($spreadsheet->getActiveSheet());
        // Set the position where the chart should appear in the worksheet
        $chart->setTopLeftPosition('I3');
        $chart->setBottomRightPosition('X21');
        // Add the chart to the worksheet
        $worksheet->addChart($chart);
        // Save Excel 2007 file
        // $filename = $helper->getFilename(__FILE__);
        $writer = new Xlsx($spreadsheet);
        $writer->setIncludeCharts(true);
        $callStartTime = microtime(true);
        $Excel_File_Name = $_POST["Name"]."_Curva_Tg.xlsx";
        $writer->save($Excel_File_Name);
      }
      $this->autoRender = false;
    }
    public function DeleteExcelFile(){
      unlink(WWW_ROOT .$_POST["Name"]);
    }
    public function ExcelAutor(){
      $this->layout = false;
      foreach ($_SESSION["Auth"] as $ProjArray => $valueArray) {
          $User_Excel_Name = $valueArray["V_FIRST_NAME"]." ".$valueArray["V_LAST_NAME"];
          $this->Excel_Autor_Name = $User_Excel_Name;
      }
      $this->autoRender = false;
    }
    private function ProjectCodeCategory(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/projectcodecategory/list/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        $this->set('category', $var1);
      }
      curl_close($ch);
    }
    private function ProjectCodeMec(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/projectcodemec/list/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        $this->set('mec', $var1);
      }
      curl_close($ch);
    }
    private function ProjectCodeArea(){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/projectcodearea/list/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = 'Accept: */*';
      $headers[] = 'Accept-Encoding: gzip, deflate';
      $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
      $headers[] = 'Cache-Control: no-cache';
      $headers[] = 'Connection: keep-alive';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      else {
        $results = json_decode($result, true);
        $var1 = array_values($results)[0];
        $this->set('area', $var1);
      }
      curl_close($ch);
    }
    public function projects($projects_json = null)
    {
      $this->ProjectsFase();
      $this->ProjectCodeArea();
      $this->ProjectCodeCategory();
      $this->ProjectCodeMec();
      $projects_decode = base64_decode(urldecode($projects_json));
      $projects_json_decode = json_decode($projects_decode, true);
      $this->set('array_projects', $projects_json_decode);
      $this->set('json_projects', $projects_decode);
      // $this->IndicatorColor();
      // $company_json_decode = json_decode($company_decode, true);
      // $this->set('array_company', $company_json_decode);
      // $this->set('json_company', $company_decode);
      //   $this->ProjectsFase();
      //   $this->ProjectCodeArea();
      //   $this->ProjectCodeCategory();
      //   $this->ProjectCodeMec();
      //   $this->AllProjects();
      //   $this->IndicatorColor();
      //   // $this->RomanNumbers();
      //   // Decodifica todas la variables pasadas a través de la URL.
      //   $decoded_NameEpsPrjs = base64_decode(urldecode($NameEps));
      //   $decoded_titlePrjs = base64_decode(urldecode($title));
      //   $this->pdf($decoded_NameEpsPrjs);
      //   $decoded_EpsPrjs = base64_decode(urldecode($EPS));
      //   $decoded_Ctg1Prjs = base64_decode(urldecode($Categoria1));
      //   $decoded_Ctg2Prjs = base64_decode(urldecode($Categoria2));
      //   $decoded_IdEpsParent = base64_decode(urldecode($idEpsParent));
      //   $this->set('idEpsParent', $decoded_IdEpsParent);
      //   $this->set('NameEpsPrjs', $decoded_NameEpsPrjs);
      //   $this->set('titlePrjs', $decoded_titlePrjs);
      //   $decoded_current_user_pr = base64_decode(urldecode($current_user_pr));
      //   $Codigo_Categoria = base64_decode(urldecode($Categoria1)); //Variable que Decodifica el código de la categoría.
      //   $Categoria2_Decoded = base64_decode(urldecode($Categoria2));
      //   $Nombre_Categoria = null; //Variable que va a almacenar el nombre de la categoría con base al código de categoría
      //   if ($Codigo_Categoria == 870) {
      //     $Nombre_Categoria = "Crecimiento";
      //   }elseif ($Codigo_Categoria == 871) {
      //     $Nombre_Categoria = "Sostenimiento";
      //   }
      //   $this->set('Categoria2',$Categoria2_Decoded);
      //   $this->set('CategoryPrTitle',$Nombre_Categoria);
      //   //Variable que obtiene todos los proyectos relacionados a la EPS actual.
      //   $projectsCategory = $this->Projects->find(
      //       'all',
      //       array('conditions' => array('Projects.EPS_REL' => $decoded_EpsPrjs, 'Projects.CATEGORY' => $Nombre_Categoria ))
      //   );
      //   $this->set('projectsCategory', $projectsCategory);
      //   $this->set('ActualEps', $decoded_EpsPrjs);
      //   $this->set('Categoria1', $decoded_Ctg1Prjs);
      //   $curl = curl_init();
      //   curl_setopt_array($curl, array(
      //   CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS=".$decoded_EpsPrjs."&V_PROJCODE1=".$decoded_Ctg1Prjs."&V_PROJCODE2=".$decoded_Ctg2Prjs."&V_ID_USER=".$decoded_current_user_pr,
      //   CURLOPT_RETURNTRANSFER => true,
      //   CURLOPT_ENCODING => "",
      //   CURLOPT_MAXREDIRS => 10,
      //   CURLOPT_TIMEOUT => 30,
      //   CURLOPT_CUSTOMREQUEST => "GET",
      //   CURLOPT_HTTPHEADER => array(
      //     "Authorization: Bearer ".$_SESSION["PortalToken"],
      //     "Cache-Control: no-cache"
      //   ),
      // ));
      //   $response = curl_exec($curl);
      //   $err = curl_error($curl);
      //   curl_close($curl);
      //   if ($err) {
      //       echo "cURL Error #:" . $err;
      //   } else {
      //       $responses = json_decode($response, true);
      //       $ArrayEpsId = array();
      //       $ArrayParentEpsId = array();
      //       $ArrayName = array();
      //       $ArrayLevel = array();
      //       // Arreglo que contiene los proyecto por categoría.
      //       $ProjectsWS = array_values($responses)[0];
      //       $this->set('ProjectsWS', $ProjectsWS);
      //   }
    }
    public function Indicators()
    {
        $this->loadModel('Indicators');
        $indicators= $this->Indicators->find('all');
        $this->set('indicators', $indicators->first());
    }
    public function Risks($Project_Code = null)
    {
        // Carga el modelo del Risks.
        $this->loadModel('Risks');
        // Obtiene todos los elementos de la tabla Risks
        $rks= $this->Risks->find('all',
        array('conditions' => array('Risks.PROJECT_CODE'=> $Project_Code)))
        ->order(['RISK_NUMBER' => 'ASC']);
        $this->set('rks', $rks);
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
                    array_push($ArrayEV, str_replace(',','.',$EV));
                    //REVISAR!!!
                    if($EV == ""){
                      array_push($ArrayBL, str_replace(',','.',$BL));
                    }else {
                      array_push($ArrayBL, null);
                    }
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
                    $this->set('Plan', $Planeado);
                    $this->set('Ejec', $Ejecutado);
                }
            } else {
                $this->set('Plan', $Plan);
                $this->set('Ejec', $Ejec);
            }
        }
    }
    // Function que se encarga de recibir el json de la eps de lvl 1 seleccionada en la pestaña portal proyectos, necesaria para los breadcrumbs
    public function companies($json_parent_eps = null)
    {
      try {
        //Variables que almacena el json en base 64 con la eps de lvl 1
        $json_parents = base64_decode(urldecode($json_parent_eps));
        // Decodificar json en array
        $json_eps = json_decode($json_parents, true);
        $this->set('array_parents_eps', $json_eps);
        $this->set('json_parents_eps', $json_parents);
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function company($json_company = null)
    {
      $company_decode = base64_decode(urldecode($json_company));
      $company_json_decode = json_decode($company_decode, true);
      $this->set('array_company', $company_json_decode);
      $this->set('json_company', $company_decode);
    }
    public function Company_Title($decoded_Id_eps = null){
      if ($decoded_Id_eps == 23305) {
        $Company_title_1 = "PLAN DE TRABAJO";
        $Company_title_2 = "PROYECTOS";
        $this->set('Company_title_1',$Company_title_1);
        $this->set('Company_title_2',$Company_title_2);
      }else {
        $Company_title_1 = "CRECIMIENTO";
        $Company_title_2 = "SOSTENIMIENTO";
        $this->set('Company_title_1',$Company_title_1);
        $this->set('Company_title_2',$Company_title_2);
      }
    }
    public function companyGas($current_user = null, $Id_eps = null, $NameEps = null, $titleParentEps = null, $idParentEps = null)
    {
      $this->company($current_user, $Id_eps, $NameEps, $titleParentEps, $idParentEps);
    }
    // Función que obtiene todos los proyectos registros en la BD local. QUITAR
    public function AllProjects(){
      $AllLocalDBProjects = $this->Projects->find('all');
      $this->set('AllLocalDBProjects', $AllLocalDBProjects->all());
    }
    // Función que se encarga la pestaña de Portal proyectos REVISAR - RV !
    public function portalProjects()
    {
      try {
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/list/eps/",
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => "",
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 30,
        //   CURLOPT_CUSTOMREQUEST => "GET",
        //   CURLOPT_HTTPHEADER => array(
        //     "Authorization: Bearer ".$_SESSION["PortalToken"],
        //     "Cache-Control: no-cache")));
        //   $responseEps = curl_exec($curl);
        //   $err = curl_error($curl);
        //   curl_close($curl);
        //   if ($err) {
        //       echo "cURL Error #:" . $err;
        //   } else {
        //     $this->PortalProjectsLogic($responseEps);
        //   }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
    }
    //Función que se encarga
    private function PortalProjectsLogic($responseEps = null){
      try {
        // $responsesEps = json_decode($responseEps, true);
        // $ArrayEps = array_values($responsesEps)[0];
        // foreach ($ArrayEps as $rowEps => $valueEps) {
        //     if ($valueEps["parent_eps_object_id"] != null && $valueEps["parent_eps_object_id"]!=23305) {
        //         $EpsIdNumber = $valueEps["eps_id"];
        //         // $ParentEpsIdNumber = $valueEps["parent_eps_object_id"]; RV
        //         $NameEPS = $valueEps["name"];
        //         $LevelEPS = $valueEps["level"];
        //         $this->Save_WS_Info_Eps_Table($EpsIdNumber, $NameEPS);
        //     }
        //  }
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    // Función que guarda el id y nombre de la EPS en la tabla de EPS de la bd interna (necesario para las tareas de asignación de proyectos provenientes de la fuente alterna y para la asignación de riesgos).
    private function Save_WS_Info_Eps_Table($EpsIdNumber = null, $NameEPS = null){
      // Obtención de la tabla
      $logsTableEps = \Cake\ORM\TableRegistry::get('Eps', array('table' => 'eps'));
      $logEps = $logsTableEps->newEntity();
      // Columna y dato a almacenar
      $logEps->EPS_ID  = $EpsIdNumber;
      $logEps->EPS_NAME  = $NameEPS;
      $logsTableEps->save($logEps); //Finalizar proceso
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
    public function importExcelfile($id = null, $CHART = null){
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
