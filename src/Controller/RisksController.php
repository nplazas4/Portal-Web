<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class RisksController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      // $users = $this->paginate($this->Users);
      // $this->set(compact('users'));
      $projectcodes = $this->paginate($this->Projectcodes);
      $this->set('projectcodes',$projectcodes);
  	}
    public function Add(){
      $projectcodes = $this->Projectcodes->newEntity();
      if ($this->request->is('post')) {
          $projectcodes = $this->Projectcodes->patchEntity($projectcodes, $this->request->getData());
          if ($this->Projectcodes->save($projectcodes)) {
              $this->Flash->success(__('El código de proyecto ha sido creada.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('El código de proyecto no ha sido creada. Por favor, intenta de nuevo.'));
      }
      $this->set(compact('projectcodes'));
    }
    public function AddProjectCode(){
      // put your code.
    }
    public function AddEPS(){
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectcodes = $this->Projectcodes->get($id);
        if ($this->Projectcodes->delete($projectcodes)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
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
        $projectcodes = $this->Projectcodes->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $projectcodes = $this->Projectcodes->patchEntity($projectcodes,$this->request->data);
          if ($this->Projectcodes->save($projectcodes))
           {
             $this->Flash->success('El usuario ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('El usuario no pudo ser modificado');
          }
        }
        $this->set(compact('projectcodes'));
    }
}
