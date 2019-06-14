<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate'=>[
              'Form'=>[
                'fields'=>[
                  'username'=>'email',
                  'password'=>'password'
                ]
              ]
            ],
            'loginAction'=>[
              'controller'=>'Users',
              'action'=>'login'
            ],
            'authError'=>'Ingrese sus datos',
            'loginRedirect'=>[
              'controller'=>'Pages',
              'action'=>'home'
            ],
            'logoutRedirect'=>[
              'controller'=>'Users',
              'action'=>'login'
            ],
            //redirigir a un usuario si no cumple requisitos
            'unauthorizedRedirect'=>$this->referer()
        ]);

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function beforeFilter(Event $event)
    {
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
          "Authorization: Bearer ".$token,
          "Cache-Control: no-cache"
        ),
        ));
        $responseEps = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $responsesEps = json_decode($responseEps, true);
            $ArrayEpsId = array();
            $ArrayParentEpsId = array();
            $ArrayName = array();
            $ArrayLevel = array();
            $AllvarEps = array_values($responsesEps)[0];
            $this->set('AllEps', $AllvarEps);
            // Foreach que alimenta el navbar con la EPS de forma dinámica.
            foreach ($AllvarEps as $rowEps => $valueEps) {
                if ($valueEps["parent_eps_object_id"] != null && $valueEps["parent_eps_object_id"]!=23305) {
                    $AllEpsId = $valueEps["eps_id"];
                    $ParentEpsId2 = $valueEps["parent_eps_object_id"];
                    $AllNameEps = $valueEps["name"];
                    if ($AllEpsId == 23305) {
                        $titleGEB = 'Corporativo';
                        $this->set('titleGEB', $titleGEB);
                    } elseif ($AllEpsId == 23307) {
                        $titleDIS = 'Distribución';
                        $this->set('titleDIS', $titleDIS);
                    } elseif ($AllEpsId == 23306) {
                        $titleTRANS = 'Transmisión y transporte';
                        $this->set('titleTRANS', $titleTRANS);
                    } elseif ($AllEpsId == 23308) {
                        $titleGEN = 'Generación';
                        $this->set('titleGEN', $titleGEN);
                    }
                    $Level2 = $valueEps["level"];
                    array_push($ArrayName, $AllNameEps);
                    array_push($ArrayEpsId, $AllEpsId);
                    $this->set('AllNameEps', $ArrayName);
                    $this->set('AllEpsId', $ArrayEpsId);
                }
            }
        }
        $this->set('current_user', $this->Auth->user());
    }
    //autorizar vistas
    public function isAuthorized($user)
    {
        if (isset($user['rol']) and $user['rol']===1) {
            return true;
        } else {
            return false;
        }
    }
}
