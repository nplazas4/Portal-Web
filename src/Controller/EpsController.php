<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class EpsController extends AppController
{
    /**
     * Index method
     *
     */
function index()
  	{
      $this->alert();
      $eps = $this->paginate($this->Eps);
      $this->set('eps',$eps);
  	}
    public function alert(){
      $error = 'display:none';
      $this->set('error',$error);
      $success = 'display:none';
      $this->set('success',$success);
    }
    public function Add(){
      $this->alert();
      $eps = $this->Eps->newEntity();
      if ($this->request->is('post')) {
          $eps = $this->Eps->patchEntity($eps, $this->request->getData());
          if ($this->Eps->save($eps)) {
              $this->Flash->success(__('La EPS ha sido creada.'));
              return $this->redirect(['action' => 'index']);
          }
          $error = '';
          $this->set('error',$error);
          $this->Flash->error('La EPS no pudo ser creada');
      }
      $this->set(compact('eps'));
    }
    public function delete($id = null)
    {
        $this->alert();
        $this->request->allowMethod(['post', 'delete']);
        $eps = $this->Eps->get($id);
        if ($this->Eps->delete($eps)) {
          $this->Flash->success('La EPS ha sido eliminada');
          $success = '';
          $this->set('success',$success);
        } else {
            $error = '';
            $this->set('error',$error);
            $this->Flash->error('La EPS no pudo ser eliminada. Por favor, intente de nuevo');
        }
        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $eps = $this->Eps->get($id);

        $this->set('eps', $eps);
    }
    public function edit($id = null)
    {
        $this->alert();
        $eps = $this->Eps->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $eps = $this->Eps->patchEntity($eps,$this->request->data);
          if ($this->Eps->save($eps))
           {
             $this->Flash->success('La EPS ha sido modificada');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $error = '';
            $this->set('error',$error);
            $this->Flash->error('La EPS no pudo ser modificada');
          }
        }
        $this->set(compact('eps'));
    }
}
