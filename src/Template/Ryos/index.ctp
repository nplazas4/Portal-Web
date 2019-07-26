<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'RYOS','index','Ryos'],
    ];
?>
<div class="section portal-projects">
    <div class="breadcrumb-container">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu">
          <div class="container-contact100">
  <!-- <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

  <button class="contact100-btn-show">
    <i class="fa fa-envelope-o" aria-hidden="true"></i>
  </button> -->
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next1"><i class="material-icons">arrow_upward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return1"><i class="material-icons">arrow_downward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next2"><i class="material-icons">arrow_upward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return2"><i class="material-icons">arrow_downward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next3"><i class="material-icons">arrow_upward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return3"><i class="material-icons">arrow_downward</i></a>
  <div class="wrap-contact100" id="Form-1">
    <!-- <button class="contact100-btn-hide">
      <i class="fa fa-close" aria-hidden="true"></i>
    </button> -->
    <form class="contact100-form validate-form">
      <span class="contact100-form-title">
        IDENTIFICACIÓN DE REQUERIMIENTOS Y OPORTUNIDADES (RYOS)
      </span>
      <span class="contact100-form-sub-title">
        ENTRADA
      </span>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
        <span class="label-input100">Nombre Requerimiento u Oportunidad</span>
        <input class="input100" type="text" name="name" placeholder="Ingrese el nombre del requerimiento u oportunidad">
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Gestor</span>
        <input class="input100" type="text" name="email" placeholder="Ingrese el gestor">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Grupo Estratégico de Negocio (GEN)</span>
        <select id="select-work" class="work-select">
           <option class="work-option" id="option-elect">Distribución</option>
           <option class="work-option" id="option-gas">Transmisión y transporte</option>
           <option class="work-option" id="option-elect">Generación</option>
           <option class="work-option" id="option-gas">Corporativo</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Vicepresidencia / Dirección</span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la Vicepresidencia / dirección">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Gerencia</span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la gerencia">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">País</span>
        <select id="select-work" class="work-select">
           <option class="work-option" id="option-elect">Colombia</option>
           <option class="work-option" id="option-gas">Brasil</option>
           <option class="work-option" id="option-elect">Perú</option>
           <option class="work-option" id="option-gas">Guatemala</option>
           <option class="work-option" id="option-gas">Otro</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Filial</span>
        <select id="select-work" class="work-select">
           <option class="work-option" id="option-elect">TGI</option>
           <option class="work-option" id="option-gas">GEB</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">¿Proyecto de origen Mandatorio?</span>
        <input class="input100" type="text" name="email" placeholder="Ingrese el Proyecto de origen Mandatorio">
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Tipo de proyecto</span>
        <select id="select-work" class="work-select">
           <option class="work-option" id="option-elect">Crecimiento</option>
           <option class="work-option" id="option-gas">Sostenimiento</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Subcategoria</span>
        <select id="select-work" class="work-select">
           <option class="work-option" id="option-elect">Continuidad operacional</option>
           <option class="work-option" id="option-gas">Tecnología de Información</option>
        </select>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <span class="label-input100">Fechas tentativas (DD/MM/AAAA)</span>
        <!-- <input class="input100" name="message" placeholder="Your message here..."></input>
        <span class="focus-input100"></span> -->
        <table class="display highlight centered">
        <thead>
          <tr>
              <th></th>
              <th>Inicio</th>
              <th>Fin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Fase I</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Fase II</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Fase III</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Fase IV</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Fase V</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      </div>

      <div class="container-contact100-form-btn">
        <button class="contact100-form-btn" type="button" id="Main-Btn">
          <span>
            Enviar
            <i class="material-icons right" aria-hidden="true">send</i>
          </span>
        </button>
      </div>
    </form>
  </div>
  <div class="wrap-contact100">
    <!-- <button class="contact100-btn-hide">
      <i class="fa fa-close" aria-hidden="true"></i>
    </button> -->
    <form class="contact100-form validate-form" id="Form-2">
      <span class="contact100-form-sub-title">
        INFORMACIÓN GENERAL
      </span>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
        <span class="label-input100">Sector</span>
        <input class="input100" type="text" name="name" placeholder="Ingrese el sector">
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Subsector</span>
        <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Necesidad a resolver</span>
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <!-- <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte"> -->
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Justificación del valor</span>
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <!-- <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte"> -->
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Alcance</span>
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <!-- <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte"> -->
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Restricciones y exclusiones</span>
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <!-- <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte"> -->
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Supuestos</span>
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <!-- <input class="input100" type="text" name="email" placeholder="Ingrese el subsector" value="Transmisión y transporte"> -->
        <span class="focus-input100"></span>
      </div>
    </form>
    <form class="contact100-form validate-form" id="Form-3">
          <span class="contact100-form-sub-title">
            CONTEXTO ESTRATÉGICO
          </span>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Objetivo #1</span>
            <select id="select-work" class="work-select">
               <option class="work-option" id="option-elect">Dinamizar el crecimiento rentable</option>
               <option class="work-option" id="option-gas">Maximizar la eficiencia financiera</option>
               <option class="work-option" id="option-elect">Lograr alternativas de remuneración para la infraestructura Ballena-Barranca</option>
               <option class="work-option" id="option-gas">Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria</option>
               <option class="work-option" id="option-gas">Estructurar nuevos negocios y servicios para el crecimiento de la Empresa</option>
               <option class="work-option" id="option-elect">Desarrollar proyectos de infraestructura asegurando el MMCV</option>
               <option class="work-option" id="option-gas">Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura</option>
               <option class="work-option" id="option-elect">Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo</option>
               <option class="work-option" id="option-gas">Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos</option>
               <option class="work-option" id="option-gas">Transformar la organización con tecnologías de información y procesos de innovación del negocio</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Objetivo #2</span>
            <select id="select-work" class="work-select">
               <option class="work-option" id="option-elect">Dinamizar el crecimiento rentable</option>
               <option class="work-option" id="option-gas">Maximizar la eficiencia financiera</option>
               <option class="work-option" id="option-elect">Lograr alternativas de remuneración para la infraestructura Ballena-Barranca</option>
               <option class="work-option" id="option-gas">Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria</option>
               <option class="work-option" id="option-gas">Estructurar nuevos negocios y servicios para el crecimiento de la Empresa</option>
               <option class="work-option" id="option-elect">Desarrollar proyectos de infraestructura asegurando el MMCV</option>
               <option class="work-option" id="option-gas">Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura</option>
               <option class="work-option" id="option-elect">Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo</option>
               <option class="work-option" id="option-gas">Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos</option>
               <option class="work-option" id="option-gas">Transformar la organización con tecnologías de información y procesos de innovación del negocio</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Objetivo #3</span>
            <select id="select-work" class="work-select">
               <option class="work-option" id="option-elect">Dinamizar el crecimiento rentable</option>
               <option class="work-option" id="option-gas">Maximizar la eficiencia financiera</option>
               <option class="work-option" id="option-elect">Lograr alternativas de remuneración para la infraestructura Ballena-Barranca</option>
               <option class="work-option" id="option-gas">Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria</option>
               <option class="work-option" id="option-gas">Estructurar nuevos negocios y servicios para el crecimiento de la Empresa</option>
               <option class="work-option" id="option-elect">Desarrollar proyectos de infraestructura asegurando el MMCV</option>
               <option class="work-option" id="option-gas">Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura</option>
               <option class="work-option" id="option-elect">Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo</option>
               <option class="work-option" id="option-gas">Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos</option>
               <option class="work-option" id="option-gas">Transformar la organización con tecnologías de información y procesos de innovación del negocio</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <span class="contact100-form-sub-title">
            Generación de Valor (Foco Estratégico TI)
          </span>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100" style="color:#fff">text</span>
            <select id="select-work" class="work-select">
              <option class="work-option" id="option-elect">Excelencia y eficiencia operacional</option>
              <option class="work-option" id="option-elect">Integración y adopción de tecnologías del negocio y de la información</option>
              <option class="work-option" id="option-gas">Gestión de la información e inteligencia de negocio</option>
               <option class="work-option" id="option-elect">Experiencia de usuario</option>
               <option class="work-option" id="option-gas">Gestión de la innovación</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100" style="color:#fff">text</span>
            <select id="select-work" class="work-select">
              <option class="work-option" id="option-elect">Excelencia y eficiencia operacional</option>
              <option class="work-option" id="option-elect">Integración y adopción de tecnologías del negocio y de la información</option>
              <option class="work-option" id="option-gas">Gestión de la información e inteligencia de negocio</option>
               <option class="work-option" id="option-elect">Experiencia de usuario</option>
               <option class="work-option" id="option-gas">Gestión de la innovación</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100" style="color:#fff">text</span>
            <select id="select-work" class="work-select">
              <option class="work-option" id="option-elect">Excelencia y eficiencia operacional</option>
              <option class="work-option" id="option-elect">Integración y adopción de tecnologías del negocio y de la información</option>
              <option class="work-option" id="option-gas">Gestión de la información e inteligencia de negocio</option>
               <option class="work-option" id="option-elect">Experiencia de usuario</option>
               <option class="work-option" id="option-gas">Gestión de la innovación</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Aplicación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Está en el PETI?</span>
            <select id="select-work" class="work-select">
              <option class="work-option" id="option-elect">SI</option>
              <option class="work-option" id="option-elect">NO</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Justificación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la justificación">
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Está en el PEC</span>
            <select id="select-work" class="work-select">
              <option class="work-option" id="option-elect">SI</option>
              <option class="work-option" id="option-elect">NO</option>
            </select>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <span class="label-input100">Justificación</span>
            <input class="input100" type="text" name="" placeholder="Ingrese la justificación">
            <span class="focus-input100"></span>
          </div>
        </form>
    <form class="contact100-form validate-form" id="Form-4">
        <span class="contact100-form-sub-title">
          VIABILIDAD FINANCIERA
        </span>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">Beneficios e intangibles</span>
          <!-- <input class="input100" name="message" placeholder="Your message here..."></input>
          <span class="focus-input100"></span> -->
          <table class="display highlight centered">
          <thead>
            <tr>
                <th>Tipo de Beneficio</th>
                <th>Descripción de Beneficio</th>
                <th>Situación / Estado Actual</th>
                <th>Proyección con el Beneficio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Message is required">
          <span class="label-input100">Estimado de costos de inversión</span>
          <!-- <input class="input100" name="message" placeholder="Your message here..."></input>
          <span class="focus-input100"></span> -->
          <table class="display highlight centered">
          <thead>
            <tr>
                <th>Moneda</th>
                <th>Tasa de cambio a USD</th>
                <th>2019</th>
                <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>COP</td>
              <td>$ 3,013.11</td>
              <td></td>
              <td>COP</td>
            </tr>
            <tr>
              <td>USD</td>
              <td>$ 1.00</td>
              <td></td>
              <td>USD</td>
            </tr>
            <tr>
              <td>EUR</td>
              <td>$ 0.85</td>
              <td></td>
              <td>EUR</td>
            </tr>
            <tr>
              <td>GTQ</td>
              <td>$ 7.18</td>
              <td></td>
              <td>GTQ</td>
            </tr>
            <tr>
              <td>BRL</td>
              <td>$ 3.26</td>
              <td></td>
              <td>BRL</td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Presupuesto</span>
          <input class="input100" type="text" name="name" placeholder="Ingrese el presupuesto">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Análisis Beneficio / Costo</span>
          <input class="input100" type="text" name="name" placeholder="Ingrese el Análisis">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Ciclo de vida de la tecnología (años)</span>
          <input class="input100" type="text" name="name" placeholder="Ingrese el ciclo de vida">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Costos por no ejecución</span>
          <input class="input100" type="text" name="name" placeholder="Ingrese los costos">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Consecuencia sin RYO</span>
          <input class="input100" type="text" name="name" placeholder="Ingrese las consecuencias">
          <span class="focus-input100"></span>
        </div>
      </form>
    <form class="contact100-form validate-form" id="Form-5">
            <span class="contact100-form-sub-title">
              ATRACTIVIDAD TÉCNICA
            </span>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Tipo de proyecto TI que aplica (Informativo)</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Tipo de proyecto TI que aplica (Informativo)</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Criticidad en la operación</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Tecnología a instalar</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Sinergia con otros proyectos (Incluye otras filiales del GEB)</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Complejidad del proyecto</span>
              <select id="select-work" class="work-select">
                 <option class="work-option" id="option-elect">Aplicaciones</option>
                 <option class="work-option" id="option-gas">Infraestructura</option>
                 <option class="work-option" id="option-elect">Telecomunicaciones</option>
                 <option class="work-option" id="option-gas">Seguridad</option>
                 <option class="work-option" id="option-gas">Servicios</option>
              </select>
            </div>
          </form>
    <form class="contact100-form validate-form" id="Form-6">
                  <span class="contact100-form-sub-title">
                    OTROS ASPECTOS RELEVANTES
                  </span>
                  <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Impacto sobre la empresa</span>
                    <select id="select-work" class="work-select">
                       <option class="work-option" id="option-elect">Aplicaciones</option>
                       <option class="work-option" id="option-gas">Infraestructura</option>
                       <option class="work-option" id="option-elect">Telecomunicaciones</option>
                       <option class="work-option" id="option-gas">Seguridad</option>
                       <option class="work-option" id="option-gas">Servicios</option>
                    </select>
                  </div>
                  <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Impacto sobre GEB</span>
                    <select id="select-work" class="work-select">
                       <option class="work-option" id="option-elect">Aplicaciones</option>
                       <option class="work-option" id="option-gas">Infraestructura</option>
                       <option class="work-option" id="option-elect">Telecomunicaciones</option>
                       <option class="work-option" id="option-gas">Seguridad</option>
                       <option class="work-option" id="option-gas">Servicios</option>
                    </select>
                  </div>
                  <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Resistencia al cambio</span>
                    <select id="select-work" class="work-select">
                       <option class="work-option" id="option-elect">Aplicaciones</option>
                       <option class="work-option" id="option-gas">Infraestructura</option>
                       <option class="work-option" id="option-elect">Telecomunicaciones</option>
                       <option class="work-option" id="option-gas">Seguridad</option>
                       <option class="work-option" id="option-gas">Servicios</option>
                    </select>
                  </div>
                </form>
<!-- DIVS Estructurales -->
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#next1').hide();
$('#next2').hide();
$('#next3').hide();
$('#return2').hide();
$('#return3').hide();
$('#Form-2').hide();
$('#Form-3').hide();
$("#Main-Btn").click(function(){
 $('#Form-1').hide();
 $('#Form-2').show();
 $('#next2').show();
 $('body,html').animate({
     scrollTop : 0                       // Scroll to top of body
 }, 500);
});
$("#return1").click(function(){
 $('#Form-1').hide();
 $('#Form-2').show();
 $('#return1').hide();
 $('#return2').show();
 $('#next2').show();
 $('body,html').animate({
     scrollTop : 0                       // Scroll to top of body
 }, 500);
});
$("#next2").click(function(){
 $('#Form-1').show();
 $('#Form-2').hide();
 $('#next2').hide();
 $('#return2').hide();
 $('#return1').show();
 $('body,html').animate({
     scrollTop : 0                       // Scroll to top of body
 }, 500);
});
$("#return2").click(function(){
 $('#Form-2').hide();
 $('#Form-3').show();
 $('#return2').hide();
 // $('#return2').show();
 $('#next3').show();
 $('body,html').animate({
     scrollTop : 0                       // Scroll to top of body
 }, 500);
});
$("#next3").click(function(){
 $('#Form-2').show();
 $('#Form-3').hide();
 $('#next3').hide();
 $('#next2').show();
 $('#return2').show();
 $('body,html').animate({
     scrollTop : 0                       // Scroll to top of body
 }, 500);
});
});
</script>
<style>




/*//////////////////////////////////////////////////////////////////
[ FONT ]*/

/* @font-face {
font-family: Poppins-Regular;
src: url('../fonts/poppins/Poppins-Regular.ttf');
}

@font-face {
font-family: Poppins-Medium;
src: url('../fonts/poppins/Poppins-Medium.ttf');
}

@font-face {
font-family: Poppins-Bold;
src: url('../fonts/poppins/Poppins-Bold.ttf');
}

@font-face {
font-family: Poppins-SemiBold;
src: url('../fonts/poppins/Poppins-SemiBold.ttf');
} */

/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/

* {
margin: 0px;
padding: 0px;
box-sizing: border-box;
}

/* body, html {
height: 100%;
font-family: Poppins-Regular, sans-serif;
} */

/*---------------------------------------------*/
/* a {
font-family: Poppins-Regular;
font-size: 14px;
line-height: 1.7;
color: #666666;
margin: 0px;
transition: all 0.4s;
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
} */
/*
a:focus {
outline: none !important;
}

a:hover {
text-decoration: none;
} */

/*---------------------------------------------*/
/* h1,h2,h3,h4,h5,h6 {
margin: 0px;
}

p {
font-family: Poppins-Regular;
font-size: 14px;
line-height: 1.7;
color: #666666;
margin: 0px;
}

ul, li {
margin: 0px;
list-style-type: none;
} */


/*---------------------------------------------*/
input {
outline: none;
border: none;
}

textarea {
outline: none;
border: none;
}

textarea:focus, input:focus {
border-color: transparent !important;
}

input:focus::-webkit-input-placeholder { color:transparent; }
input:focus:-moz-placeholder { color:transparent; }
input:focus::-moz-placeholder { color:transparent; }
input:focus:-ms-input-placeholder { color:transparent; }

textarea:focus::-webkit-input-placeholder { color:transparent; }
textarea:focus:-moz-placeholder { color:transparent; }
textarea:focus::-moz-placeholder { color:transparent; }
textarea:focus:-ms-input-placeholder { color:transparent; }

input::-webkit-input-placeholder {
/* font-family: Poppins-Medium; */
color: #d1d1d1;
}
input:-moz-placeholder {
font-family: Poppins-Medium;
color: #555555;
}
input::-moz-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}
input:-ms-input-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}

textarea::-webkit-input-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}
textarea:-moz-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}
textarea::-moz-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}
textarea:-ms-input-placeholder {
/* font-family: Poppins-Medium; */
color: #555555;
}

/*---------------------------------------------*/
button {
outline: none !important;
border: none;
background: transparent;
}

button:hover {
cursor: pointer;
}

iframe {
border: none !important;
}


/*---------------------------------------------*/
/* .container {
max-width: 1200px;
} */




/*//////////////////////////////////////////////////////////////////
[ Contact ]*/

.container-contact100 {
width: 100%;
min-height: 60vh;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
flex-wrap: wrap;
justify-content: center;
align-items: center;
padding: 3px;
background-color: #00A34B;
position: relative;
z-index: 1;
}

.contact100-map {
position: absolute;
z-index: -2;
width: 100%;
height: 100%;
top: 0;
left: 0;
}

.wrap-contact100 {
width: 100%;
margin-bottom: auto;
background: #fff;
border-radius: 10px;
padding: 82px 180px 33px 180px;
position: relative;
/* display: none; */
}

.show-wrap-contact100 {
visibility: visible;
opacity: 1;
}


/*==================================================================
[ Form ]*/

.contact100-form {
width: 100%;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
padding-bottom: 68px;
}

.contact100-form-title {
display: block;
width: 100%;
font-weight: bold;
/* font-family: Poppins-Bold; */
font-size: 30px;
color: #333333;
line-height: 1.2;
text-align: left;
padding-bottom: 44px;
}
.contact100-form-sub-title {
display: block;
width: 100%;
font-weight: bold;
/* font-family: Poppins-Bold; */
font-size: 20px;
color: #333333;
line-height: 1.2;
text-align: left;
padding-bottom: 44px;
}



/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
width: 100%;
position: relative;
/* border-bottom: 2px solid #d9d9d9; */
padding-bottom: 13px;
margin-bottom: 65px;
}

.rs1-wrap-input100 {
width: calc((100% - 30px) / 2);
}

.label-input100 {
/* font-family: Poppins-Regular;
font-size: 15px;
color: #999999;
line-height: 1.5;
padding-left: 5px; */
}

.input100 {
/* display: block;
width: 100%;
background: transparent;
font-family: Poppins-SemiBold;
font-size: 18px;
color: #555555;
line-height: 1.2;
padding: 0 5px; */
}

.focus-input100 {
position: absolute;
display: block;
width: 100%;
height: 100%;
top: 0;
left: 0;
pointer-events: none;
}
/* Línea de color */
.focus-input100::before {
content: "";
display: block;
position: absolute;
bottom: -2px;
left: 0;
width: 0;
height: 2px;

-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;

background: #A6CE39;
}


/*---------------------------------------------*/
input.input100 {
height: 40px;
}


textarea.input100 {
min-height: 110px;
padding-top: 9px;
padding-bottom: 13px;
}


.input100:focus + .focus-input100::before {
width: 100%;
}

.has-val.input100 + .focus-input100::before {
width: 100%;
}


/*------------------------------------------------------------------
[ Button ]*/
.container-contact100-form-btn {
width: 100%;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
flex-wrap: wrap;
margin-top: -25px;
}
/* Contenido del botón */
.contact100-form-btn {
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
justify-content: center;
align-items: center;
padding: 0 20px;
min-width: 160px;
height: 50px;
background-color: #A6CE39;
border-radius: 25px;
/* font-family: Poppins-Medium; */
font-size: 16px;
color: #fff;
line-height: 1.2;

-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;

box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-moz-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-webkit-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-o-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-ms-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
}

.contact100-form-btn i {
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;
}

.contact100-form-btn:hover {
background-color: #00A34B;
box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
-moz-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
-webkit-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
-o-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
-ms-box-shadow: 0 10px 30px 0px rgba(51, 51, 51, 0.5);
}

.contact100-form-btn:hover i {
-webkit-transform: translateX(10px);
-moz-transform: translateX(10px);
-ms-transform: translateX(10px);
-o-transform: translateX(10px);
transform: translateX(10px);
}


/*------------------------------------------------------------------
[ Responsive ]*/

@media (max-width: 992px) {
.wrap-contact100 {
  padding: 82px 80px 33px 80px;
}
}

@media (max-width: 768px) {
.rs1-wrap-input100 {
  width: 100%;
}
}

@media (max-width: 576px) {
.wrap-contact100 {
  padding: 82px 15px 33px 15px;
}
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
position: relative;
}

.alert-validate::before {
content: attr(data-validate);
position: absolute;
max-width: 70%;
background-color: #fff;
border: 1px solid #c80000;
border-radius: 2px;
padding: 4px 25px 4px 10px;
top: 58%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
right: 2px;
pointer-events: none;

font-family: Poppins-Medium;
color: #c80000;
font-size: 13px;
line-height: 1.4;
text-align: left;

visibility: hidden;
opacity: 0;

-webkit-transition: opacity 0.4s;
-o-transition: opacity 0.4s;
-moz-transition: opacity 0.4s;
transition: opacity 0.4s;
}

.alert-validate::after {
content: "\f06a";
font-family: FontAwesome;
display: block;
position: absolute;
color: #c80000;
font-size: 16px;
top: 58%;
-webkit-transform: translateY(-50%);
-moz-transform: translateY(-50%);
-ms-transform: translateY(-50%);
-o-transform: translateY(-50%);
transform: translateY(-50%);
right: 8px;
}

.alert-validate:hover:before {
visibility: visible;
opacity: 1;
}

@media (max-width: 992px) {
.alert-validate::before {
  visibility: visible;
  opacity: 1;
}
}


/*==================================================================
[ Contact more ]*/

.contact100-more {
font-family: Poppins-Regular;
font-size: 14px;
color: #999999;
line-height: 1.5;
}

.contact100-more-highlight {
color: #ff4b5a;
}

/*==================================================================
[ Button hide form ]*/

.contact100-btn-hide {
color: #333333;
font-size: 14px;

position: absolute;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
justify-content: center;
align-items: center;
width: 30px;
height: 30px;
background-color: #fff;
border: 1px solid #ececec;
border-radius: 50%;
top: -15px;
right: -15px;

-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;
}

.contact100-btn-hide:hover {
background-color: #333333;
color: #fff;
}


/*==================================================================
[ Button show form ]*/

.contact100-btn-show {
color: #fff;
font-size: 39px;

position: fixed;
z-index: -1;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
justify-content: center;
align-items: center;
width: 120px;
height: 120px;
border-radius: 50%;
top: 50%;
left: 50%;
-webkit-transform: translate(-50%, -50%);
-moz-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}

.contact100-btn-show::before {
content: "";
display: block;
position: absolute;
z-index: -2;
width: 100%;
height: 100%;
background-color: #ff4b5a;
border-radius: 50%;

top: 0;
left: 0;

box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-moz-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-webkit-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-o-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);
-ms-box-shadow: 0 10px 30px 0px rgba(255, 75, 90, 0.5);

-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
transition: all 0.4s;

-webkit-animation: beatbtn 0.9s ease-in-out infinite;
animation: beatbtn 0.9s ease-in-out infinite;
}


@keyframes beatbtn {
0% {
  background-color: rgba(255, 75, 90, 1);
  transform-origin: center;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

50% {
  background-color: rgba(255, 75, 90, 0.8);
  transform-origin: center;
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}
}

</style>
