<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class ProjectcodesController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      $this->alert();
      $projectcodes = $this->paginate($this->Projectcodes);
      $this->set('projectcodes',$projectcodes);
  	}
    public function alert(){
      $error = 'display:none';
      $this->set('error',$error);
      $success = 'display:none';
      $this->set('success',$success);
    }
    public function Add(){
      $this->alert();
      $projectcodes = $this->Projectcodes->newEntity();
      if ($this->request->is('post')) {
          $projectcodes = $this->Projectcodes->patchEntity($projectcodes, $this->request->getData());
          if ($this->Projectcodes->save($projectcodes)) {
              $this->Flash->success(__('El código de proyecto ha sido creada.'));

              return $this->redirect(['action' => 'index']);
          }
          $error = '';
          $this->set('error',$error);
      }
      $this->set(compact('projectcodes'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectcodes = $this->Projectcodes->get($id);
        if ($this->Projectcodes->delete($projectcodes)) {
          $success = '';
          $this->set('success',$success);
        } else {
          $error = '';
          $this->set('error',$error);
        }
        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $projectcodes = $this->Projectcodes->get($id);
        $this->set('projectcodes', $projectcodes);
    }
    public function edit($id = null)
    {
        $this->alert();
        $projectcodes = $this->Projectcodes->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $projectcodes = $this->Projectcodes->patchEntity($projectcodes,$this->request->data);
          if ($this->Projectcodes->save($projectcodes))
           {
             $this->Flash->success('El código ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $error = '';
            $this->set('error',$error);
          }
        }
        $this->set(compact('projectcodes'));
    }
}
