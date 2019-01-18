<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 *
 */
class IndicatorsController extends AppController
{
    /**
     * Index method
     *
     */
function index()
  	{
      $indicators = $this->paginate($this->Indicators);
      $this->set('indicators',$indicators);
  	}
    public function Add(){
      $indicators = $this->Indicators->newEntity();
      if ($this->request->is('post')) {
          $indicators = $this->Indicators->patchEntity($indicators, $this->request->getData());
          if ($this->Indicators->save($indicators)) {
              $this->Flash->success(__('La EPS ha sido creada.'));

              return $this->redirect(['action' => 'Add']);
          }
          $this->Flash->error(__('Los indicadores no ha sido creada. Por favor, intenta de nuevo.'));
      }
      $this->set(compact('indicators'));
    }
    public function AddProjectCode(){
      // put your code.
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicators = $this->Indicators->get($id);
        if ($this->Indicators->delete($indicators)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function view($id)
    {
        $indicators = $this->Indicators->get($id);

        $this->set('indicators', $indicators);
    }
    public function edit($id = null)
    {
        $indicators = $this->Indicators->get($id);
        if ($this->request->is(['patch','post','put']))
        {
          $indicators = $this->Indicators->patchEntity($indicators,$this->request->data);
          if ($this->Indicators->save($indicators))
           {
             $this->Flash->success('Los indicadires han sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('Los indicadores no pudieron ser modificado');
          }
        }
        $this->set(compact('indicators'));
    }
}
