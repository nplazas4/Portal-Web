<?php
namespace App\Controller;
use App\Controller\AppController;

class NavbarController extends AppController
{
    public function initialize()
    {
      parent::initialize();
      $this->loadComponent('RequestHandler');
    }
    public function index()
    {
        /*Identifica si exíste algún usuario logeado en el sistema, en ser el caso redirecciona a la pestaña home, sino permite el acceso
        a la página de login*/
        if ($this->request->is('Ajax')) { //Ajax Detection
          // $now = new Time();
          $data = "test";
          $json_data = json_encode($data);
          $response = $this->response->withType('json')->withStringBody($json_data);
          return $response;
        }
        $this->autoRender = false;
    }
    Private function ProjectProfile($id_project = null){
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.210:8080/ords/portal/list/eps/');
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
    public function NavPortalProjects()
    {
        $this->layout = false;
        $this->autoRender = false;
        try {
            if ($this->request->is('Ajax')) { //Ajax Detection
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_PORT => "8080",
            CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/list/eps/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
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
                $this->Logic_Nav_Portal_Projects($responseEps);
            }
          }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
    public function Logic_Nav_Portal_Projects($responseEps = null)
    {
        $this->layout = false;
        $this->autoRender = false;
        try {
          if ($this->request->is('Ajax')) { //Ajax Detection
            $responsesEps = json_decode($responseEps, true);
            $AllvarEps = array_values($responsesEps)[0];
            $eps_level_1 = array();
            $eps_childrens = array();
            foreach ($AllvarEps as $rowEps => $valueEps) {
                if ($valueEps["parent_eps_object_id"] != null && $valueEps["parent_eps_object_id"]!=23305) {
                    $AllEpsId = $valueEps["parent_eps_object_id"];
                    if ($AllEpsId == 23305 || $AllEpsId == 23306 || $AllEpsId == 23307 || $AllEpsId == 23308) {
                        array_push($eps_childrens, array("name" => $valueEps["name"], "eps_id" => $valueEps["eps_id"], "parent_eps_id" => $valueEps["parent_eps_object_id"]));
                    }
                }
            }
            $this->response->type('json');
            $this->response->body(json_encode($eps_childrens));
            return $this->response;
          }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
}
