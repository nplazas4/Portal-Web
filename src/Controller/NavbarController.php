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
              // $headers[] = 'Accept: */*';
              $headers[] = 'Accept-Encoding: gzip, deflate';
              $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
              // $headers[] = 'Cache-Control: no-cache';
              // $headers[] = 'Connection: keep-alive';
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
                    if ($AllEpsId == 23306) {
                      array_push($eps_childrens, array("child_name" => $valueEps["name"], "child_eps_id" => $valueEps["eps_id"], "eps_id" => $valueEps["parent_eps_object_id"], "name" => "Transmisión y Transporte"));
                    }
                    if ($AllEpsId == 23307) {
                      array_push($eps_childrens, array("child_name" => $valueEps["name"], "child_eps_id" => $valueEps["eps_id"], "eps_id" => $valueEps["parent_eps_object_id"], "name" => "Distribución"));
                    }
                    if ($AllEpsId == 23308) {
                      array_push($eps_childrens, array("child_name" => $valueEps["name"], "child_eps_id" => $valueEps["eps_id"], "eps_id" => $valueEps["parent_eps_object_id"], "name" => "Generación"));
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
            // $headers[] = 'Accept: */*';
            $headers[] = 'Accept-Encoding: gzip, deflate';
            $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
            // $headers[] = 'Cache-Control: no-cache';
            // $headers[] = 'Connection: keep-alive';
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
                  // array_push($array_parent_eps, array("child_name" => $value_parent_eps["name"], "child_eps_id" => $value_parent_eps["eps_id"], "eps_id" => $value_parent_eps["parent_eps_object_id"], "name" => "Generación"));
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
    //
    public function companies()
    {
      $this->layout = false;
      try {
        if ($this->request->is('Ajax')) { //Ajax Detection
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'http://primavera.eeb.com.co:8080/ords/portal/list/epsid/'.$_GET["eps_id"]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $headers = array();
          // $headers[] = 'Accept: */*';
          $headers[] = 'Accept-Encoding: gzip, deflate';
          $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
          // $headers[] = 'Cache-Control: no-cache';
          // $headers[] = 'Connection: keep-alive';
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          } else {
            $this->companiesLogic($result);
          }
        }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    //Función que se encarga
    private function companiesLogic($responseEps = null){
      $this->layout = false;
      try {
          $json_parent_eps = json_decode($responseEps, true);
          $parents_eps  = array_values($json_parent_eps)[0];
          $array_parent_eps = array();
          foreach ($parents_eps as $parent_eps => $value_parent_eps) {
              if ($value_parent_eps["parent_eps_object_id"] == 23306 || $value_parent_eps["parent_eps_object_id"] == 23307 || $value_parent_eps["parent_eps_object_id"] == 23308) {
                  array_push($array_parent_eps, array("child_name" => $value_parent_eps["name"], "child_eps_id" => $value_parent_eps["eps_id"], "eps_id" => $value_parent_eps["parent_eps_object_id"], "name" => $_GET["eps_parent_name"]));
              }
          }
          $this->response->type('json');
          $this->response->body(json_encode($array_parent_eps));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    // COMPANY CRECIMIENTO
    public function companyCrec()
    {
      $this->layout = false;
      try {
        if ($this->request->is('Ajax')) { //Ajax Detection
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS='.$_GET["eps_id"].'&V_PROJCODE1=870&V_PROJCODE2=8996&V_ID_USER='.$_GET["user_id"]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $headers = array();
          // $headers[] = 'Accept: */*';
          $headers[] = 'Accept-Encoding: gzip, deflate';
          $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
          // $headers[] = 'Cache-Control: no-cache';
          // $headers[] = 'Connection: keep-alive';
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          } else {
            $this->company_crec_logic($result);
          }
        }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    private function company_crec_logic($crec_proj = null){
      $this->layout = false;
      try {
          $json_crec_proj = json_decode($crec_proj, true);
          $crec_proj_array  = array_values($json_crec_proj)[0];
          $count_crec_array = count($crec_proj_array);
          $array_crec_proj = array();
          array_push($array_crec_proj, array("crec_number" => $count_crec_array, "category_name" => 'Crecimiento'));
          $this->response->type('json');
          $this->response->body(json_encode($array_crec_proj));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    // SOSTENIMIENTO
    public function companySost()
    {
      $this->layout = false;
      try {
        if ($this->request->is('Ajax')) { //Ajax Detection
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS='.$_GET["eps_id"].'&V_PROJCODE1=871&V_PROJCODE2=8997&V_ID_USER='.$_GET["user_id"]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $headers = array();
          // $headers[] = 'Accept: */*';
          $headers[] = 'Accept-Encoding: gzip, deflate';
          $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
          // $headers[] = 'Cache-Control: no-cache';
          // $headers[] = 'Connection: keep-alive';
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          } else {
            $this->company_sost_logic($result);
          }
        }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    private function company_sost_logic($sost_proj = null){
      $this->layout = false;
      try {
          $json_sost_proj = json_decode($sost_proj, true);
          $sost_proj_array  = array_values($json_sost_proj)[0];
          $count_sost_array = count($sost_proj_array);
          $array_sost_proj = array();
          array_push($array_sost_proj, array("sost_number" => $count_sost_array, "category_name" => 'Sostenimiento'));
          $this->response->type('json');
          $this->response->body(json_encode($array_sost_proj));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    // MEC
    public function companyMec()
    {
      $this->layout = false;
      try {
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS='.$_GET["eps_id"].'&V_PROJCODE1=1921&V_ID_USER='.$_GET["user_id"]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $headers = array();
          // $headers[] = 'Accept: */*';
          $headers[] = 'Accept-Encoding: gzip, deflate';
          $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
          // $headers[] = 'Cache-Control: no-cache';
          // $headers[] = 'Connection: keep-alive';
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          } else {
            $this->company_mec_logic($result);
          }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    private function company_mec_logic($mec_proj = null){
      $this->layout = false;
      try {
          $json_mec_proj = json_decode($mec_proj, true);
          $mec_proj_array  = array_values($json_mec_proj)[0];
          $count_mec_array = count($mec_proj_array);
          $array_mec_proj = array();
          array_push($array_mec_proj, array("mec_number" => $count_mec_array, "category_name" => 'Mec'));
          $this->response->type('json');
          $this->response->body(json_encode($array_mec_proj));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    //Función que se encarga
    private function companyLogic2($result, $result2, $result3){
      $this->layout = false;
      try {
          $array_company_numbers = array();
          $Array_Result = array_values($result)[0];
          $Array_Result2 = array_values($result2)[0];
          $Array_Result3 = array_values($result3)[0];
          $count_crec_array = count($Array_Result);
          $count_sost_array = count($Array_Result2);
          $count_mec_array = count($Array_Result3);
          $this->set('test', count($Array_Result));
          // foreach ($parents_eps as $parent_eps => $value_parent_eps) {
          //     if ($value_parent_eps["parent_eps_object_id"] == 23306 || $value_parent_eps["parent_eps_object_id"] == 23307 || $value_parent_eps["parent_eps_object_id"] == 23308) {
          array_push($array_company_numbers, array("crec" => $count_crec_array, "sost" => $count_sost_array, "mec" => $count_mec_array));
          //     }
          // }
          $this->response->type('json');
          $this->response->body(json_encode($array_company_numbers));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    public function projects(){
      $this->layout = false;
      try {
        if ($this->request->is('Ajax')) { //Ajax Detection
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'http://192.168.0.210:8080/ords/portal/projects/list/?V_EPS=23306&V_PROJCODE1=871&V_PROJCODE2=8997&V_ID_USER=121');
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
          $headers = array();
          // $headers[] = 'Accept: */*';
          $headers[] = 'Accept-Encoding: gzip, deflate';
          $headers[] = 'Authorization: Bearer '.$_SESSION["PortalToken"];
          // $headers[] = 'Cache-Control: no-cache';
          // $headers[] = 'Connection: keep-alive';
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          } else {
            $this->projectsLogic($result);
          }
        }
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
    private function projectsLogic($result){
      $this->layout = false;
      try {
          $array_company_numbers = array();
          $json_projects = json_decode($result, true);
          $Array_Result = array_values($json_projects)[0];
          $this->response->type('json');
          $this->response->body(json_encode($Array_Result));
          return $this->response;
      } catch (\Exception $e) {
          exit($e->getMessage() . "\n");
      }
      $this->autoRender = false;
    }
}
