<?php
namespace App\Controller;

use App\Controller\AppController;

class DocumentsController extends AppController
{
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
        } catch (\Exception $e) {
            exit($e->getMessage() . "\n");
        }
    }
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
                  CURLOPT_URL => "http://primavera.eeb.com.co:8080/ords/portal/registerevent/event/".$_POST['id_project'],
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
}
