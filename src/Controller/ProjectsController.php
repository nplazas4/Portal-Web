<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class ProjectsController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      // $users = $this->paginate($this->Users);
      // $this->set(compact('users'));
      $projects = $this->paginate($this->Projects);
      $this->set('projects',$projects);
      $this->Indicators();
      $this->Risks();
      // $this->loadModel('Eps');
      // $eps = $this->Eps->find('all');
      // $this->set('eps', $eps->first());
  	}
    public function Add()
    {
      $projects = $this->Projects->newEntity();
      if ($this->request->is('post')) {
          $projects = $this->Projects->patchEntity($projects, $this->request->getData());
          if ($this->Projects->save($projects)) {
              $this->Flash->success(__('El proyecto ha sido creada.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('El proyecto no ha sido creada. Por favor, intenta de nuevo.'));
      }
      $this->set(compact('projects'));
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
        $projects = $this->Projects->get($id);
        if ($this->Projects->delete($projects)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $projects = $this->Projects->get($id);
        $this->set('projects', $projects);
    }
    public function edit($id = null)
    {
        $projects = $this->Projects->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $projects = $this->Projects->patchEntity($projects,$this->request->data);
          if ($this->Projects->save($projects))
           {
             $this->Flash->success('El usuario ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('El usuario no pudo ser modificado');
          }
        }
        $this->set(compact('projects'));
    }
    public function project($id)
    {
        $this->index();
        $projects = $this->Projects->get($id);
        $this->set('projects', $projects);
    }
    public function projects(){
      $this->index();
    }
    public function Indicators(){
      $this->loadModel('Indicators');
      $indicators= $this->Indicators->find('all');
      $this->set('indicators',$indicators->first());
    }
    public function Risks(){
      $this->loadModel('Risks');
      $rks= $this->Risks->find('all');
      $this->set('rks',$rks->all());
      // print_r($risks->all());
    }
}
