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
    public function NavPortalProjects()
    {
        $this->layout = false;
        try {
            if ($this->request->is('Ajax')) { //Ajax Detection
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
                $this->Logic_Nav_Portal_Projects($result);
            }
          }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
    }
    private function Logic_Nav_Portal_Projects($responseEps = null)
    {
        $this->layout = false;
        try {
          // if ($this->request->is('Ajax')) { //Ajax Detection
            $responsesEps = json_decode($responseEps, true);
            $AllvarEps = array_values($responsesEps)[0];
            $eps_level_1 = array();
            $eps_childrens = array();
            foreach ($AllvarEps as $rowEps => $valueEps) {
                if ($valueEps["parent_eps_object_id"] != null && $valueEps["parent_eps_object_id"]!=23305) {
                    $AllEpsId = $valueEps["parent_eps_object_id"];
                    if ($AllEpsId == 23306 || $AllEpsId == 23307 || $AllEpsId == 23308) {
                        array_push($eps_childrens, array("name" => $valueEps["name"], "eps_id" => $valueEps["eps_id"], "parent_eps_id" => $valueEps["parent_eps_object_id"]));
                    }
                }
            }
            $this->response->type('json');
            $this->response->body(json_encode($eps_childrens));
            return $this->response;
          // }
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
    }
    public function portalProjects()
    {
      $this->layout = false;
      try {
        if ($this->request->is('Ajax')) { //Ajax Detection
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
            } else {
                $this->portal_projects_logic($result);
            }
          }
        } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
        }
        $this->autoRender = false;
      }
    //Función que se encarga
    private function portal_projects_logic($response_parents_eps = null){
      $this->layout = false;
      try {
        // if ($this->request->is('Ajax')) { //Ajax Detection
          $json_parent_eps = json_decode($response_parents_eps, true);
          $parents_eps  = array_values($json_parent_eps)[0];
          $array_parent_eps = array();
          foreach ($parents_eps as $parent_eps => $value_parent_eps) {
              if ($value_parent_eps["eps_id"] == 23305 || $value_parent_eps["eps_id"] == 23306 || $value_parent_eps["eps_id"] == 23307 || $value_parent_eps["eps_id"] == 23308) {
                  array_push($array_parent_eps, array("name" => $value_parent_eps["name"], "eps_id" => $value_parent_eps["eps_id"], "parent_eps_id" => $value_parent_eps["parent_eps_object_id"]));
              }
          }
          $this->response->type('json');
          $this->response->body(json_encode($array_parent_eps));
          return $this->response;
        // }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
}
