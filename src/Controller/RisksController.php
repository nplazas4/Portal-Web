<?php
namespace App\Controller;

use App\Controller\AppController;

class RisksController extends AppController
{
    // Función que se encargar de crear la paginación de los riesgos de proyectos.
    public function index()
    {
        /*Sentencia que se encarga de cargar el modelo de la tabla Projects perteneciente a la BD local y find all trae todos
        los registros encontrados en esta.*/
        $this->Projects();
        $this->Projects_Id();
        $this->PaginateTable();
    }
    public function Projects_Id(){
      $projectsRisks = $this->Projects->find()->select(['Projects.id','Projects.PROJECT_NAME']); //Variable que busca el id y nombre del proyecto
      // Envia todos los registros del modelo projects a la vista index.ctp en la carpeta Risks. con el pseudonimo de projectsRisks
      $this->set('projectsRisks', $projectsRisks);
    }
    public function PaginateTable(){
      // $risks = $this->paginate($this->Risks);
      $risks = $this->Risks->find()->select(['Risks.id','Risks.RISK_NUMBER','Risks.RISK_NAME','Risks.PROJECT_CODE']);
      $this->set('risks', $risks);
    }
    // Función que se encarga de agregar riesgos.
    public function Add()
    {
        $this->index();
        // Instrucción propia de CakePhp que contiene el elemento nuevo que va a ser registrado.
        $risks = $this->Risks->newEntity();
        // Condicional que valida si el nuevo registrop es enviado mediante un método POST.
        if ($this->request->is('post')) {
            // Matriz que contiene los datos del registro a guardar.
            $risks = $this->Risks->patchEntity($risks, $this->request->getData());
            // condicional que valida si el riesgos fue guardado en la BD local.
            if ($this->Risks->save($risks)) {
                // Si el registro es guardado da el aviso de confirmación y redirecciona al usuario a la pestaña index(Lista de riesgos).
                $this->Flash->success(__('El riesgo ha sido creado.'));
                return $this->redirect(['action' => 'index']);
            }
            // De ser lo contrario se mostrara el aviso error a la solicitud save.
            $this->Flash->error(__('El riesgo no ha sido creado. Por favor, intenta de nuevo.'));
        }
        // Envia un arreglo de la variasble $risks.
        $this->set(compact('risks'));
    }
    // Función que se encarga de eliminar riesgos mediante la id de estos, su valor por default es null para evitar errores.
    public function delete($id = null)
    {
        //Sentencia que habilita el método "delete" únicamente si es una solicitud de tipo POST.
        $this->request->allowMethod(['post', 'delete']);
        // Obtiene el registro a eliminar mediante la variable $id.
        $risks = $this->Risks->get($id);
        // Condicional que confirma si el registro es eliminado de la BD.
        if ($this->Risks->delete($risks)) {
            $this->Flash->success(__('El riesgo ha sido eliminado.'));
        } else {
            $this->Flash->error(__('El riesgo no pudo ser eliminado. Por favor, intente de nuevo.'));
        }
        // Redirecciona al usuario a la pestaña index(Lista de riesgos).
        return $this->redirect(['action' => 'index']);
    }
    public function edit($id = null)
    {
        $this->index();
        // Obtiene el registro completo del elemento que desea editar.
        $risks = $this->Risks->get($id);
        // Condicional que comprueba si la solicitud es PATCH,POST O PUT.
        if ($this->request->is(['patch','post','put'])) {
            // Identifica los datos que han sido actualizados.
            $risks = $this->Risks->patchEntity($risks, $this->request->data);
            // Condicional que comprueba que el cambio se ha hecho efectivamente.
            if ($this->Risks->save($risks)) {
                //Aviso de confirmación.
                $this->Flash->success('El usuario ha sido modificado');
                // Redirecciona al usuario a la pestaña index.
                return $this->redirect(['action'=>'index']);
            } else {
                // Aviso de error al no cumplir la condicional IF.
                $this->Flash->error('El usuario no pudo ser modificado');
            }
        }
        // Arreglo del riesgo editado.
        $this->set(compact('risks'));
    }
    public function Projects()
    {
        // Carga el modelo de Projects de la BD interna.
        $this->loadModel('Projects');
        /*Envia a la vista una lista con los id y Nombre de proyectos para ser utilizados posteriormente en un select option en
        los formularios de edit y add dentro la carpeta Risks*/
        $this->set('projects',$this->Projects->find('list', [
        'keyField' => 'id',
        'valueField' => 'PROJECT_NAME'
       ])
      );
    }
}
