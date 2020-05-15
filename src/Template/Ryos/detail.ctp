<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages','PortalProjects'],
        [ 'Lista de RYOS','index','Ryos'],
    ];
?>
<?= $this->Html->script(['search.min.js']) ?>
<div class="section portal-projects">
    <div class="breadcrumb-container" id="breadcrumb_ryos">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <div class="modal-content" style="width: 100%; height: 100%; padding-top: 0% !important">
      <h2 id="title-ryos">Detalle del RYOS</h2>
        <table class="centered" id="<?=$json_ryos?>">
          <tr>
            <th>Nombre de etiqueta</th>
            <th>Valor</th>
          </tr>
        </table>
        <div class="container-contact100-form-btn mt-6">
            <button class="contact100-form-btn" type="button" id="main-btn">
                <span>
                    Descargar
                </span>
            </button>
        </div>
      </div>
    </div>
<script>
var email_user = $('#email-element').text(),
    ryos_code = $('table').attr('id');
var settings = {
    "async": true,
    "crossDomain": true,
<<<<<<< HEAD
    "url": "http://192.168.1.153:7001/ords/projects_portal/portal/formryos/list/?v_record=" + ryos_code + "&v_email=" + email_user,
=======
    "url": "http://192.168.0.210:8080/ords/portal/formryos/list/?v_record=" + ryos_code + "&v_email=" + email_user,
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
    "method": "GET",
    "headers": {
        "Content-Type": "application/json",
        "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
        "cache-control": "no-cache"
    },
    "processData": false,
    "data": ""
}

var name = null;
$.ajax(settings).done(function(response) {
    $.each(response.items, function() {
        $.each(this.data, function(key, data) {
            $('#title-ryos').text('RYOS - ' + this.t_name);
            $('#breadcrumb_ryos').append($('<a>', {
                text: this.t_name,
                class: 'breadcrumb',
                href: '/Portal-Web/ryos/detail/' + ryos_code
            }));
            $.each(this, function(index, data) {
                $('#' + ryos_code).append($('<tr>', {id : index, class : 'tr-ryos'}));
                // NOMBRE
                if (index == 't_name') {
                  name = 'Nombre Requerimiento u Oportunidad - RYOS';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                //GESTOR
                if (index == 't_gestor') {
                  name = 'Gestor RYOS';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                //Grupo estratégico
                if (index == 't_strategic_group') {
                  name = 'Grupo Estratégico de Negocio (GEN)';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // PAÍS
                if (index == 't_country') {
                  name = 'País';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // FILIAL
                if (index == 't_filial') {
                  name = 'Filial';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // VICEPRESIDENCIA / DIRECCIÓN
                if (index == 't_vicepresidencia') {
                  name = 'Vicepresidencia / Dirección';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // GERENCIA
                if (index == 't_gerencia') {
                  name = 'Gerencia';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // PROYECTO DE ORIGEN MANDATORIO
                if (index == 't_mandatory_proj') {
                  name = '¿Proyecto de origen Mandatorio?';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // TIPO DE PROYECTO
                if (index == 't_code_type') {
                  name = 'Tipo de proyecto';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // SUBCATEGORÍA
                if (index == 't_subcategory') {
                  name = 'Subcategoría';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // Fechas tentativas
                if (index == 'd_start_phase_i') {
                  name = 'Inicio - Fase I';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_start_phase_ii') {
                  name = 'Inicio - Fase II';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_start_phase_iii') {
                  name = 'Inicio - Fase III';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_start_phase_iv') {
                  name = 'Inicio - Fase IV';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_start_phase_v') {
                  name = 'Inicio - Fase V';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // Fechas tentativas Finish date
                if (index == 'd_finish_phase_i') {
                  name = 'Fin - Fase I';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_finish_phase_ii') {
                  name = 'Fin - Fase II';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_finish_phase_iii') {
                  name = 'Final - Fase III';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_finish_phase_iv') {
                  name = 'Final - Fase IV';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'd_finish_phase_v') {
                  name = 'Fin - Fase V';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // NECESIDAD A RESOLVER
                if (index == 't_necesidad') {
                  name = 'Necesidad a resolver';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // JUSTIFICACIÓN DEL VALOR
                if (index == 't_just_val') {
                  name = 'Justificación del valor';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // ALCANCE
                if (index == 't_alcance') {
                  name = 'Alcance';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // RESTRICCIONES Y EXCLUSIONES
                if (index == 't_restriccion') {
                  name = 'Restricciones y exclusiones';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // SUPUESTOS
                if (index == 't_supuestos') {
                  name = 'Supuestos';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // ALINEAMIENTO ESTRATÉGICO
                if (index == 't_objetive_1') {
                  name = 'Objetivo #1';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_objetive_2') {
                  name = 'Objetivo #2';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_objetive_3') {
                  name = 'Objetivo #3';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // Aplicaciones objetivos
                if (index == 't_application_1') {
                  name = 'Aplicación objetivo 1';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_2') {
                  name = 'Aplicación objetivo 2';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_3') {
                  name = 'Aplicación objetivo 3';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // GENERACIÓN DE VALOR
                if (index == 't_gen_val_1') {
                  name = 'Generación de valor';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_gen_application_1') {
                  name = 'Aplicación generación de valor';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_mec') {
                  name = '¿Está en el MEC?';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_just_mec') {
                  name = 'Justificación MEC';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // Alineamiento estratégico
                if (index == 'b_checkbox_1') {
                  name = 'En la cadena energética de baja emisión';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_2') {
                  name = 'Empresa top 1 o 2 en cada mercado o potencializa la entrada a nuevas regiones';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_3') {
                  name = 'Enmarcada bajo las premisas clave de cada GEN (focos, regiones y destrezas)';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_4') {
                  name = 'Perspectiva de rentabilidad de largo plazo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_5') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // 2. TESIS DE INVERSIÓN
                if (index == 'b_checkbox_6') {
                  name = 'Perspectiva de dividendos creciente';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_7') {
                  name = 'Barreras de entrada vía altas inversiones de capital';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_8') {
                  name = 'Mercados regulados';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_9') {
                  name = 'Bajo niveles relativos de riesgo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_10') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_11') {
                  name = 'Exposición a buenas perspectivas demográficas de largo plazo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_12') {
                  name = 'Institucionalidad regulatoria y jurídica confiable';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_13') {
                  name = 'Geografías en expansión y desarrollo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_14') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_15') {
                  name = 'Capacidad de intervenir proactivamente en la agenda de crecimiento';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_16') {
                  name = 'Compartir estándares de sostenibilidad, inversión social y valor compartido';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_17') {
                  name = 'Relacionamiento con comunidades y grupos de interés, generando valor compartido';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_18') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_19') {
                  name = 'Experiencia en regiones comparables';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_20') {
                  name = 'Acceso a tecnología y mejores prácticas gerenciales';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_21') {
                  name = 'Capacidad financiera alineada con la inversión y acceso a capital';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_22') {
                  name = 'Acceso a mercados y reputación superior';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_23') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_24') {
                  name = 'Socios: Acuerdos de accionistas alineados en intereses de largo plazo del Grupo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_25') {
                  name = 'Aliados: Acuerdos de niveles de servicio, aspectos técnicos o de gestión de a través de relaciones contractuales a mediano y largo plazo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_26') {
                  name = 'Estándares de transparencia y reputación del más alto nivel';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_27') {
                  name = 'Identificación y manejo de conflictos de interés con otras compañías del grupo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_28') {
                  name = 'Relación simétrica y colaborativa';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'b_checkbox_29') {
                  name = 'No aplica';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // Aplicaciones checkbox
                if (index == 't_application_flag_1') {
                  name = 'Aplicación tema dominante';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_flag_2') {
                  name = 'Aplicación tesis de inversión';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_flag_3') {
                  name = 'Aplicación posición de mercado';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_flag_4') {
                  name = 'Aplicación modelo de intervención';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_flag_5') {
                  name = 'Aplicación capacidades técnicas, financieras y de gestión de riesgos clave';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_application_flag_6') {
                  name = 'Aplicación gobierno corporativo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // SOCIO ESTRATÉGICO
                if (index == 't_socio_est') {
                  name = 'Visualización de un socio estratégico';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_cual_soc_est') {
                  name = '¿Cuál? (opcional)';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_tentative_val') {
                  name = 'Valor tentativo';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // VIABILIDAD FINANCIERA
                if (index == 'n_cop_anual') {
                  name = 'Ingreso anual COP';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_usd_anual') {
                  name = 'Ingreso anual USD';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_eur_anual') {
                  name = 'Ingreso anual EUR';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_gtq_anual') {
                  name = 'Ingreso anual GTQ';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // PRESUPUESTO TOTAL
                if (index == 'n_ingresos_anuales') {
                  name = 'Ingresos anuales';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // EBITDA
                if (index == 'n_ebitda') {
                  name = 'EBITDA';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // APORTE A LA MEGA
                if (index == 't_mega') {
                  name = 'Aporte a la MEGA';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                // ESTABILIDAD DE INGRESOS
                if (index == 't_estabilidad') {
                  name = 'Estabilidad de ingresos';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_ingresos') {
                  name = 'Vía de ingresos';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                for (var i = 1; i <= 6; i++) {
                  // BENEFIOCIOS TANGIBLES E INTANGIBLES
                  if (index == 't_tipo_beneficio_'+i) {
                    name = 'Tipo de beneficio';
                    $('#' + index).append($('<th>', {
                            text: name,
                            // style: 'text-align:center'
                        }))
                        .append($('<th>', {
                            text: data,
                            // style: 'text-align:center'
                        }))
                  }
                  if (index == 't_desc_beneficio_'+i) {
                    name = 'Descripción de beneficio';
                    $('#' + index).append($('<th>', {
                            text: name,
                            // style: 'text-align:center'
                        }))
                        .append($('<th>', {
                            text: data,
                            // style: 'text-align:center'
                        }))
                  }
                  if (index == 't_situacion_actual_'+i) {
                    name = 'Situación actual (Cifra o descripción)';
                    $('#' + index).append($('<th>', {
                            text: name,
                            // style: 'text-align:center'
                        }))
                        .append($('<th>', {
                            text: data,
                            // style: 'text-align:center'
                        }))
                  }
                  if (index == 't_situacion_beneficio_'+i) {
                    name = 'Situación con el beneficio (Cifra o descripción)';
                    $('#' + index).append($('<th>', {
                            text: name,
                            // style: 'text-align:center'
                        }))
                        .append($('<th>', {
                            text: data,
                            // style: 'text-align:center'
                        }))
                      }
                }
                //Estimado de costos de inversión
                if (index.indexOf('n_cost_') == 0) {
                    console.log(index.slice(7,-2)+' '+index);
                    var year = index.slice(7,-2);
                    if (index == 'n_cost_'+year+'_1') {
                      name = 'Estimado de costos de inversión COP '+year;
                      $('#' + index).append($('<th>', {
                              text: name,
                              // style: 'text-align:center'
                          }))
                          .append($('<th>', {
                              text: data,
                              // style: 'text-align:center'
                          }))
                        }
                        if (index == 'n_cost_'+year+'_2') {
                          name = 'Estimado de costos de inversión USD '+year;
                          $('#' + index).append($('<th>', {
                                  text: name,
                                  // style: 'text-align:center'
                              }))
                              .append($('<th>', {
                                  text: data,
                                  // style: 'text-align:center'
                              }))
                            }
                            if (index == 'n_cost_'+year+'_3') {
                              name = 'Estimado de costos de inversión EUR '+year;
                              $('#' + index).append($('<th>', {
                                      text: name,
                                      // style: 'text-align:center'
                                  }))
                                  .append($('<th>', {
                                      text: data,
                                      // style: 'text-align:center'
                                  }))
                                }
                                if (index == 'n_cost_'+year+'_4') {
                                  name = 'Estimado de costos de inversión GTQ '+year;
                                  $('#' + index).append($('<th>', {
                                          text: name,
                                          // style: 'text-align:center'
                                      }))
                                      .append($('<th>', {
                                          text: data,
                                          // style: 'text-align:center'
                                      }))
                                    }
                }
                if (index == 't_pres_total') {
                  name = 'Presupuesto total';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_ciclo_vida') {
                  name = 'Ciclo de vida del producto (años)';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 'n_costos_no_ejec') {
                  name = 'Costos por no ejecución';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_consecuencia') {
                  name = 'Consecuencia sin RYOS';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_interconexion_crec') {
                  name = 'Interconexión (Mercados entre)';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_tec_inst_crec') {
                  name = 'Tecnología a instalar';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_complejidad_crec') {
                  name = 'Complejidad del proyecto';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_gestion_soc_crec') {
                  name = 'Gestión social';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_gestion_amb_crec') {
                  name = 'Gestión ambiental';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                if (index == 't_sinergia_crec') {
                  name = 'Sinergia con otros proyectos o activos propios';
                  $('#' + index).append($('<th>', {
                          text: name,
                          // style: 'text-align:center'
                      }))
                      .append($('<th>', {
                          text: data,
                          // style: 'text-align:center'
                      }))
                }
                for (var j = 1; j <= 19; j++) {
                  if (index == 't_risk_'+j) {
                    name = 'Riesgo '+j;
                    $('#' + index).append($('<th>', {
                            text: name,
                            // style: 'text-align:center'
                        }))
                        .append($('<th>', {
                            text: data,
                            // style: 'text-align:center'
                        }))
                  }
                }
                // $('#' + index).append($('<th>', {
                //         text: index,
                //         // style: 'text-align:center'
                //     }))
                //     .append($('<th>', {
                //         text: data,
                //         // style: 'text-align:center'
                //     }))
            });
        });
    });
});
$('#main-btn').click(function(){
  json_form();
});
function json_form(){
  var array_form = {};
  $('.tr-ryos').each(function() {
    var first_child = $(this).children().first().text(),
        last_child = $(this).children().last().text();
    console.log(first_child+' '+last_child);
    array_form[first_child] = last_child;
  });
  // console.log(array_form)
  send_json(JSON.stringify(array_form));
}
var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
function send_json(json_form){
    xhr2 = $.ajax({
        headers:{
          'X-CSRF-Token':csrfToken
        },
        method: "POST",
        dataType: "json",
        url: "<?php echo $this->Url->build(['controller'=>'Ryos','action'=>'download']);?>",
        data: {ryos_form : json_form},
        cache: true,
        beforeSend: function(xhr) {
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        },
        success: function(response){
            if (response == 200) {
              // success_notification('El RYOS ha sido enviado correctamente.');
              window.location.href = "/Portal-Web/ryos.xlsx";
            }
        }
      });
  }
</script>
