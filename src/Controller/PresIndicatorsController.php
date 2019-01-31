<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class PresindicatorsController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
  	{
      // $users = $this->paginate($this->Users);
      // $this->set(compact('users'));
      $presindicators = $this->paginate($this->Presindicators);
      $this->set('presindicators',$presindicators);
      $this->Projects();
      $this->Indicator();
  	}
    public function Add(){
      $this->index();
      $presindicators = $this->Presindicators->newEntity();
      if ($this->request->is('post')) {
          $presindicators = $this->Presindicators->patchEntity($presindicators, $this->request->getData());
          if ($this->Presindicators->save($presindicators)) {
              $this->Flash->success(__('El indicador de presupuesto ha sido creado.'));

              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('El indicador de presupuesto no ha podido ser creado. Por favor, intente de nuevo.'));
      }
      $this->set(compact('presindicators'));
    }
    public function AddEPS(){
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $presindicators = $this->Presindicators->get($id);
        if ($this->Presindicators->delete($presindicators)) {
            $this->Flash->success(__('El indicador ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El indicador no pudo ser eliminado. Por favor, intente de nuevo.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $presindicators = $this->Presindicators->get($id);

        $this->set('presindicators', $presindicators);
    }
    public function edit($id = null)
    {
        $this->index();
        $presindicators = $this->Presindicators->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $presindicators = $this->Presindicators->patchEntity($presindicators,$this->request->data);
          if ($this->Risks->save($risks))
           {
             $this->Flash->success('El indicador ha sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('El indicador no pudo ser modificado');
          }
        }
        $this->set(compact('presindicators'));
    }
    public function Projects(){
      $this->loadModel('Projects');
      $this->set('projects',$this->Projects->find('list', [
      'keyField' => 'id',
      'valueField' => 'PROJECT_NAME'
      ]));
    }
    public function Indicator(){
      $this->loadModel('Presindicators');
      $this->set('P_Indicator',$this->Presindicators->find('list', [
      'keyField' => 'AC_ID',
      'valueField' => 'AC_ID'
      ]));
    }
}
