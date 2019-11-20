<?php
namespace App\Controller;

use App\Controller\AppController;

class EventsController extends AppController
{
    public function index()
    {
        try {
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
		public function detail($ryos = null)
    {
			try {
				$this->set('json_ryos', $ryos);
			} catch (\Exception $e) {
					exit($e->getMessage() . "\n");
			}
    }
		private function detail_ws(){

		}
    public function downloadRyos()
    {
        $this->layout = false;
        try {
            if ($this->request->is('Ajax')) {
                $curl = curl_init();
                curl_setopt_array($curl, array(
                  CURLOPT_URL => "http://192.168.0.210:8080/ords/portal/formryos/register/",
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => "",
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 30,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => "POST",
                  CURLOPT_POSTFIELDS => $_POST['ryos_form'],
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
