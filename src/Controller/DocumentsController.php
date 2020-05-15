<?php
namespace App\Controller;

use App\Controller\AppController;

class DocumentsController extends AppController
{
<<<<<<< HEAD
    public function index($view = null)
    {
        try {
          $this->set('view', $view);
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
		public function form()
    {
        try {
=======
    public function beforeFilter($event)
    {
      if(isset($this->Auth)){
        parent::beforeFilter($event);
        $this->Auth->allow('image');
      }
    }
    public function index($chart_num = null, $id = null, $chart_type = null)
    {
        try {
          if($chart_num != null && $id != null && $chart_type != null){
            $id_chart = base64_decode(urldecode($id));
            $this->main($chart_num, $id, $chart_type); 
          }
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
<<<<<<< HEAD
		public function detail($user = null, $code)
    {
			try {
				$this->set('user', $user);
        $this->set('code', $code);
			} catch (\Exception $e) {
					exit($e->getMessage() . "\n");
			}
    }
    public function sendEvent()
    {
        $this->layout = false;
        try {
            if ($this->request->is('Ajax')) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => "http://192.168.1.153:7001/ords/projects_portal/registerevent/event/".$_POST['id_project'],
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "POST",
                  CURLOPT_POSTFIELDS => $_POST['la_form'],
                  CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer ".$_SESSION["PortalToken"],
                    "cache-control: no-cache"
                  ),
                ));
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                if ($err) {
                    echo "cURL Error #:" . $err;
                } else {
                    // echo $response;
                    $result_json = json_decode($response, true);
                    $this->response->type('json');
                    $this->response->body(json_encode($result_json));
                    return $this->response;
                }
            }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
    }
=======
		public function pdf($Pdf_Title = "test"){
      $this->viewBuilder()->options([
        'pdfConfig' => [
          'orientation' => 'portrait',
          'filename' => $Pdf_Title.'.pdf'
        ]
      ]);
    }
    public function main($chart_num = null, $id = null, $chart_type = null){
      try {
        if($chart_num == "1"){
          $this->chart_1($id, $chart_type);
        }
        elseif($chart_num == "2"){
          $this->chart_2($id, $chart_type);
        }
        elseif($chart_num == "3"){
          $this->chart_3($id, $chart_type);
        }
        elseif($chart_num == "4"){
          $this->chart_4($id, $chart_type);
        }
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function chart_1($id = null, $chart_type = null){
      try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/documents/graph1/".$id,
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
            if ($response != null) {
                $responseJson = json_decode($response, true);
                $arrayChartData = array_values($responseJson)[0];
                $this->set('chartJson', json_encode($arrayChartData));
                $this->set('chartData', $arrayChartData);
                $this->set('chartType', $chart_type);
            }
        }
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function chart_2($id = null, $chart_type = null){
      try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/documents/graph2/".$id,
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
            if ($response != null) {
                $responseJson = json_decode($response, true);
                $arrayChartData = array_values($responseJson)[0];
                $this->set('chartJson', json_encode($arrayChartData));
                $this->set('chartData', $arrayChartData);
                $this->set('chartType', $chart_type);
            }
        }   
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function chart_3($id = null, $chart_type = null){
      try {
        $curl = curl_init();
        $this->set("test","http://192.168.0.210:8080/ords/portal/documents/graph3/".urlencode($id));
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/documents/graph3/".urlencode($id),
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer OWdpinE6VdPnx61TwqBHZQ.."
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $responseJson = json_decode($response, true);
        $arrayChartData = array_values($responseJson)[0];
        $this->set('chartJson', json_encode($arrayChartData));
        $this->set('chartData', $arrayChartData);
        $this->set('chartType', $chart_type);
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function chart_4($id = null, $chart_type = null){
      try {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/documents/graph4/".$id,
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
            if ($response != null) {
                $responseJson = json_decode($response, true);
                $arrayChartData = array_values($responseJson)[0];
                $this->set('chartJson', json_encode($arrayChartData));
                $this->set('chartData', $arrayChartData);
                $this->set('chartType', $chart_type);
            }
        }
      } catch (\Exception $e) {
        exit($e->getMessage() . "\n");
      }
    }
    public function image(){
      $this->layout = false;
      // $this->autoRender = false;
    }  
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
}
