<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      $this->token();
      $error = 'display:none';
      $this->set('error',$error);
      $errorInac = 'display:none';
      $this->set('errorInac',$errorInac);
  	}
    public function beforeFilter($event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }
    //recibe el usuario autentificado
    public function isAuthorized($user)
    {
      if (isset($user['V_ROL']) and $user['V_ROL']==='Viewer')
      {
        if (in_array($this->request->action,['home','view','logout']))
        {
          return true;
        }
      }
      return parent::isAuthorized($user);
    }
    public function login()
    {
      $this->index();
      $this->layout = 'blank';
      $this->token();
      if ($this->request->is('post'))
      {
      $data = $this->request->data;
      $Us = array_values($data)[0];
      $Ps = array_values($data)[1];
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'http://192.168.1.153:7001/ords/projects_portal/authentication/users/');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "V_EMAIL=".$Us."&V_PASS=".$Ps);
      curl_setopt($ch, CURLOPT_POST, 1);

      $headers = array();
      $headers[] = "Authorization: Bearer ".$_SESSION["tokenP"];
      $headers[] = 'Content-Type: application/x-www-form-urlencoded';
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close ($ch);
      $result_arr = json_decode($result, true);
      if ($result_arr != null) {
        $var = array_values($result_arr);
        if ($var[1] != 0)
            {
                $user = $result_arr;
                 if ($user)
                 {
                   $this->Auth->setUser($user);
                   return $this->redirect($this->Auth->redirectUrl());
                 }
                 else
                 {
                   $error = '';
                   $this->set('error',$error);
                 }
            }
       else
          {
            $errorInac = '';
            $this->set('errorInac',$errorInac);
          }
      }
      else
      {
        $error = '';
        $this->set('error',$error);
      }

    // if($this->Auth->user()) {
    //     return $this->redirect(['controller'=>'PortalProjects','action' => 'home']);
    //   }
    // else{
    //   if ($this->request->is('post'))
    //   {
    //     $user = $this->Auth->identify();
    //     // // // print_r($user);
    //     if ($user) {
    //       $this->Auth->setUser($user);
    //       return $this->redirect($this->Auth->redirectUrl());
    //     }
    //     else {
    //           $this->Flash->error('Datos invalidos, intente de nuevo',['key'=>'Auth']);
    //           $error = '';
    //           $this->set('error',$error);
    //         }
    //     }
      }
    }
     // public function login()
     // {
     //   $this->layout = 'blank';
     //   $this->token();
     //   if ($this->request->is('post'))
     //   {
     //     $data = $this->request->data;
     //     $Us = array_values($data)[0];
     //     $Ps = array_values($data)[1];
     //     $ch = curl_init();
     //     curl_setopt($ch, CURLOPT_URL, "http://demo-bog.verano.com.co:7002/ords/primavera_link/hr/v1/autenticate?v_username=".$Us."&v_password=".$Ps);
     //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
     //     $headers = array();
     //     $headers[] = "Authorization: Bearer ".$_SESSION["token"];
     //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     //     $result = curl_exec($ch);
     //     if (curl_errno($ch)) {
     //       echo 'Error:' . curl_error($ch);
     //     }
     //     curl_close ($ch);
     //     $result_arr = json_decode($result, true);
     //     $var = array_values($result_arr)[0];
     //     if (count($var) != 0) {
     //       $var2 = array_values($var)[0];
     //       $var3 = array_values($var2)[3];
     //     if ($var3 != 0) {
     //         // $_SESSION["sessionm"] = $var2;
     //         $user = $var2;
     //         print_r($user);
     //         // print_r($user);
     //         if ($user) {
     //           $this->Auth->setUser($user);
     //           return $this->redirect($this->Auth->redirectUrl());
     //         }
     //         else {
     //           $this->Flash->error('Datos invalidos, intente de nuevo',['key'=>'Auth']);
     //         }
     //       }
     //       else {
     //         $this->Flash->error('Usuario Deshabilitado');
     //       }
     //     }
     //     else {
     //       $this->Flash->error('Datos incorrectos');
     //     }
     //    }
     //   }
       public function Token()
       {
         $ch = curl_init('http://192.168.1.153:7001/ords/projects_portal/oauth/token');
         // curl_setopt($ch, CURLOPT_HEADER, TRUE);
         curl_setopt($ch,CURLOPT_POST,false);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);//array
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         curl_setopt($ch,CURLOPT_POSTFIELDS, "grant_type=client_credentials");
         curl_setopt($ch,CURLOPT_USERPWD, "M-Lw7z5Q3DheSdHUTk1SyQ..:TWVMj5Ch1ke6U2hfxKuQfw..");
         $result=curl_exec ($ch);
         curl_close ($ch);
         $result_arr = json_decode($result, true);
         $token = array_values($result_arr)[0];
         $_SESSION["tokenP"] = $token;
       }
    public function logout()
    {
      $this->redirect($this->Auth->logout());
    }
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->role = 'user';
            $user->active = 1;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario ha sido creado'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('El usuario no ha sido creado. Por favor, intenta de nuevo.'));
        }
        $this->set(compact('user'));
    }
}
