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
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next"><i class="material-icons">arrow_upward</i></a>
  <a href="javascript:" class="btn-floating waves-effect waves-light Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return"><i class="material-icons">arrow_downward</i></a>
  <div class="wrap-contact100">
    <form class="contact100-form validate-form active" id="Form-1">
      <span class="contact100-form-title">
        IDENTIFICACIÓN DE REQUERIMIENTOS Y OPORTUNIDADES (RYOS)
      </span>
      <span class="contact100-form-sub-title">
        ENTRADA
      </span>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
        <span class="label-input100">Nombre Requerimiento u Oportunidad - RYOS</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Requerimientos y oportunidades que tienen potencial para desarrollarse como iniciativa y posteriormente como proyecto en el GEB." onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="name" placeholder="Ingrese el nombre del requerimiento u oportunidad">
        <span class="focus-input100"></span>
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Gestor</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del R" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese el gestor">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Grupo Estratégico de Negocio (GEN)</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del R" onclick="return false;">help_outline</i></span>
        <select id="select-work" >
           <option class="work-option" id="option-elect">Distribución</option>
           <option class="work-option" id="option-gas">Transmisión y transporte</option>
           <option class="work-option" id="option-elect">Generación</option>
           <option class="work-option" id="option-gas">Corporativo</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Vicepresidencia / Dirección</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del R" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la Vicepresidencia / dirección">
        <span class="error-text">Campo vacío</span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Gerencia</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del R" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la gerencia">
        <span class="focus-input100"></span>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">País</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Nombre del R" onclick="return false;">help_outline</i></span>
        <select id="select-work">
           <option class="work-option" id="option-elect">Colombia</option>
           <option class="work-option" id="option-gas">Brasil</option>
           <option class="work-option" id="option-elect">Perú</option>
           <option class="work-option" id="option-gas">Guatemala</option>
           <option class="work-option" id="option-gas">Otro</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Filial</span>
        <select id="select-work">
          <option class="work-option" id="option-gas">GEB</option>
          <option class="work-option" id="option-gas">SUCURSAL</option>
          <option class="work-option" id="option-elect">TGI</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">¿Proyecto de origen Mandatorio?</span>
        <select id="select-work">
          <option class="work-option" id="option-gas">SI</option>
          <option class="work-option" id="option-gas">NO</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Tipo de proyecto</span>
        <select id="select-work">
           <option class="work-option" id="option-elect">Crecimiento</option>
           <option class="work-option" id="option-gas">Sostenimiento</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Subcategoria</span>
        <select id="select-work">
           <option class="work-option" id="option-elect">Continuidad operacional</option>
           <option class="work-option" id="option-gas">Tecnología de Información</option>
           <option class="work-option" id="option-gas">Administrativos corporativos</option>
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
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
          </tr>
          <tr>
            <td>Fase II</td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
          </tr>
          <tr>
            <td>Fase III</td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
          </tr>
          <tr>
            <td>Fase IV</td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
          </tr>
          <tr>
            <td>Fase V</td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
            <td><input class="input100" type="text" name="email" placeholder="Ingrese la gerencia"></td>
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
              <select id="select-work">
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
                <select id="select-work">
                   <option class="work-option" id="option-elect">Aplicaciones</option>
                   <option class="work-option" id="option-gas">Infraestructura</option>
                   <option class="work-option" id="option-elect">Telecomunicaciones</option>
                   <option class="work-option" id="option-gas">Seguridad</option>
                   <option class="work-option" id="option-gas">Servicios</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Tipo de proyecto TI que aplica (Informativo)</span>
                <select id="select-work">
                   <option class="work-option" id="option-elect">Aplicaciones</option>
                   <option class="work-option" id="option-gas">Infraestructura</option>
                   <option class="work-option" id="option-elect">Telecomunicaciones</option>
                   <option class="work-option" id="option-gas">Seguridad</option>
                   <option class="work-option" id="option-gas">Servicios</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Criticidad en la operación</span>
                <select id="select-work">
                   <option class="work-option" id="option-elect">Aplicaciones</option>
                   <option class="work-option" id="option-gas">Infraestructura</option>
                   <option class="work-option" id="option-elect">Telecomunicaciones</option>
                   <option class="work-option" id="option-gas">Seguridad</option>
                   <option class="work-option" id="option-gas">Servicios</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Tecnología a instalar</span>
                <select id="select-work">
                   <option class="work-option" id="option-elect">Aplicaciones</option>
                   <option class="work-option" id="option-gas">Infraestructura</option>
                   <option class="work-option" id="option-elect">Telecomunicaciones</option>
                   <option class="work-option" id="option-gas">Seguridad</option>
                   <option class="work-option" id="option-gas">Servicios</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Sinergia con otros proyectos (Incluye otras filiales del GEB)</span>
                <select id="select-work">
                   <option class="work-option" id="option-elect">Aplicaciones</option>
                   <option class="work-option" id="option-gas">Infraestructura</option>
                   <option class="work-option" id="option-elect">Telecomunicaciones</option>
                   <option class="work-option" id="option-gas">Seguridad</option>
                   <option class="work-option" id="option-gas">Servicios</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Complejidad del proyecto</span>
                <select id="select-work">
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
                      <select id="select-work">
                         <option class="work-option" id="option-elect">Aplicaciones</option>
                         <option class="work-option" id="option-gas">Infraestructura</option>
                         <option class="work-option" id="option-elect">Telecomunicaciones</option>
                         <option class="work-option" id="option-gas">Seguridad</option>
                         <option class="work-option" id="option-gas">Servicios</option>
                      </select>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Impacto sobre GEB</span>
                      <select id="select-work">
                         <option class="work-option" id="option-elect">Aplicaciones</option>
                         <option class="work-option" id="option-gas">Infraestructura</option>
                         <option class="work-option" id="option-elect">Telecomunicaciones</option>
                         <option class="work-option" id="option-gas">Seguridad</option>
                         <option class="work-option" id="option-gas">Servicios</option>
                      </select>
                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Resistencia al cambio</span>
                      <select id="select-work">
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
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#next').hide();
$('#Form-2').hide();
$('#Form-3').hide();
$('#Form-4').hide();
$('#Form-5').hide();
$('#Form-6').hide();
var Form_Numbers = null;
$("#next").click(function(){
Form_Numbers = $('.contact100-form.validate-form.active').index();
BtnNextHide(Form_Numbers);
 if ($('.contact100-form.validate-form.active').index() > 0) {
      $('.contact100-form.validate-form').hide();
      $('.contact100-form.validate-form.active').removeClass("active").prev().addClass("active").show();
 }
 $('body,html').animate({
     scrollTop : 0
 }, 500);
});
$("#return").click(function(){
Form_Numbers = $('.contact100-form.validate-form.active').index();
BtnReturnHide(Form_Numbers);
 if ($('.contact100-form.validate-form.active').index() < $(".contact100-form.validate-form").length-1) {
      $('.contact100-form.validate-form.active').hide();
      $('.contact100-form.validate-form.active').removeClass("active").next().show().addClass("active");
 }
 $('#next').show();
 $('body,html').animate({
     scrollTop : 0
 }, 500);
});
function BtnNextHide(Form_Numbers){
  if(Form_Numbers == 1){
    $("#next").hide();
  }else{
    $("#return").show();
    $("#next").show();
  }
}
function BtnReturnHide(Form_Numbers){
  if (Form_Numbers == 4) {
    $("#return").hide();
  }else{
    $("#return").show();
    $("#next").show();
  }
}
});
</script>
