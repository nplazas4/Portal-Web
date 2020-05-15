<?php
namespace App\Controller;

use App\Controller\AppController;

class ChartsController extends AppController
{
    // Función que se encargar de crear la paginación de los riesgos de proyectos.
    public function index()
    {
        /*Sentencia que se encarga de cargar el modelo de la tabla Projects perteneciente a la BD local y find all trae todos
        los registros encontrados en esta.*/
        $this->loadModel('Projects');
        $projectsCharts = $this->Projects->find('all');
        // Envia todos los registros del modelo projects a la vista index.ctp en la carpeta Risks. con el pseudonimo de projectsRisks
        $this->set('$projectsCharts', $projectsCharts->all());
        /*$risks se encarga de enviar un array con los elementos de la tabla array a la vista index, en cargas de 20 elementos por página,
        de manera predeterminada.*/
        $charts = $this->paginate($this->Charts);
        $this->set('charts', $charts);
        $this->Projects();
    }
    // Función que se encarga de agregar riesgos.
    public function Add()
    {
        $this->index();
        // Instrucción propia de CakePhp que contiene el elemento nuevo que va a ser registrado.
        $charts = $this->Charts->newEntity();
        // Condicional que valida si el nuevo registrop es enviado mediante un método POST.
        if ($this->request->is('post')) {
            // Matriz que contiene los datos del registro a guardar.
            $charts = $this->Charts->patchEntity($charts, $this->request->getData());
            // condicional que valida si el riesgos fue guardado en la BD local.
            if ($this->Charts->save($charts)) {
                // Si el registro es guardado da el aviso de confirmación y redirecciona al usuario a la pestaña index(Lista de riesgos).
                $this->Flash->success(__('La gáfica ha sido creado.'));
                return $this->redirect(['action' => 'index']);
            }
            // De ser lo contrario se mostrara el aviso error a la solicitud save.
            $this->Flash->error(__('La gráfica no ha sido creado. Por favor, intenta de nuevo.'));
        }
        // Envia un arreglo de la variasble $risks.
        $this->set(compact('charts'));
    }
    // Función que se encarga de eliminar riesgos mediante la id de estos, su valor por default es null para evitar errores.
    public function delete($id = null)
    {
        //Sentencia que habilita el método "delete" únicamente si es una solicitud de tipo POST.
        $this->request->allowMethod(['post', 'delete']);
        // Obtiene el registro a eliminar mediante la variable $id.
        $charts = $this->Charts->get($id);
        // Condicional que confirma si el registro es eliminado de la BD.
        if ($this->Charts->delete($charts)) {
            $this->Flash->success(__('La gráfica ha sido eliminado.'));
        } else {
            $this->Flash->error(__('La gráfica no pudo ser eliminado. Por favor, intente de nuevo.'));
        }
        // Redirecciona al usuario a la pestaña index(Lista de riesgos).
        return $this->redirect(['action' => 'index']);
    }
    public function edit($id = null)
    {
        $this->index();
        // Obtiene el registro completo del elemento que desea editar.
        $charts = $this->Charts->get($id);
        // Condicional que comprueba si la solicitud es PATCH,POST O PUT.
        if ($this->request->is(['patch','post','put'])) {
            // Identifica los datos que han sido actualizados.
            $charts = $this->Charts->patchEntity($charts, $this->request->data);
            // Condicional que comprueba que el cambio se ha hecho efectivamente.
            if ($this->Charts->save($charts)) {
                //Aviso de confirmación.
                $this->Flash->success('La gráfica ha sido modificada');
                // Redirecciona al usuario a la pestaña index.
                return $this->redirect(['action'=>'index']);
            } else {
                // Aviso de error al no cumplir la condicional IF.
                $this->Flash->error('La gráfica no pudo ser modificada');
            }
        }
        // Arreglo del riesgo editado.
        $this->set(compact('charts'));
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
