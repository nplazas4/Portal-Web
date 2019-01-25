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
    public function alert(){
      $error = 'display:none';
      $this->set('error',$error);
    }
    public function Add()
    {
      $this->alert();
      $projects = $this->Projects->newEntity();
      if ($this->request->is('post')) {
          $projects = $this->Projects->patchEntity($projects, $this->request->getData());
          if ($this->Projects->save($projects)) {
              $this->Flash->success(__('El proyecto ha sido creada.'));

              return $this->redirect(['action' => 'index']);
          }
          $error = '';
          $this->set('error',$error);
          $this->Flash->error('El proyecto no pudo ser creado');
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
            $this->Flash->success(__('El proyecto ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El proyecto no pudo ser eliminado, por favor, intente de nuevo.'));
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
        $this->alert();
        $projects = $this->Projects->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $projects = $this->Projects->patchEntity($projects,$this->request->data);
          if ($this->Projects->save($projects))
           {
             $this->Flash->success('El proyecto ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $error = '';
            $this->set('error',$error);
            $this->Flash->error('El proyecto no pudo ser modificado');
          }
        }
        $this->set(compact('projects'));
    }
    public function project($id)
    {
        $this->index();
        $this->Charts();
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
    public function Charts(){
      $this->loadModel('Charts');
      $charts = $this->Charts->find('all');
      $this->set('charts',$charts->all());
      // print_r($risks->all());
    }
}
