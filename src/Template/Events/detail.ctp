<?php
    // Breadcrumb
    $breadcrumb = [
        [ 'Inicio', 'home','Pages', ''],
        [ 'Lista de lecciones aprendidas','index','Events', $user],
    ];
?>
<div class="section portal-projects">
    <div class="breadcrumb-container" id="breadcrumb_la">
        <a href="javascript:history.back()" class="breadcrumb-back"><i class="material-icons">keyboard_arrow_left</i></a>
        <?php foreach ($breadcrumb as $item): ?>
          <?php echo $this->Html->link(
            $item[0],
            ['controller'=>$item[2], 'action'=>$item[1], $item[3]],
            ['escape' => false,'class'=>'breadcrumb']);
          ?>
        <?php endforeach; ?>
    </div>
    <div class="section home">
        <div class="home-menu">
            <div class="container-contact100">
              <div class="notify bar-top" id="div-notify" data-notification-status="success"></div>
                <main style="display:none">
                    <div class="wrapper">
                        <nav>
                            <a href="#" class="button" id="btn-error" data-type="bottom-right" data-status="error">Bottom Right</a>
                            <a href="#" class="button" id="btn-success" data-type="bottom-right" data-status="success">Bottom Right</a>
                        </nav>
                    </div>
                </main>
                <div class="wrap-contact100">
                    <form class="contact100-form validate-form active" id="<?=$user?>">
                        <span class="contact100-form-title" id="title-detail">Lección aprendida</span>
                        <?php if($user == "person"):?>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Nombre del usuario</span>
                              <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_019_s_NombreUsuario" placeholder="Ingrese el nombre de usuario" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Cargo</span>
                              <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_020_s_Cargo" placeholder="Ingrese el cargo" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Correo electrónico</span>
                              <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_021_s_Correo" placeholder="Ingrese el correo" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Líder/Cargo funcional para consulta</span>
                              <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lapa_022_s_Lider" placeholder="Ingrese el líder/cargo funcional" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">¿Qué sucedio?</span>
                              <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_006_s_QueSucedio" placeholder="Ingrese el líder/cargo funcional" readonly></textarea>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Cúando ocurrio?</span>
                              <input class="input100 la-input" autocomplete="off" type="text" name="la-input" id="lare_007_t_CuandoOcurrio" placeholder="Seleccione la fecha del evento" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">¿Durante que gestión o categoría?</span>
                              <input name="la-select" id="lare_008_t_Durante" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Área CORE</span>
                              <input name="la-select" id="lare_009_t_SubProyecto" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">¿En que fase ocurrio?</span>
                              <input name="la-select" id="lare_010_t_Fase" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Tipo de evento </span>
                              <input name="la-select" id="lare_012_TipoEvento" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">¿Que cree que puede aprender?</span>
                              <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_013_s_PuedeAprender" placeholder="" readonly></textarea>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">¿Que puede mejorar o potenciar?</span>
                              <textarea class="materialize-textarea la-input" autocomplete="off" type="text" name="la-input" id="lare_014_s_MejorarPotenciar" placeholder="" readonly></textarea>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Tipo de registro</span>
                              <input name="la-select" id="lare_005_t_TipoRegistro" readonly>
                          </div>
                        <?php else:?>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Estatus</span>
                              <input class="input100 la-input" id="status" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Proyecto de referencia</span>
                              <input id="lapa_045_proyectoreferecia" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Empresa</span>
                              <input id="lapa_046_t_empresa"readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Líder/Cargo funcional para consulta</span>
                              <input id="lapa_022_s_lider" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Descripcion acontecimiento / evento</span>
                              <textarea class="materialize-textarea" id="lapa_001_s_descacont" readonly></textarea>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Fecha de identificación</span>
                              <input id="lapa_002_s_fidentificacion" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">categoría</span>
                              <input id="lapa_003_t_gestionimpactada" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Área CORE</span>
                              <input id="lapa_004_t_subproyecto" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">MMCV (Fase)</span>
                              <input id="lapa_005_t_mmcvfase" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Tipo acontecimiento</span>
                              <input id="lapa_007_t_tipoacontecimien" readonly>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Lección aprendida</span>
                              <textarea class="materialize-textarea" id="lapa_008_s_leccionapren" readonly></textarea>
                          </div>
                          <div class="wrap-input100 rs1-wrap-input100">
                              <span class="label-input100">Plan de acción</span>
                              <textarea class="materialize-textarea" id="lapa_009_s_planaccion" readonly style="resize: none !important"></textarea>
                          </div>
                        <?php endif;?>
                        <div class="project-content mb-6">
                            <div class="chart box-risk">
                                <h2>Causas:</h2>
                                <div class="chart-risk">
                                    <div class="chart-risk-list">
                                        <ul class="row wrap" id="li-ul"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- DIVS Estructurales -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php for ($i= 1; $i < 100; $i++):?>
  <div id="detailEvents<?=$i?>" data-modal="<?=$i?>" class="modal">
   <div class="modal-content">
     <a class="modal-close close">
       <i class="material-icons">close</i>
     </a>
     <h2>Causa</h2>
       <?php if($user == "person"):?>
         <div class="wrap-input100" style="display:none">
             <span class="label-input100">Causas</span>
             <input class="la-input-li-<?=$i?>" id="uuu_tab_id_<?=$i?>" autocomplete="off" type="text" name="uuu_tab_id" value="Causas" readonly>
         </div>
         <div class="wrap-input100 mt-6 pt-6">
             <span class="label-input100">Breve descripción</span>
             <input class="la-input-li-<?=$i?>" id="short_desc_<?=$i?>" autocomplete="off" type="text" name="short_desc" readonly>
         </div>
         <div class="wrap-input100" style="display:none">
             <span class="label-input100">Número</span>
             <input class="la-input-li-<?=$i?>" id="li_num_<?=$i?>" autocomplete="off" type="text" name="li_num" readonly>
         </div>
         <div class="wrap-input100">
             <span class="label-input100">¿Por qué sucedio?</span>
             <textarea class="materialize-textarea la-input-li-<?=$i?>" id="lare_016_s_PorQueSucedio_<?=$i?>" name="lare_016_s_PorQueSucedio" autocomplete="off" type="text" readonly></textarea>
         </div>
       <?php else:?>
         <div class="wrap-input100 mt-6 pt-6">
             <span class="label-input100">Causa</span>
             <textarea class="materialize-textarea la-input-li-<?=$i?>" id="lapa_026_s_porquesucedio_<?=$i?>" readonly></textarea>
         </div>
         <div class="wrap-input100">
             <span class="label-input100">Impactos generados</span>
             <textarea class="materialize-textarea la-input-li-<?=$i?>" id="lare_017_s_impactogenerado_<?=$i?>" readonly></textarea>
         </div>
         <div class="wrap-input100">
             <span class="label-input100">Impacto al proyecto</span>
             <input class="la-input-li-<?=$i?>" id="lare_018_s_impactoproyecto_<?=$i?>" readonly>
         </div>
         <div class="wrap-input100">
             <span class="label-input100">Impacto al GEB</span>
             <input class="la-input-li-<?=$i?>" id="lare_019_s_impactogeb_<?=$i?>" readonly>
         </div>
         <div class="wrap-input100">
             <span class="label-input100">Prioridad</span>
             <input class="la-input-li-<?=$i?>" id="lare_020_s_prioridad_<?=$i?>" readonly>
         </div>
         <div class="wrap-input100 mt-6 pt-6">
             <span class="label-input100">Breve descripción</span>
             <input class="la-input-li-<?=$i?>" id="short_desc_<?=$i?>" autocomplete="off" type="text" name="short_desc" readonly>
         </div>
       <?php endif;?>
      </div>
      <div class="modal-footer">
          <a class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
      </div>
     </div>
<?php endfor;?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var user = $('form').attr('id');
  if (user == 'person') {
    var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/listeventbyrecord/"+'<?=$code?>',
=======
        "url": "http://192.168.0.210:8080/ords/portal/registerevent/listeventbyrecord/"+'<?=$code?>',
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
        }
    }

    $.ajax(settings).done(function(response) {
        $.each(response.items, function() {
            $('#title-detail').text('Lección aprendida - '+ this.record_no);
            $('#breadcrumb_la').append($('<a>', {
                text: this.record_no,
                class: 'breadcrumb',
                href: '/Portal-Web/events/detail/'+user+'/'+this.record_no
            }));
            $('#select-project').val(this.empresa);
            $('#lapa_019_s_NombreUsuario').val(this.lapa_019_s_nombreusuario);
            $('#lapa_021_s_Correo').val(this.lapa_021_s_correo);
            // $('#status').val(this.estado);
            $('#lapa_020_s_Cargo').val(this.lapa_020_s_cargo);
            $('#lapa_022_s_Lider').val(this.lapa_022_s_lider);
            $('#lare_006_s_QueSucedio').val(this.lare_006_s_quesucedio);
            M.textareaAutoResize($('#lare_006_s_QueSucedio'));
            $('#lare_007_t_CuandoOcurrio').val(this.lare_007_t_cuandoocurrio);
            $('#lare_008_t_Durante').val(this.lare_008_t_durante);
            $('#lare_009_t_SubProyecto').val(this.lare_009_t_subproyecto);
            $('#lare_010_t_Fase').val(this.lare_010_t_fase);
            // $('#lare_011_t_Afecta').val(this.lare_011_t_afecta);
            $('#lare_012_TipoEvento').val(this.lare_012_tipoevento);
            $('#lare_013_s_PuedeAprender').val(this.lare_013_s_puedeaprender);
            M.textareaAutoResize($('#lare_013_s_PuedeAprender'));
            $('#lare_014_s_MejorarPotenciar').val(this.lare_014_s_mejorarpotenciar);
            M.textareaAutoResize($('#lare_014_s_MejorarPotenciar'));
            $('#lare_005_t_TipoRegistro').val(this.lare_005_t_tiporegistro);
            LineItems(this.line_items);
        });
    });
  }
  else {
    var settings = {
        "async": true,
        "crossDomain": true,
<<<<<<< HEAD
        "url": "http://192.168.1.153:7001/ords/projects_portal/portal/registerevent/listbyrecord/"+'<?=$code?>',
=======
        "url": "http://192.168.0.210:8080/ords/portal/registerevent/listbyrecord/"+'<?=$code?>',
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
        "method": "GET",
        "headers": {
            "Authorization": "Bearer <?=$_SESSION["PortalToken"]?>",
            "cache-control": "no-cache"
        }
    }
    $.ajax(settings).done(function(response) {
        $.each(response.items, function() {
            console.log(this);
            $('#title-detail').text('Lección aprendida - '+ "<?=$code?>");
            $('#breadcrumb_la').append($('<a>', {
                "text": "<?=$code?>",
                class: 'breadcrumb',
                href: '/Portal-Web/events/detail/'+user+'/'+"<?=$code?>"
            }));
            $('#status').val(this.status);
            $('#lapa_045_proyectoreferecia').val(this.lapa_045_proyectoreferecia);
            $('#lapa_046_t_empresa').val(this.lapa_046_t_empresa);
            $('#lapa_022_s_lider').val(this.lapa_022_s_lider);
            $('#lapa_001_s_descacont').val(this.lapa_001_s_descacont);
            M.textareaAutoResize($('#lapa_001_s_descacont'));
            $('#lapa_002_s_fidentificacion').val(this.lapa_002_s_fidentificacion);
            $('#lapa_003_t_gestionimpactada').val(this.lapa_003_t_gestionimpactada);
            $('#lapa_004_t_subproyecto').val(this.lapa_004_t_subproyecto);
            $('#lapa_005_t_mmcvfase').val(this.lapa_005_t_mmcvfase);
            $('#lapa_007_t_tipoacontecimien').val(this.lapa_007_t_tipoacontecimien);
            $('#lapa_008_s_leccionapren').val(this.lapa_008_s_leccionapren);
            M.textareaAutoResize($('#lapa_008_s_leccionapren'));
            $('#lapa_009_s_planaccion').val(this.lapa_009_s_planaccion);
            M.textareaAutoResize($('#lapa_009_s_planaccion'));
            LineItems(this.line_items);
        });
    });
  }
  $('#add').click(function() {
      var position = $('#li-ul').children().length;
      LineItems(position + 1);
      ModalLineItems(position + 1);
  });
  function LineItems(line_item) {
    $.each(line_item, function(){

      $('#li-ul').append($('<li>', {
              class: 'd-flex col s12 m6 l4 xl3'
          })
          .append($('<a>', {
              id: this.li_num,
              href: '#detailEvents' + this.li_num,
              class: 'modal-trigger',
              text: 'Causa '+this.li_num
          })));
          if ($('form').attr('id') == 'person') {
            $('#lare_016_s_PorQueSucedio_'+this.li_num).val(this.lare_016_s_porquesucedio);
            M.textareaAutoResize($('#lare_016_s_PorQueSucedio_'+this.li_num));
            $('#li_num_'+this.li_num).val(this.li_num);
            $('#short_desc_'+this.li_num).val(this.short_desc);
          } else {
            $('#lapa_026_s_porquesucedio_'+this.li_num).val(this.lapa_026_s_porquesucedio);
            M.textareaAutoResize($('#lapa_026_s_porquesucedio_'+this.li_num));
            $('#lare_017_s_impactogenerado_'+this.li_num).val(this.lare_017_s_impactogenerado);
            M.textareaAutoResize($('#lare_017_s_impactogenerado_'+this.li_num));
            $('#lare_018_s_impactoproyecto_'+this.li_num).val(this.lare_018_s_impactoproyecto);
            M.textareaAutoResize($('#lare_018_s_impactoproyecto_'+this.li_num));
            $('#lare_019_s_impactogeb_'+this.li_num).val(this.lare_019_s_impactogeb);
            $('#lare_020_s_prioridad_'+this.li_num).val(this.lare_020_s_prioridad);
            $('#short_desc_'+this.li_num).val(this.short_desc);
          }
    });
  }
});
</script>
<<<<<<< HEAD
=======
<!-- CONTADOR DE CARACTERES -->
<script>
  $(document).ready(function(){
    $(document).ready(function() {
$('textarea#lapa_001_s_descacont').characterCounter();
});
  })
</script>
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
