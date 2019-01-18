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
      $eps = $this->paginate($this->Eps);
      $this->set('eps',$eps);
  	}
    public function Add(){
      $eps = $this->Eps->newEntity();
      if ($this->request->is('post')) {
          $eps = $this->Eps->patchEntity($eps, $this->request->getData());
          if ($this->Eps->save($eps)) {
              $this->Flash->success(__('La EPS ha sido creada.'));

              return $this->redirect(['action' => 'Add']);
          }
          $this->Flash->error(__('La EPS no ha sido creada. Por favor, intenta de nuevo.'));
      }
      $this->set(compact('eps'));
    }
    public function AddProjectCode(){
      // put your code.
    }
    public function AddEPS(){
      //$eps = $this->Eps->find('all');
      $eps = $this->paginate($this->Eps);
      $this->set('eps',$eps);
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eps = $this->Eps->get($id);
        if ($this->Eps->delete($eps)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
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
        $eps = $this->Eps->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $eps = $this->Eps->patchEntity($eps,$this->request->data);
          if ($this->Eps->save($eps))
           {
             $this->Flash->success('El usuario ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('El usuario no pudo ser modificado');
          }
        }
        $this->set(compact('eps'));
    }
}
