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
     <div class="row">
    <div class="input-field col s6 mr-6">
      <i class="material-icons prefix">phone</i>
      <input id="icon_telephone" type="tel" class="validate">
      <label for="icon_telephone">Telephone</label>
    </div>
  </div>
     <div class="btns mb-2">
         <a href="http://localhost/web/pages/home" class="btn waves-effect btn-depressed">Ingresar</a>
         <!-- <?//= $this->Form->button('Ingresar',['class'=>'btn waves-effect btn-depressed'])?> -->
     </div>
   </form>
 </div>

 <!-- nuevo form -->
 <!-- <div class = "row">
    <form class = "col s12">
       <div class = "row">
          <div class = "input-field col s6">
             <i class = "material-icons prefix">account_circle</i>
             <input placeholder = "Username" value = "Mahesh" id = "name"
                type = "text" class = "active validate" required />
             <label for = "name">Username</label>
          </div>

          <div class = "input-field col s6">
             <label for = "password">Password</label>
             <input id = "password" type = "password" placeholder = "Password"
                class = "validate" required />
          </div>
       </div>

       <div class = "row">
          <div class = "input-field col s12">
             <input placeholder = "Email" id = "email" type = "email"
                class = "validate">
             <label for = "email">Email</label>
          </div>
       </div>

       <div class = "row">
          <div class = "input-field col s12">
             <i class = "material-icons prefix">mode_edit</i>
             <textarea id = "address" class = "materialize-textarea"></textarea>
             <label for = "address">Address</label>
          </div>
       </div>

       <div class = "row">
          <div class = "input-field col s12">
             <input placeholder = "Comments (Disabled)" id = "comments"
                type = "text" disabled />
             <label for = "comments">Comments</label>
          </div>
       </div>

       <div class = "row">
          <div class = "input-field col s12">
             <p>
                <input id = "married" type = "checkbox" checked = "checked" />
                <label for = "married">Married</label>
             </p>

             <p>
                <input id = "single" type = "checkbox" class = "filled-in" />
                <label for = "single">Single</label>
             </p>

             <p>
                <input id = "dontknow" type = "checkbox" disabled = "disabled" />
                <label for = "dontknow">Don't know (Disabled)</label>
             </p>
          </div>
       </div>

       <div class = "row">
          <div class = "input-field col s12">
              <p>
                <input id = "male" type = "radio" name = "gender"
                   value = "male" checked />
                <label for = "male">Male</label>
             </p>

             <p>
                <input id = "female" type = "radio" name = "gender"
                   value = "female" checked />
                <label for = "female">Female</label>
             </p>

             <p>
                <input id = "dontknow1" type = "radio" name = "gender"
                   value = "female" disabled />
                <label for = "dontknow1">Don't know (Disabled)</label>
             </p>
          </div>
       </div>
    </form>
 </div> -->
