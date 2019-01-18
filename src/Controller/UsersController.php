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
      // $users = $this->paginate($this->Users);
      // $this->set(compact('users'));
  	}
    public function beforeFilter($event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }
    //recibe el usuario autentificado
    public function isAuthorized($user)
    {
      if (isset($user['rol']) and $user['rol']===0)
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
      $this->layout = 'blank';
    //   $this->token();
      if ($this->request->is('post'))
      {
        $user = $this->Auth->identify();
        // // // print_r($user);
        if ($user) {
          $this->Auth->setUser($user);
          return $this->redirect($this->Auth->redirectUrl());
        }
        else {
          $this->Flash->error('Datos invalidos, intente de nuevo',['key'=>'Auth']);
            }
        }
      }
     // public function login()
     // {
     //   // $this->layout = 'blank';
     //   // $this->token();
     //   // if ($this->request->is('post'))
     //   // {
     //   //   $data = $this->request->data;
     //   //   $Us = array_values($data)[0];
     //   //   $Ps = array_values($data)[1];
     //   //   $ch = curl_init();
     //   //   curl_setopt($ch, CURLOPT_URL, "http://demo-bog.verano.com.co:7002/ords/primavera_link/hr/v1/autenticate?v_username=".$Us."&v_password=".$Ps);
     //   //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     //   //   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
     //   //   $headers = array();
     //   //   $headers[] = "Authorization: Bearer ".$_SESSION["token"];
     //   //   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     //   //   $result = curl_exec($ch);
     //   //   if (curl_errno($ch)) {
     //   //     echo 'Error:' . curl_error($ch);
     //   //   }
     //   //   curl_close ($ch);
     //   //   $result_arr = json_decode($result, true);
     //   //   $var = array_values($result_arr)[0];
     //   //   if (count($var) != 0) {
     //   //     $var2 = array_values($var)[0];
     //   //     $var3 = array_values($var2)[3];
     //   //   if ($var3 != 0) {
     //   //       // $_SESSION["sessionm"] = $var2;
     //   //       $user = $var2;
     //   //       print_r($user);
     //   //       // print_r($user);
     //   //       if ($user) {
     //   //         $this->Auth->setUser($user);
     //   //         return $this->redirect($this->Auth->redirectUrl());
     //   //       }
     //   //       else {
     //   //         $this->Flash->error('Datos invalidos, intente de nuevo',['key'=>'Auth']);
     //   //       }
     //   //     }
     //   //     else {
     //   //       $this->Flash->error('Usuario Deshabilitado');
     //   //     }
     //   //   }
     //   //   else {
     //   //     $this->Flash->error('Datos incorrectos');
     //   //   }
     //   // }
     //   // }
     //   }
       public function Token()
       {
         // $ch = curl_init('http://demo-bog.verano.com.co:7002/ords/primavera_link/oauth/token');
         // // curl_setopt($ch, CURLOPT_HEADER, TRUE);
         // curl_setopt($ch,CURLOPT_POST,false);
         // curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);//array
         // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
         // curl_setopt($ch,CURLOPT_POSTFIELDS, "grant_type=client_credentials");
         // curl_setopt($ch,CURLOPT_USERPWD, "MNm6SOKiKCjM6Jxk42ytuQ..:uTBoxzQ1EqOOU7EpqFv_nA..");
         // $result=curl_exec ($ch);
         // curl_close ($ch);
         // $result_arr = json_decode($result, true);
         // $token = array_values($result_arr)[0];
         // $_SESSION["token"] = $token;
       }
    public function logout()
    {
      $this->redirect($this->Auth->logout());
    }
    public function AddProject(){
    }
    public function AddProjectCode(){
      // put your code.
    }
    public function AddEPS(){
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
