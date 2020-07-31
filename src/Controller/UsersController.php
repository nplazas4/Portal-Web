<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        // Avisos de error por si el usuario o contraseña son incorrectos o este se encuentra inactivo.
        $error = 'display:none';
        $this->set('error', $error);
        $errorInactivo = 'display:none';
        $this->set('errorInactivo', $errorInactivo);
    }
    public function beforeFilter($event)
    {
        $this->token();
        parent::beforeFilter($event);
    }
    //recibe el usuario autentificado REVISAR FUNCIONALIDAD.
    public function isAuthorized($user)
    {
        if (isset($user['V_ROL']) and $user['V_ROL']==='Viewer') {
            if (in_array($this->request->action, ['home','logout'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
    // Función que controla el inicio de sesión.
    public function login()
    {

        $this->token();
        // Condicional que comprueba si el usuario ha sido identificado.
        if ($this->Auth->user()) {
            // Redirecciona al usuario a la pestaña de home.
            return $this->redirect(['controller'=>'Pages','action' => 'home']);
        } else {
            // Regresa al usuario a la pestaña de inicio de sesión.
            $this->index();
            // Elimina el header y footer.
            $this->layout = 'blank';
            // Condicional evalúa si el inicio de sesión se realiza mediante una petición de tipo POST.
            if ($this->request->is('post')) {
                //Variable obtiene de forma de array los datos enviados del formulario de login.
                $PostData = $this->request->data;
                //Nombre de usario - email.
                $User = array_values($PostData)[0];
                // Contraseña
                $Password = array_values($PostData)[1];

                $base64 = 'http://primavera.eeb.com.co:8080/ords/portal/authentication/users/?V_TEXT_IN='.base64_encode($_SESSION["PortalToken"].":".$User.":".$Password);

                /*Curl que llama el Web Service de login o autenticación mediante la URL y los parametros de usuario y contraseña y
                un token generado desde la Función Token.*/

              $curl = curl_init();

              curl_setopt_array($curl, array(
                CURLOPT_URL => $base64,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_HTTPHEADER => array(
                  "V_TEXT_IN: ".base64_encode($_SESSION["PortalToken"].":".$User.":".$Password),
                  "Authorization: Bearer ".$_SESSION["PortalToken"]
                ),
              ));

              $response = curl_exec($curl);

              curl_close($curl);
                //Decodifica un string de JSON
                $result_login = json_decode($response, true);
                // Evalua el resultado del web services.
                if ($result_login != null) {
                    // Convierte el JSON del WS en un array.
                    $var = array_values($result_login);
                    //Evalúa si el usuario se encuentra activo.
                    if ($result_login["V_ACTIVE"] != 0) {
                        //User almacena el registro del usuario identificado en el Web Service.
                        $user = $result_login;
                        if ($user) {
                            //Asigna al usuario dentro el método Auth creado en el AppController
                            $this->Auth->setUser($user);
                            // Redirecciona a la página solictada en el método Auth del AppController
                            return $this->redirect($this->Auth->redirectUrl());
                        } else {
                            //Aviso si el usuario o contraseña son incorrectos.
                            $error = '';
                            $this->set('error', $error);
                        }
                    } else {
                        // Aviso si el usuario se encuentra inactivo.
                        $errorInactivo = '';
                        $this->set('errorInactivo', $errorInactivo);
                    }
                } else {
                    $error = '';
                    $this->set('error', $error);
                }
            }
        }
    }
    public function token(){
      //CURL que genera un token necesario para solicitar un web service mediante una Url, un Client ID y Client Secret.
      $ch = curl_init('http://primavera.eeb.com.co:8080/ords/portal/oauth/token');
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
    // Función que cierra la sesión actual.
    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }
}
