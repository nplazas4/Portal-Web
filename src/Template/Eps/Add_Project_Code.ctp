<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Html->css('AddProject')?>
<div class="row">
  <br/>
   <form class="col s12">
     <div class="row">
       <div class="input-field col s6">
         <input id="Id_Proyecto" type="text" class="validate">
         <label for="Id_Proyecto">ID de proyecto</label>
       </div>
       <div class="input-field col s6">
         <input id="Nombre_Proyecto" type="text" class="validate">
         <label for="Nombre_Proyecto">Nombre de proyecto</label>
       </div>
       <div class="input-field col s12">
         <!-- <input disabled value="I am not editable" id="disabled" type="text" class="validate"> -->
         <textarea id="Description" class="materialize-textarea"></textarea>
         <label for="Description">Descripción</label>
       </div>
     </div>
     <!-- <div class="row">
       <div class="input-field col s12"> -->
         <!-- <input disabled value="I am not editable" id="disabled" type="text" class="validate"> -->
         <!-- <textarea id="Description" class="materialize-textarea"></textarea>
         <label for="Description">Descripción</label>
       </div>
     </div> -->
     <div class="row">
       <div class="input-field col s6">
         <input id="EPS" type="text" class="validate">
         <label for="EPS">EPS</label>
       </div>
       <div class="input-field col s6">
         <input id="Gestor" type="text" class="validate">
         <label for="Gestor">Gestor responsable</label>
       </div>
     </div>
     <div class="row">
       <div class="row">
       <div class="input-field col s6">
         <input id="Inicio_Planificado" type="text" class="validate">
         <label for="Inicio_Planificado">Inicio planificado<span class="material-icons right mr-4">event</span></label>
         <!-- <button class="waves-effect waves-light btn-small"><i class="material-icons center">event</i></button> -->
       </div>
       <div class="input-field col s6">
         <input id="Finalizar" type="text" class="validate">
         <label for="Finalizar">Debe finalizar antes<span class="material-icons right mr-4">event</span></label>
         <!-- <button type="submit" class="waves-effect waves-light btn-small"><i class="material-icons center">event</i></button> -->
       </div>
     </div>
     </div>
     <div class="btns mb-2">
         <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Ingresar</a>
         <!-- <?//= $this->Form->button('Ingresar',['class'=>'btn waves-effect btn-depressed'])?> -->
     </div>
   </form>
 </div>
