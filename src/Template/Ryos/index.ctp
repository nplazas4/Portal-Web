<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'RYOS','index','Ryos'],
    ];
?>
<style>
.input-icons i {
    position: absolute;
  }

  .input-icons {
    width: 100%;
    margin-bottom: 10px;
  }

  .icon {
    padding: 10px;
    color: green;
    min-width: 50px;
    text-align: center;
  }

  .input-field {
    width: 100%;
    padding: 10px;
    text-align: center;
  }

  h2 {
    color: green;
  }
</style>
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
  <a class="btn-floating Scroll-button" style="margin-right:5%; margin-bottom:8%" id="next"><i class="material-icons">arrow_upward</i></a>
  <a class="return btn-floating Scroll-button" style="margin-right:5%; margin-bottom:4%" id="return"><i class="material-icons">arrow_downward</i></a>
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
      </div>
      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Gestor RYOS</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Responsable de RYOS" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese el gestor">
      </div>

      <div class="wrap-input100 rs1-wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Grupo Estratégico de Negocio (GEN)</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="GEN a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <select id="select-grupo-est">
           <option class="work-option">Distribución</option>
           <option class="work-option">Transmisión y transporte</option>
           <option class="work-option">Generación</option>
           <option class="work-option">Corporativo</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">País</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="País donde se llevaría a cabo el proyecto" onclick="return false;">help_outline</i></span>
        <select id="select-country" onchange="Dynamic_Country();">
           <option class="work-country" value="CO">Colombia</option>
           <option class="work-country" value="PE">Perú</option>
           <option class="work-country" value="GT">Guatemala</option>
           <option class="work-country" value="other">Otro</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">Filial</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Filial que pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <div id="select-filial-col">
        <select>
          <option class="option-col">GEB</option>
          <option class="option-col">SUCURSAL</option>
          <option class="option-col">TGI</option>
        </select>
      </div>
      <div id="select-filial-pe">
        <select>
          <option class="option-pe">CONTUGAS</option>
          <option class="option-pe">CÁLIDDA</option>
          <option class="option-pe">CÁLIDDA ENERGÍA</option>
        </select>
      </div>
      <div id="select-filial-gt">
        <select>
          <option class="option-gt">EEBIS</option>
          <option class="option-gt">TRECSA</option>
        </select>
      </div>
      <div id="input_other_filial">
        <input class="input100" type="text" name="email" placeholder="¿Cuál?">
        <span class="error-text">Campo vacío</span>
      </div>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Vicepresidencia / Dirección</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Vicepresidencia o dirección a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la Vicepresidencia / dirección">
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">Gerencia</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Gerencia a la cual pertenece el RYOS" onclick="return false;">help_outline</i></span>
        <input class="input100" type="text" name="email" placeholder="Ingrese la gerencia">
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">¿Proyecto de origen Mandatorio?</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Indicar el listado desplegable si el RYOS es o no de origen mandatorio" onclick="return false;">help_outline</i></span>
        <select id="select-origen">
          <option class="option-origen">SI</option>
          <option class="option-origen">NO</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
        <span class="label-input100">Tipo de proyecto</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccionar el tipo de proyecto" onclick="return false;">help_outline</i></span>
        <select id="select-tipo-proyecto">
           <option class="tp-option">Crecimiento</option>
           <option class="tp-option">Sostenimiento</option>
        </select>
      </div>

      <div class="wrap-input100 rs1-wrap-input100 validate-input">
        <span class="label-input100">Subcategoria</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Seleccionar la subcategoría" onclick="return false;">help_outline</i></span>
        <div id="div-select-subcategoria-crec">
          <select class="select-subcategoria" id="select-subcategoria-crec">
             <option class="option-subc-crec" value="CREC">Convocatorias</option>
             <option class="option-subc-crec" value="CREC">Crecimiento orgánico</option>
          </select>
        </div>
        <div id="div-select-subcategoria-sost" style="display:none">
          <select class="select-subcategoria active" id="select-subcategoria-sost" disabled>
             <option class="option-subc-sost" value="CO">Continuidad operacional</option>
             <option class="option-subc-sost" value="TI">Tecnología de Información</option>
             <option class="option-subc-sost" value="AC">Administrativos corporativos</option>
          </select>
        </div>
      </div>

      <div class="wrap-input100 validate-input" data-validate = "Message is required">
        <span class="label-input100">Fechas tentativas (DD/MM/AAAA)</span>
        <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Fechas tentativas" onclick="return false;">help_outline</i></span>
        <table class="display highlight centered" id="id-table-dates">
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
            <td><input class="table-date input100 datepicker" readonly type="text"></td>
            <td><input class="table-date input100 datepicker2" readonly type="text"></td>
          </tr>
          <tr>
            <td>Fase II</td>
            <td><input class="table-date input100 datepicker3" readonly type="text"></td>
            <td><input class="table-date input100 datepicker4" readonly type="text"></td>
          </tr>
          <tr>
            <td>Fase III</td>
            <td><input class="table-date input100 datepicker5" readonly type="text"></td>
            <td><input class="table-date input100 datepicker6" readonly type="text"></td>
          </tr>
          <tr>
            <td>Fase IV</td>
            <td><input class="table-date input100 datepicker7" readonly type="text"></td>
            <td><input class="table-date input100 datepicker8" readonly type="text"></td>
          </tr>
          <tr>
            <td>Fase V</td>
            <td><input class="table-date input100 datepicker9" readonly type="text"></td>
            <td><input class="table-date input100 datepicker10" readonly type="text"></td>
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
        <span class="contact100-form-title" id="form-title"></span>
        <span class="contact100-form-sub-title">
          INFORMACIÓN GENERAL
        </span>

        <div class="wrap-input100 rs1-wrap-input100 validate-input">
          <span class="label-input100">Necesidad a resolver</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Necesidad a resolver" onclick="return false;">help_outline</i></span>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Justificación del valor</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación del valor" onclick="return false;">help_outline</i></span>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Alcance</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Alcance" onclick="return false;">help_outline</i></span>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Restricciones y exclusiones</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Restricciones y exclusiones" onclick="return false;">help_outline</i></span>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>
        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <span class="label-input100">Supuestos</span>
          <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Supuestos" onclick="return false;">help_outline</i></span>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
        </div>
      </form>
      <form class="contact100-form validate-form" id="Form-3">
            <span class="contact100-form-sub-title">
              ALINEAMIENTO ESTRATÉGICO
            </span>
            <?php for ($i=1; $i <= 3 ; $i++):?>
              <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Objetivo # <?=$i?></span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Objetivo # <?=$i?>" onclick="return false;">help_outline</i></span>
                <select id="select-obj-<?=$i?>">
                   <option class="obj-<?=$i?>-option">1. Dinamizar el crecimiento rentable</option>
                   <option class="obj-<?=$i?>-option">2. Maximizar la eficiencia financiera</option>
                   <option class="obj-<?=$i?>-option">3. Lograr alternativas de remuneración para la infraestructura Ballena-Barranca</option>
                   <option class="obj-<?=$i?>-option">4. Desarrollar mercados de gas en Urbes-Movilidad Generación e Industria</option>
                   <option class="obj-<?=$i?>-option">5. Estructurar nuevos negocios y servicios para el crecimiento de la Empresa</option>
                   <option class="obj-<?=$i?>-option">6. Desarrollar proyectos de infraestructura asegurando el MMCV</option>
                   <option class="obj-<?=$i?>-option">7. Lograr una operación y mantenimiento eficiente asegurando la integridad y confiabilidad de la infraestructura</option>
                   <option class="obj-<?=$i?>-option">8. Consolidar una estrategia de Desarrollo Sostenible y fortalecer el Gobierno Corporativo</option>
                   <option class="obj-<?=$i?>-option">9. Contar con un equipo de trabajo con talento y motivación enfocado al cumplimiento de objetivos</option>
                   <option class="obj-<?=$i?>-option">10. Transformar la organización con tecnologías de información y procesos de innovación del negocio</option>
                </select>
              </div>
              <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Aplicación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Aplicación" onclick="return false;">help_outline</i></span>
                <input class="input100" id="input-<?=$i?>" type="text" name="" placeholder="Ingrese la aplicación">
              </div>
            <?php endfor;?>
            <span class="contact100-form-sub-title" id="gen-valor">
              Generación de Valor
            </span>
            <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-gen-valor">
                <option class="gen-valor-option">Maximización de dividendos de largo plazo para los accionistas</option>
                <option class="gen-valor-option">Continuidad estratégica y fortalecimiento operacional permanente</option>
                <option class="gen-valor-option">Profundización del crecimiento de cada activo</option>
                <option class="gen-valor-option">Ninguna</option>
              </select>
            </div>
            <div class="div-gen-valor wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <!--TI-->
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Aplicación</span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Aplicación</span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100" style="color:#fff">text</span>
              <select id="select-work">
                <option class="work-option">Excelencia y eficiencia operacional</option>
                <option class="work-option">Integración y adopción de tecnologías del negocio y de la información</option>
                <option class="work-option">Gestión de la información e inteligencia de negocio</option>
                <option class="work-option">Experiencia de usuario</option>
                <option class="work-option">Gestión de la innovación</option>
              </select>
            </div>
            <div class="div-gen-valor-ti wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Aplicación</span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-MEC" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">¿Está en el MEC?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el MEC?" onclick="return false;">help_outline</i></span>
              <select id="select-mec">
                <option class="mec-option">SI</option>
                <option class="mec-option">NO</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-mec-info">
              <span class="label-input100" id="title-mec-info"></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-peti" style="display:none">
              <span class="label-input100">¿Está en el PETI (Plan estratégico de TI)?</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="¿Está en el PETI?" onclick="return false;">help_outline</i></span>
              <select id="select-peti">
                <option class="option-peti">SI</option>
                <option class="option-peti">NO</option>
              </select>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-just-peti" style="display:none">
              <span class="label-input100">Justificación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" id="input-just-peti" placeholder="Ingrese la justificación">
            </div>
            <span class="crec-flags contact100-form-sub-title">
              Alineamiento Estratégico (Fit Estratégico)
              <span class="icon-download"><i class="material-icons error-text" id="main_flag">flag</i></span>
            </span>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tema-dominante">
              <span class="label-input100">1. Tema Dominante</span>
              <span class="icon-download"><i class="material-icons error-text" id="first_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox"/>
                  <span>En la cadena energética de baja emisión</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Empresa top 1 o 2 en cada mercado o potencializa la entrada a nuevas regiones</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Enmarcada bajo las premisas clave de cada GEN (focos, regiones y destrezas)</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>Perspectiva de rentabilidad de largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="first_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox tesis-inversion">
              <span class="label-input100">2. Tesis de Inversión</span>
              <span class="icon-download"><i class="material-icons error-text" id="second_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Perspectiva de dividendos creciente</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Barreras de entrada vía altas inversiones de capital</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Mercados regulados</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>Bajo niveles relativos de riesgo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="second_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox posicion-mercado">
              <span class="label-input100">3. Posición de Mercado</span>
              <span class="icon-download"><i class="material-icons error-text" id="third_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Exposición a buenas perspectivas demográficas de largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Institucionalidad regulatoria y jurídica confiable</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>Geografías en expansión y desarrollo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="third_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox modelo-intervencion">
              <span class="label-input100">4. Modelo de Intervención</span>
              <span class="icon-download"><i class="material-icons error-text" id="fourth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Capacidad de intervenir proactivamente en la agenda de crecimiento</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Compartir estándares de sostenibilidad, inversión social y valor compartido</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>Relacionamiento con comunidades y grupos de interés, generando valor compartido</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fourth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox capacidades">
              <span class="label-input100">5. Capacidades Técnicas, Financieras y de Gestión de Riesgos Clave</span>
              <span class="icon-download"><i class="material-icons error-text" id="fifth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Experiencia en regiones comparables</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Acceso a tecnología y mejores prácticas gerenciales</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Capacidad financiera alineada con la inversión y acceso a capital</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>Acceso a mercados y reputación superior</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="fifth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input checkbox gobierno-corporativo">
              <span class="label-input100">6. Gobierno Corporativo</span>
              <span class="icon-download"><i class="material-icons error-text" id="sixth_flag">flag</i></span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Socios: Acuerdos de accionistas alineados en intereses de largo plazo del Grupo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Aliados: Acuerdos de niveles de servicio, aspectos técnicos o de gestión de a través de relaciones contractuales a mediano y largo plazo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Estándares de transparencia y reputación del más alto nivel</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Identificación y manejo de conflictos de interés con otras compañías del grupo</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>Relación simétrica y colaborativa</span>
                </label>
              </p>
              <p style="margin-top: 12px">
                <label>
                  <input type="checkbox" name="sixth_checkbox" />
                  <span>No aplica</span>
                </label>
              </p>
            </div>
            <div class="crec-flags wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Aplicación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="Ingrese la aplicación">
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" id="div-socio-est">
              <span class="label-input100">Visualización de un socio estratégico</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Visualización de un socio estratégico" onclick="return false;">help_outline</i></span>
              <select id="select-socio-est">
                <option value="" disabled selected>Seleccione una opción</option>
                <option>SI</option>
                <option>NO</option>
              </select>
            </div>
            <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
              <span class="label-input100">¿Cuál? (opcional)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="text" name="" placeholder="">
            </div>
            <span class="socio-est contact100-form-sub-title" style="display:none">Porcentaje de un socio estratégico</span>
            <div class="socio-est wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
              <span class="label-input100">Valor tentativo</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Justificación" onclick="return false;">help_outline</i></span>
              <input class="input100" type="number" name="" placeholder="">
            </div>
          </form>
      <form class="contact100-form validate-form" id="Form-4">
          <span class="contact100-form-sub-title">
            VIABILIDAD FINANCIERA
          </span>
          <!-- CRECIMIENTO -->
          <div class="crec-info-finaciera wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Estimativo de ingresos anuales</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Estimado de ingresos anuales" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered">
            <thead>
              <tr>
                  <th>Moneda</th>
                  <th>Tasa de cambio a USD</th>
                  <th>Ingreso anual</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Millones COP</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100" id="input-anual-default-1" type="number" min="0.00" max="10000.00" step="0.01" value="3013.11" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 anual-estimate" id="input-cop-anual"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones USD</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100" id="input-anual-default-2" type="number" min="0.00" max="10000.00" step="0.01" value="1.00" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 anual-estimate" id="input-usd-anual"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones EUR</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100" id="input-anual-default-3" type="number" min="0.00" max="10000.00" step="0.01" value="0.85" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 anual-estimate" id="input-eur-anual"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
              <tr>
                <td>Millones GTQ</td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100" id="input-anual-default-4" type="number" min="0.00" max="10000.00" step="0.01" value="7.18" style="text-align:center"></div></td>
                <td><div class="input-icons"><i class="material-icons icon">attach_money</i>
        				<input class="input100 anual-estimate" id="input-gtq-anual"  type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Ingresos anuales</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Ingresos anuales" onclick="return false;">help_outline</i></span>
            <input class="input100" id="ingresos-anuales" type="number" readonly name="name" placeholder="Ingresos anuales">
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">EBITDA</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="EBITDA" onclick="return false;">help_outline</i></span>
            <input class="input100" type="number" name="name" placeholder="EBITDA">
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Aporte a la MEGA</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="MEGA" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Baja</option>
               <option class="work-option">Media</option>
               <option class="work-option">Alta</option>
            </select>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Estabilidad de ingresos</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="MEGA" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Baja</option>
               <option class="work-option">Media</option>
               <option class="work-option">Alta</option>
            </select>
          </div>
          <div class="crec-info-finaciera wrap-input100 rs1-wrap-input100 validate-input" style="display:none">
            <span class="label-input100">Vía de ingresos</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="MEGA" onclick="return false;">help_outline</i></span>
            <select id="select-work">
               <option class="work-option">Baja</option>
               <option class="work-option">Media</option>
               <option class="work-option">Alta</option>
            </select>
          </div>
          <div class="wrap-input100 validate-input">
            <span class="label-input100">Beneficios tangibles e intangibles</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Beneficios e intangibles" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered">
            <thead>
              <tr>
                  <th>Tipo de beneficio</th>
                  <th>Descripción de beneficio</th>
                  <th>Situación actual (Cifra o descripción)</th>
                  <th>Situación con el beneficio (Cifra o descripción)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
              <tr>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
                <td><input class="input100" type="text"></td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <span class="label-input100">Estimado de costos de inversión</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Estimado de costos de inversión" onclick="return false;">help_outline</i></span>
            <table class="display highlight centered" id="table-inversion">
            <thead>
              <tr id="tr-head">
                  <th id="first_th">Moneda</th>
                  <th id="last_th"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td id="tr_1">Millones COP</td>
                <td>Millones COP</td>
              </tr>
              <tr>
                <td id="tr_2">Millones USD</td>
                <td>Millones USD</td>
              </tr>
              <tr>
                <td id="tr_3">Millones EUR</td>
                <td>Millones EUR</td>
              </tr>
              <tr>
                <td id="tr_4">Millones GTQ</td>
                <td>Millones GTQ</td>
              </tr>
            </tbody>
          </table>
          </div>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Presupuesto total</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Presupuesto" onclick="return false;">help_outline</i></span>
            <input class="input100" id="Pres-total" type="text" name="name" placeholder="Ingrese el presupuesto">
          </div>
          <!-- <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Análisis Beneficio / Costo</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Análisis Beneficio / Costo" onclick="return false;">help_outline</i></span>
            <input class="input100" type="text" name="name" placeholder="Ingrese el Análisis">
          </div> -->
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
            <span class="label-input100">Ciclo de vida del producto (años)</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Ciclo de vida de la tecnología (años)" onclick="return false;">help_outline</i></span>
            <input class="input100" type="text" name="name" placeholder="Ingrese el ciclo de vida">
          </div>
          <span class="origen-mandatorio contact100-form-sub-title">
            PROYECTOS DE ORIGEN MANDATORIO
          </span>
          <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">Costos por no ejecución</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Costos por no ejecución" onclick="return false;">help_outline</i></span>
            <input class="input100" type="text" name="name" placeholder="Ingrese los costos">
          </div>
          <div class="origen-mandatorio wrap-input100 rs1-wrap-input100 validate-input">
            <span class="label-input100">Consecuencia sin RYOS</span>
            <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Consecuencia sin RYO" onclick="return false;">help_outline</i></span>
            <input class="input100" type="text" name="name" placeholder="Ingrese las consecuencias">
          </div>
        </form>
      <form class="contact100-form validate-form" id="Form-5">
              <span class="contact100-form-sub-title">
                ATRACTIVIDAD TÉCNICA
              </span>
              <!-- CO -->
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Criticidad en la operación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No afecta la continuidad operacional</option>
                   <option class="work-option">Afectación menor a la continuidad operacional</option>
                   <option class="work-option">Afectación mayor a la continuidad operacional</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Cambio tecnológico</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio de tecnología en el activo o sus componentes</option>
                   <option class="work-option">Uno o más componentes / activo cambia a conocida en GEB</option>
                   <option class="work-option">Uno o más componentes cambia a conocida en GEB</option>
                   <option class="work-option">Uno o más componentes cambia a desconocida en GEB</option>
                   <option class="work-option">Uno o más componentes / activo cambia a desconocida en GEB</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Disponibilidad de los activos</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en la disponibilidad en el activo o sus componentes</option>
                   <option class="work-option">Reduce frecuencia de paradas no programadas sin modificar tiempo de paradas programadas</option>
                   <option class="work-option">Reduce tiempo de paradas programadas pero no modifica frecuencia de paradas no programadas</option>
                   <option class="work-option">Reduce tiempo de paradas programadas y frecuencia de paradas no programadas</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Vida útil del activo</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en la vida útil del activo o sus componentes</option>
                   <option class="work-option">No aumenta la vida útil del activo pero si de sus componentes</option>
                   <option class="work-option">Aumenta la vida útil del activo y de sus componentes</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Esquema de mantenimiento</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en el esquema de mantenimiento del activo o sus componentes</option>
                   <option class="work-option">Reduce frecuencia de paradas programadas sin modificar tiempo de intervención</option>
                   <option class="work-option">Reduce tiempo de paradas programadas sin modificar su frecuencia</option>
                   <option class="work-option">La intervención permite reducir el tiempo de las paradas programadas y su frecuencia</option>
                </select>
              </div>
              <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No hay cambio en el esquema de mantenimiento del activo o sus componentes</option>
                   <option class="work-option">Reduce frecuencia de paradas programadas sin modificar tiempo de intervención</option>
                   <option class="work-option">Reduce tiempo de paradas programadas sin modificar su frecuencia</option>
                   <option class="work-option">La intervención permite reducir el tiempo de las paradas programadas y su frecuencia</option>
                </select>
              </div>
              <!-- TI -->
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Tipo de proyecto de TI</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Soluciones tecnológicas</option>
                   <option class="work-option">Servicios de arquitectura e innovación en TI</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Criticidad en la operación</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">No afecta la continuidad operacional</option>
                   <option class="work-option">Afectación menor a la continuidad operacional</option>
                   <option class="work-option">Afectación mayor a la continuidad operacional</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">¿Se instalará tecnología?</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">SI</option>
                   <option class="work-option">NO</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Cuadrante de Gartner</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Retadores - Challengers</option>
                   <option class="work-option">Líderes - Leaders</option>
                   <option class="work-option">Jugadores de Nicho - Niche players</option>
                   <option class="work-option">Visionarios - Visionaries</option>
                </select>
              </div>
              <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Estado de la tecnología</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                   <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                   <option class="work-option">Nueva en el mundo</option>
                </select>
              </div>
            <!-- </div> -->
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">SI</option>
                 <option class="work-option">NO</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Complejidad del proyecto</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Alta</option>
                 <option class="work-option">Media</option>
                 <option class="work-option">Baja</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto sobre la empresa</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                 <option class="work-option">Positivo. Genera el beneficio previsto</option>
                 <option class="work-option">Neutral. No genera ningún beneficio</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto sobre GEB</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Muy positivo. Genera un beneficio por encima de lo previsto</option>
                 <option class="work-option">Positivo. Genera el beneficio previsto</option>
                 <option class="work-option">Neutral. No genera ningún beneficio</option>
              </select>
            </div>
            <div class="comp-ti wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Resistencia al cambio</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Alta</option>
                 <option class="work-option">Media</option>
                 <option class="work-option">Baja</option>
              </select>
            </div>
            <!-- AC -->
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Restricciones regulatorias</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">No se requieren trámites</option>
                 <option class="work-option">Se requieren algunos trámites</option>
                 <option class="work-option">Se requieren trámites</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Criticidad en la operación</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">No afecta la continuidad operacional</option>
                 <option class="work-option">Afectación menor a la continuidad operacional</option>
                 <option class="work-option">Afectación mayor a la continuidad operacional</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Disponibilidad de los recursos</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Alta</option>
                 <option class="work-option">Media</option>
                 <option class="work-option">Baja</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con otros proyectos (Incluye Sucursal y filiales del GEB)</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">SI</option>
                 <option class="work-option">NO</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Impacto en SST</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Alto</option>
                 <option class="work-option">Medio</option>
                 <option class="work-option">Bajo</option>
              </select>
            </div>
            <div class="comp-ac wrap-input100 rs1-wrap-input100 validate-input">
              <span class="label-input100">Sinergia con estrategias de gestión humana</span>
              <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
              <select id="select-work">
                 <option class="work-option">Alta</option>
                 <option class="work-option">Media</option>
                 <option class="work-option">Baja</option>
              </select>
            </div>
              <!-- CRECIMIENTO -->
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Interconexión (Mercados entre)</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Fuentes energéticas</option>
                   <option class="work-option">Fuentes energéticas y grandes usuarios</option>
                   <option class="work-option">Fuentes energéticas y ciudades pequeñas</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Tecnología a instalar</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tecnología a instalar" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Conocida en el mundo y empleada en GEB</option>
                   <option class="work-option">Conocida en el mundo, nueva en GEB</option>
                   <option class="work-option">Nueva en el mundo</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Complejidad del proyecto</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Alta</option>
                   <option class="work-option">Media</option>
                   <option class="work-option">Baja</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Gestión social</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Gestión social" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Bajo</option>
                   <option class="work-option">Medio</option>
                   <option class="work-option">Alto</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input">
                <span class="label-input100">Gestión ambiental</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Gestión ambiental" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Bajo</option>
                   <option class="work-option">Medio</option>
                   <option class="work-option">Alto</option>
                </select>
              </div>
              <div class="comp-crec wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Sinergia con otros proyectos o activos propios</span>
                <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Tipo de proyecto TI que aplica (Informativo)" onclick="return false;">help_outline</i></span>
                <select id="select-work">
                   <option class="work-option">Alta</option>
                   <option class="work-option">Media</option>
                   <option class="work-option">Baja</option>
                </select>
              </div>
            </form>
      <form class="contact100-form validate-form" id="Form-6">
                    <!-- CO -->
                    <span class="comp-co contact100-form-sub-title">
                      ASPECTOS COMPLEMENTARIOS
                    </span>
                    <span class="comp-co contact100-form-sub-title">
                      <small>AMBIENTAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>SOCIAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>SST</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>DE SEGURIDAD FÍSICA</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                         <option class="work-option" id="option-elect">SI</option>
                         <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>TIERRAS / PREDIAL</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <span class="comp-co contact100-form-sub-title">
                      <small>JURÍDICA Y REGULATORIA</small>
                    </span>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Componente</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Componente" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
                    <div class="comp-co wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                      <span class="label-input100">Interacción</span>
                      <span class="icon-download"><i class="material-icons tooltipped" data-position="right" data-tooltip="Interacción" onclick="return false;">help_outline</i></span>
                      <select id="select-work">
                        <option class="work-option" id="option-elect">SI</option>
                        <option class="work-option" id="option-gas">NO</option>
                      </select>
                    </div>
           <div class="chart wrap-input100 rs1-wrap-input100" style="width: 100% !important">
             <span class="contact100-form-sub-title">
               NIVEL DE RIESGO
             </span>
               <div class="chart-risk">
                   <div class="heatmap">
                       <table>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-1" href="#detailBtnRisks1" draggable="true">R1</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" href="#detailBtnRisks2" id="btn-2" draggable="true">R2</a></span></th>
                               <th></th>
                               <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                               <th>MA</th>
                               <td class="yellow" style="width: 20%">
                               </td>
                               <td class="yellow" style="width: 20%">
                               </td>
                               <td class="orange" style="width: 20%">
                               </td>
                               <td class="red" style="width: 20%" style="width: 20%">
                               </td>
                               <td class="red" style="width: 20%">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-3" href="#detailBtnRisks3"  draggable="true">R3</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-4" href="#detailBtnRisks4" draggable="true">R4</a></span></th>
                               <th></th>
                               <th>A</th>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="red">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-5" href="#detailBtnRisks5" draggable="true">R5</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-6" href="#detailBtnRisks6" draggable="true">R6</a></span></th>
                               <th></th>
                               <th>M</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="orange">
                               </td>
                               <td class="orange">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-7" href="#detailBtnRisks7" draggable="true">R7</a></span></th>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-8" href="#detailBtnRisks8" draggable="true">R8</a></span></th>
                               <th></th>
                               <th>B</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                               <td class="yellow">
                               </td>
                           </tr>
                           <tr>
                               <th><span><a class="event btn-floating btn-large title modal-trigger red" id="btn-9" href="#detailBtnRisks9" draggable="true">R9</a></span></th>
                               <th></th>
                               <th></th>
                               <th>MB</th>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="lime accent-4">
                               </td>
                               <td class="yellow">
                               </td>
                           </tr>
                           <tr>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th class="title" colspan="2"></th>
                               <th>MB</th>
                               <th>B</th>
                               <th>M</th>
                               <th>A</th>
                               <th>MA</th>
                           </tr>
                           <tr>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th class="title" colspan="2"></th>
                               <th class="title" colspan="5">
                                   <h3>Impacto</h3>
                               </th>
                           </tr>
                       </table>
                   </div>
               </div>
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
         <!-- DIVS Estructurales -->
        </div>
       </div>
      </div>
     </div>
  </div>
<?php for ($i= 1; $i < 10; $i++):?>
  <div id="detailBtnRisks<?=$i?>" class="modal">
   <div class="modal-content">
     <a class="modal-close close">
       <i class="material-icons">close</i>
     </a>
     <h2>RIESGOS ESPECÍFICOS RELEVANTES IDENTIFICADOS POR EL GESTOR DEL RYOS</h2>
       <span class="label-input100">RIESGO</span>
       <div class="input100">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
       </div>
      </div>
      <div class="modal-footer">
          <a class="modal-close waves-effect error btn btn-depressed">Cancelar</a>
          <a class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
     </div>
<?php endfor;?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
     var Calendar = document.querySelector('.datepicker');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker2');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker3');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker4');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker5');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker6');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker7');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker8');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker9');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
     var Calendar = document.querySelector('.datepicker10');
     M.Datepicker.init(Calendar,{
       format:'yyyy-mm-dd',
       showClearBtn:true,
       i18n:{
         clear:'borrar',
         done:'Aceptar',
         cancel:'cancelar',
         months:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
         monthsShort:['Ene','Feb','Mar','Abr','Mayo','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
         weekdays:['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
         weekdaysShort:['Dom','Lun','Mar','Miér','Jue','Vie.','Sáb'],
         weekdaysAbbrev:['D','L','M','M','J','V','S']
       }
     });
    </script>
<script type="text/javascript">
$(document).ready(function(){
  $('#select-filial-pe').hide();
  $('#select-filial-gt').hide();
  $('#input_other_filial').hide();
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
function Dynamic_Country(){
    var selected_option = document.getElementById("select-country").value;
    if (selected_option == "CO") {
      $('#select-filial-col').show();
      $('#select-filial-pe').hide();
      $('#select-filial-gt').hide();
      $('#input_other_filial').hide();
    } else if(selected_option == "PE"){
      $('#select-filial-pe').show();
      $('#select-filial-col').hide();
      $('#select-filial-gt').hide();
      $('#input_other_filial').hide();
    }else if(selected_option == "GT"){
      $('#select-filial-gt').show();
      $('#select-filial-pe').hide();
      $('#select-filial-col').hide();
      $('#input_other_filial').hide();
    }else if (selected_option == "other"){
      $('#select-filial-col').hide();
      $('#select-filial-pe').hide();
      $('#select-filial-gt').hide();
      $('#input_other_filial').show();
    }
  }
  $('#select-tipo-proyecto').change(function() {
    var selected_option_tp = document.getElementById(this.id).value;
    if (selected_option_tp == "Crecimiento") {
      $("#div-select-subcategoria-sost *").attr("disabled", "disabled").off('click');
      $("#div-select-subcategoria-sost").hide();
      $("#div-select-subcategoria-crec").show();
      $("#div-select-subcategoria-crec *").attr("disabled", false).off('click');
    } else {
      $("#div-select-subcategoria-crec *").attr("disabled", "disabled").off('click');
      $("#div-select-subcategoria-crec").hide();
      $("#div-select-subcategoria-sost").show();
      $("#div-select-subcategoria-sost *").attr("disabled", false).off('click');
    }
  });
  $(document).ready(function(){
  $("#return").click(function(){
    test();
    var select_option_gr = document.getElementById("select-grupo-est").value,
        select_subcategoria_sost = $('#div-select-subcategoria-sost').find(":selected").val(),
        select_tipo_proyecto = document.getElementById("select-tipo-proyecto").value,
        select_subcategoria_crec = $('#div-select-subcategoria-crec').find(":selected").val(),
        value_subcategoria = $('.select-subcategoria').val();
    if (select_tipo_proyecto == "Sostenimiento") {
        $('#form-title').text(select_subcategoria_sost + ' - ' + 'Información Detallada');
        mec_inputs(select_subcategoria_sost);
    }else {
        $('#form-title').text(select_option_gr + ' - ' + 'Información Detallada');
        mec_inputs(select_subcategoria_crec);
    }
  });
  function test(){
    var Table_Dates = new Array();
    var Validate_Table_Dates = new Array();
    $('.table-date').each(function(){
      if ($(this).val() != "") {
        var date = new Date($(this).val());
        year = date.getFullYear();
        if ($("."+year).hasClass(year) == false) {
          Table_Dates.push(year);
        }
      }
    });
    loop_estimate(Table_Dates.sort());
  };
  function loop_estimate(Table_Dates){
    var length_thead = document.getElementById("tr-head").childElementCount;
    for (var i = 0; i < Table_Dates.length; i++) {
      console.log(Table_Dates[i]);
      // if (length_thead > 2) {
          if ($("."+Table_Dates[i]).hasClass(Table_Dates[i]) == false) {
          $('#last_th').before("<th id="+[i]+" class="+Table_Dates[i]+">"+Table_Dates[i]+"</th>");
          for (var j = 1; j < 5; j++) {
            $('#tr_'+[j]).after('<td><div class="input-icons"><i class="material-icons icon">attach_money</i><input class="input100 inv-estimate '+[j]+'" type="number" min="0.00" max="10000.00" step="0.01" value="0.00" style="text-align:center"></div></td>');
          }
        }
    }
  }
  $('#select-subcategoria-sost').change(function() {
    var value_subcategoria = document.getElementById(this.id).value;
    mec_inputs(value_subcategoria);
    if (value_subcategoria == 'TI') {
      gen_valor_ti(value_subcategoria);
      $('#div-socio-est').hide();
    } else {
      $('#div-socio-est').show();
    }
  });
  function mec_inputs(value_subcategoria){
    crec_flags(value_subcategoria);
    gen_valor_ti(value_subcategoria);
    atractividad_tecn(value_subcategoria);
    if(value_subcategoria == 'TI'){
      $('#div-MEC').show();
      $('#div-mec-info').show();
      $('#title-mec-info').text('Justificación');
    }else if(value_subcategoria == 'CREC'){
      $('#div-mec-info').show();
      $('#title-mec-info').text('n');
    }else{
      $('#div-mec-info').hide();
      $('#div-MEC').hide();
    }
  }
  function crec_flags(value_subcategoria){
    if(value_subcategoria == 'CREC'){
      $('.crec-flags').show();
      $('.crec-info-finaciera').show();
    }else{
      $('.crec-flags').hide();
      $('.crec-info-finaciera').hide();
    }
  }
  function gen_valor_ti(value_subcategoria){
    if(value_subcategoria == 'TI'){
      $('.div-gen-valor').hide();
      $('.div-gen-valor-ti').show();
      $("#div-peti").show();
      $('#div-just-peti').show();
    }else{
      $('.div-gen-valor').show();
      $('.div-gen-valor-ti').hide();
      $('#div-peti').hide();
      $('#div-just-peti').hide();
    }
  }
  function atractividad_tecn(value_subcategoria){
    if(value_subcategoria == 'CREC'){
      $('.comp-crec').show();
      $('.comp-co').hide();
      $('.comp-ti').hide();
      $('.comp-ac').hide();
    }else if(value_subcategoria == 'CO'){
      $('.comp-co').show();
      $('.comp-crec').hide();
      $('.comp-ti').hide();
      $('.comp-ac').hide();
    }else if(value_subcategoria == 'TI'){
      $('.comp-ti').show();
      $('.comp-co').hide();
      $('.comp-crec').hide();
      $('.comp-ac').hide();
    }else if(value_subcategoria == 'AC'){
      $('.comp-ac').show();
      $('.comp-co').hide();
      $('.comp-crec').hide();
      $('.comp-ti').hide();
    }
  }
  $('#select-socio-est').change(function(){
    var value_socio_est = document.getElementById(this.id).value;
    if (value_socio_est == 'SI') {
      $('.socio-est').show();
    }else {
      $('.socio-est').hide();
    }
  });
  $('#select-origen').change(function(){
    var value_origen = document.getElementById(this.id).value;
    if (value_origen == 'SI') {
      $('.origen-mandatorio').show();
    }else {
      $('.origen-mandatorio').hide();
    }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox').change(function(){
    var count_checkbox = $('input:checkbox:checked').length;
    if (count_checkbox >= 0 && count_checkbox <= 7) {
      if ($('#main_flag').hasClass("error-text") == false) {
          $('#main_flag').removeClass('warning-text');
          $('#main_flag').addClass('error-text');
      }
    }else if (count_checkbox >= 8 && count_checkbox <= 14) {
      $('#main_flag').removeClass('error-text');
      $('#main_flag').addClass('warning-text');
    }else if (count_checkbox >= 15 && count_checkbox <= 29) {
      $('#main_flag').removeClass('warning-text');
      $('#main_flag').addClass('primary-text');
    }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tema-dominante').change(function(){
    var count_individual_checkbox = $('input[name="first_checkbox"]:checked').length;
    if (count_individual_checkbox == 0) {
      if ($('#first_flag').hasClass("error-text") == false) {
          $('#first_flag').removeClass('warning-text');
          $('#first_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 1) {
      $('#first_flag').removeClass('error-text');
      $('#first_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
      $('#first_flag').removeClass('warning-text');
      $('#first_flag').addClass('primary-text');
    }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.tesis-inversion').change(function(){
    var count_individual_checkbox = $('input[name="second_checkbox"]:checked').length;
    if (count_individual_checkbox == 0) {
      if ($('#second_flag').hasClass("error-text") == false) {
          $('#second_flag').removeClass('warning-text');
          $('#second_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 1) {
      $('#second_flag').removeClass('error-text');
      $('#second_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
      $('#second_flag').removeClass('warning-text');
      $('#second_flag').addClass('primary-text');
    }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.posicion-mercado').change(function(){
    var count_individual_checkbox = $('input[name="third_checkbox"]:checked').length;
    if (count_individual_checkbox == 0) {
      if ($('#third_flag').hasClass("error-text") == false) {
          $('#third_flag').removeClass('warning-text');
          $('#third_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 1) {
      $('#third_flag').removeClass('error-text');
      $('#third_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
      $('#third_flag').removeClass('warning-text');
      $('#third_flag').addClass('primary-text');
    }
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.modelo-intervencion').change(function(){
    var count_individual_checkbox = $('input[name="fourth_checkbox"]:checked').length;
    if (count_individual_checkbox == 0) {
      if ($('#fourth_flag').hasClass("error-text") == false) {
          $('#fourth_flag').removeClass('warning-text');
          $('#fourth_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 1) {
      $('#fourth_flag').removeClass('error-text');
      $('#fourth_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
      $('#fourth_flag').removeClass('warning-text');
      $('#fourth_flag').addClass('primary-text');
    }
  });
  // QUINTO
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.capacidades').change(function(){
    var count_individual_checkbox = $('input[name="fifth_checkbox"]:checked').length;
    if (count_individual_checkbox == 0) {
      if ($('#fifth_flag').hasClass("error-text") == false) {
          $('#fifth_flag').removeClass('warning-text');
          $('#fifth_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 1) {
      $('#fifth_flag').removeClass('error-text');
      $('#fifth_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 2 && count_individual_checkbox <= 5) {
      $('#fifth_flag').removeClass('warning-text');
      $('#fifth_flag').addClass('primary-text');
    }
  });
  });
  $('.crec-flags.wrap-input100.rs1-wrap-input100.validate-input.checkbox.gobierno-corporativo').change(function(){
    var count_individual_checkbox = $('input[name="sixth_checkbox"]:checked').length;
    if (count_individual_checkbox >= 0 && count_individual_checkbox <= 1) {
      if ($('#sixth_flag').hasClass("error-text") == false) {
          $('#sixth_flag').removeClass('warning-text');
          $('#sixth_flag').addClass('error-text');
      }
    }else if (count_individual_checkbox == 2) {
      $('#sixth_flag').removeClass('error-text');
      $('#sixth_flag').addClass('warning-text');
    }else if (count_individual_checkbox >= 3 && count_individual_checkbox <= 5) {
      $('#sixth_flag').removeClass('warning-text');
      $('#sixth_flag').addClass('primary-text');
    }
  });
$(document).ready(function(){
		$('.event').on("dragstart", function (event) {
			  var dt = event.originalEvent.dataTransfer;
			  dt.setData('Text', $(this).attr('id'));
			});
	    $('table td').on("dragenter dragover drop", function (event) {
		   event.preventDefault();
		   if (event.type === 'drop') {
			  var data = event.originalEvent.dataTransfer.getData('Text',$(this).attr('id'));
			  de=$('#'+data).detach();
			  de.appendTo($(this));
		   };
	   });
   });
  $(document).ready(function(){
    $('.input100.anual-estimate').change(function() {
      // $('#ingresos-anuales').attr('value');
      var count = 0;
      var result = 0;
      $('.input100.anual-estimate').each(function(){
        count += + 1;
        result += +$(this).val() / $('#input-anual-default-' + count).val();
      })
      $('#ingresos-anuales').val(result);
    });
    $(document).on('change', '.input100.inv-estimate', function() {
      var count = 0;
      var result_1 = 0;
      var result_2 = 0;
      var result_3 = 0;
      var result_4 = 0;
      $('.input100.inv-estimate.1').each(function(){
        count = 1;
        result_1 += +$(this).val() / $('#input-anual-default-' + 1).val();
      });
      $('.input100.inv-estimate.2').each(function(){
        result_2 += +$(this).val() / $('#input-anual-default-' + 2).val();
      });
      $('.input100.inv-estimate.3').each(function(){
        result_3 += +$(this).val() / $('#input-anual-default-' + 3).val();
      });
      $('.input100.inv-estimate.4').each(function(){
        result_4 += +$(this).val() / $('#input-anual-default-' + 4).val();
      });
      $('#Pres-total').val(result_1 + result_2 + result_3 + result_4);
    });
  });
</script>
