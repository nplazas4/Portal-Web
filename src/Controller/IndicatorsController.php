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
      $this->loadModel('Indicators');
      $indicators= $this->Indicators->find('all');
      $cont = $indicators->first();
      if($cont != null)
      {
        return $this->redirect(['controller'=>'Indicators','action' => 'index']);
      }
      else
      {
      $indicators = $this->Indicators->newEntity();
      if ($this->request->is('post')) {
          $indicators = $this->Indicators->patchEntity($indicators, $this->request->getData());
          if ($this->Indicators->save($indicators)) {
              $this->Flash->success(__('La EPS ha sido creada.'));
              return $this->redirect(['action'=>'index']);
          }
          $this->Flash->error(__('Los indicadores non ha sido creados. Por favor, intenta de nuevo.'));
      }
      $this->set(compact('indicators'));
    }
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $indicators = $this->Indicators->get($id);
        if ($this->Indicators->delete($indicators)) {
            $this->Flash->success(__('Los indicadores han sido eliminados.'));
        } else {
            $this->Flash->error(__('Los indicadores ha sido eliminados. Por favor, intente de nuevo.'));
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
             $this->Flash->success('Los indicadores han sido modificado');
             return $this->redirect(['action'=>'index']);
          }
          else {
            $this->Flash->error('Los indicadores no pudieron ser modificado');
          }
        }
        $this->set(compact('indicators'));
    }
}
