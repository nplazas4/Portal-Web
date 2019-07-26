$(document).ready(function(){
      var rowFilesCount2 = $('#id_table_caf tr').length - 1;
      $("#CheckboxDateTitle").change(function() {
          if(!$(this).is(":checked")) {
                    for (i=0; i< rowFilesCount2; i++){
                      $('#IdColumnTitleDate').hide();
                      $('#IdColumnDate'+i).hide();
                      $('#CheckboxDateData'+i).attr("disabled", true).hide();
                      if (!$('#CheckboxDateTitle').is(":checked") && !$('#CheckboxPlanTitle').is(":checked") && !$('#CheckboxEjecTitle').is(":checked") && !$('#CheckboxBlTitle').is(":checked")) {
                          $('#IdCheckbox').hide();
                          $('#IdColumnCheckbox'+i).hide();
                          $("#CheckboxData"+i).attr("disabled", true).hide();
                      }
                    }
                  }
          else {
                  for (i=0; i< rowFilesCount2; i++){
                    $('#CheckboxDateData'+i).attr("disabled", false);
                  }
          }
      });
      $("#CheckboxPlanTitle").change(function() {
          if(!$(this).is(":checked")) {
                    for (i=0; i< rowFilesCount2; i++){
                      $('#IdColumnTitlePlan').hide();
                      $('#IdColumnPlan'+i).hide();
                      $('#CheckboxPlanData'+i).attr("disabled", true).hide();
                      if (!$('#CheckboxDateTitle').is(":checked") && !$('#CheckboxPlanTitle').is(":checked") && !$('#CheckboxEjecTitle').is(":checked") && !$('#CheckboxBlTitle').is(":checked")) {
                          $('#IdCheckbox').hide();
                          $('#IdColumnCheckbox'+i).hide();
                          $("#CheckboxData"+i).attr("disabled", true).hide();
                      }
                    }
          }
          else {
                  for (i=0; i< rowFilesCount2; i++){
                    $('#CheckboxPlanData'+i).attr("disabled", false);
                  }
          }
      });
      $("#CheckboxEjecTitle").change(function() {
          if(!$(this).is(":checked")) {
                for (i=0; i< rowFilesCount2; i++){
                    $('#IdColumnTitleEjec').hide();
                    $('#IdColumnEjec'+i).hide();
                    $('#CheckboxEjecData'+i).attr("disabled", true).hide();
                    if (!$('#CheckboxDateTitle').is(":checked") && !$('#CheckboxPlanTitle').is(":checked") && !$('#CheckboxEjecTitle').is(":checked") && !$('#CheckboxBlTitle').is(":checked")) {
                        $('#IdCheckbox').hide();
                        $('#IdColumnCheckbox'+i).hide();
                        $("#CheckboxData"+i).attr("disabled", true).hide();
                    }
                }
          }
          else {
                  for (i=0; i< rowFilesCount2; i++){
                    $('#CheckboxEjecData'+i).attr("disabled", false);
                  }
          }
      });
      $("#CheckboxBlTitle").change(function() {
          if(!$(this).is(":checked")) {
                    for (i=0; i< rowFilesCount2; i++){
                      $('#IdColumnTitleBl').hide();
                      $('#IdColumnBl'+i).hide();
                      $('#CheckboxBlData'+i).attr("disabled", true).hide();
                      if (!$('#CheckboxDateTitle').is(":checked") && !$('#CheckboxPlanTitle').is(":checked") && !$('#CheckboxEjecTitle').is(":checked") && !$('#CheckboxBlTitle').is(":checked")) {
                          $('#IdCheckbox').hide();
                          $('#IdColumnCheckbox'+i).hide();
                          $("#CheckboxData"+i).attr("disabled", true).hide();
                      }
                    }
          }
          else {
                  for (i=0; i< rowFilesCount2; i++){
                    $('#CheckboxBlData'+i).attr("disabled", false);
                  }
          }
      });
      for (i=0; i< rowFilesCount2; i++){
      $("#CheckboxData"+i).change(function() {
          if(!$(this).is(":checked")) {
                    $('#CheckboxDateData'+i).attr("disabled", true);
                    $('#CheckboxPlanData'+i).attr("disabled", true);
                    $('#CheckboxEjecData'+i).attr("disabled", true);
                    $('#CheckboxBlData'+i).attr("disabled", true);
                    $("#IdTr"+i+" :input").attr("disabled", true).hide();
                    $('#IdTr'+i).hide();
          }
      });
    }
        $("#button_caf_cancel").click(function(){
          for (i=0; i< rowFilesCount2; i++){
            $('#IdColumnTitlePlan').show();
            $('#IdColumnPlan'+i).show();
            $('#CheckboxPlanData'+i).attr("disabled", false).show();
            $('#IdColumnTitleEjec').show();
            $('#IdColumnEjec'+i).show();
            $('#CheckboxEjecData'+i).attr("disabled", false).show();
            $('#IdColumnTitleBl').show();
            $('#IdColumnBl'+i).show();
            $('#CheckboxBlData'+i).attr("disabled", false).show();
            $('#IdColumnTitleDate').show();
            $('#IdColumnDate'+i).show();
            $('#CheckboxDateData'+i).attr("disabled", false).show();
            $('#IdCheckbox').show();
            $('#IdColumnCheckbox'+i).show();
            $("#CheckboxData"+i).attr("disabled", false).show();
            $("#IdTr"+i+" :input").attr("disabled", false).show();
            document.getElementById("CheckboxPlanTitle").checked = true;
            document.getElementById("CheckboxEjecTitle").checked = true;
            document.getElementById("CheckboxBlTitle").checked = true;
            document.getElementById("CheckboxDateTitle").checked = true;
            $('#IdTr'+i).show();
            document.getElementById("CheckboxData"+i).checked = true;
          }
      });
  });
  function load_Checkbox_Id(element) {
    $("#"+element.id).change(function() {
        if(!$(this).is(":checked")) {
          $(".Th"+element.id).remove();
          $("#"+element.id).remove();
          $('.'+element.id).attr("disabled", true).remove();
        }
    });
  };
window.onload = test22;
  function test22(){
        var Grafica = [];
        var DataProvider = [];
        // Cantidad de columnas
        var rowCount = $('#id_table_caf th').length;
        // Cantidad de filas
        var rowFilesCount = $('#id_table_caf tr').length - 1;
        var Max_Number = 0;
        var Active_Chart = null;
        // For recorre la cantidad de Filas
        for (var x = 1; x <= rowFilesCount; x++) {
          // Variable que contiene cada objeto necesario para la construcción de la Gráfica de avance físico, ej: {date : "2014-01-01", column-1 : "0.10"}
          var data = {};
          // For que crea columnas con base a la cantidad de columnas.
          for (var j = 1; j < rowCount; j++) {
            // Variable que obtiene el valor de los input mediante el id de la tabla
            var lv_input = document.getElementById("id_table_caf").rows[x].cells[j].querySelector('input').value;
            // Condicional que evalúa si el input está vacio.
            if(lv_input == ""){
              // Otorga el valor de null a la variable data en la posición j.
              data["column-"+j] = null;
            }else {
              // Variable que contiene la conversión de String a float del input.
              Decimal_Number = parseFloat(lv_input);
              // Condicional que evalúa si el valor del input es un número
              if (isNaN(lv_input.toString()) == false) {
                // Convierte e valor del input en un decimal con logitud de 4 y almacena el valor en la variable data.
                if (Decimal_Number > Max_Number) {
                  Max_Number = Decimal_Number;
                }
                data["column-"+j] = Decimal_Number.toFixed(4);
              }else{
                // Si el valor del input es una fecha asigna un date y el valor de la fecha en la variable data.
                data["date"] = lv_input;
              }
            }
          }
          // Push añade nuevos elementos al array test2.
          DataProvider.push(data);
        }
        //For que recorre la cantidad de columnas que tiene la tabla de caf, por defecto.
        for (var i = 0; i < rowCount; i++) {
          // Condicional que excluye la primera columna de la tabla caf.
          if(i != 0){
            var Span_Title_Text = document.getElementById("id_table_caf").rows[0].cells[i].querySelector('span').innerText; //Variable que obtiene el texto de los span de los <th> de la tabla de caf.
            var Lower_Span_Title_Text = Span_Title_Text.toLowerCase(); // Variable que contiene el texto de la variable Span_Title_Text en minúscula-
            var Line_Color = null; //Variable que va a contener el color de la línea que se vaya a agregar.
            var Dash_Length = null; //Variable que contiene el espacio en blanco para la líneas punteadas en los estimados a completar.
            var Line_Thickness = null;//Variable que va a almacenar el ancho de cada una de las líneas.
        // Condicional que evalúa el texto de cada span (Título de cada columna) y busca similitudes con las palabras planeado, ejecutado y estimado, para así excluir las fechas como una columna.
        if(Lower_Span_Title_Text.indexOf("planeado") > -1 || Lower_Span_Title_Text.indexOf("ejecutado") > -1 || Lower_Span_Title_Text.indexOf("estimado") > -1){
            if(Lower_Span_Title_Text.indexOf("planeado") > -1){
              Line_Color = "#A6CE39";
              Line_Thickness = 5;
            }
            if (Lower_Span_Title_Text.indexOf("ejecutado") > -1) {
              Line_Color = "#2CACE3";
              Line_Thickness = 5;
            }
            if (Lower_Span_Title_Text.indexOf("estimado") > -1) {
              Line_Color = "#fc9219";
              Dash_Length = 7;
              Line_Thickness = 5;
            }
            if (Lower_Span_Title_Text.indexOf("planeado") > -1 == true) {
              Active_Chart = "AmGraph-"+i;
            }
            // Añade elementos al array Grafica con base a la cantidad de columnas de la tabla id_table_caf, necesario para crear líneas y administra la parte visual, título y id de cada línea de forma individual.
            Grafica.push({
              "id": "AmGraph-"+i, //Id de la gráfica.
              "lineColor": Line_Color, //Color de la línea.
              "lineThickness": Line_Thickness, //Ancho de línea.
              'title': Span_Title_Text, //Título de línea.
              "dashLength": Dash_Length, //Línea punteada.
              "valueField": "column-"+i}); //Columna a la que hace referencía.
          }
        };
      };
    Chart_Caf(Grafica, DataProvider, Max_Number, Active_Chart);
    Import_Caf_Excel(DataProvider);
  };
  $(document).ready(function(){
  $("#button_caf_create").click(function(){
        var rowCount2 = $('#id_table_caf th').length;
        var element = document.createElement("div");
        var elements = [];
        var select = [];
        var option_1 = [];
        var option_2 = [];
        var input_color = [];
        element.className = "row test";
        document.getElementById('Input_Container').appendChild(element);
        // For que recorre la cantidad de columnas que tiene la tabla de caf, por defecto.
        for (var w = 0; w < rowCount2; w++) {
          // Condicional que excluye la primera columna de la tabla caf.
          if(w != 0){
          elements[w] = document.createElement("div");
          elements[w].className = "input-field col s8 m6 l4 xl3";
          elements[w].id = "Dynamic-select-"+w;
          select[w] = document.createElement("select");
          option_1[w] = document.createElement("option");
          option_1[w].value = "line";
          option_1[w].innerHTML = "Línea";
          option_2[w] = document.createElement("option");
          option_2[w].value = "column";
          option_2[w].innerHTML = "Columna";
          element.append(elements[w]);
          elements[w].append(select[w]);
          select[w].append(option_1[w],option_2[w]);
          input_color[w] = document.createElement("input");
          input_color[w].type = "color";
          document.getElementById(elements[w].id).appendChild(input_color[w]);
        }
      }
  });
});
$(document).ready(function(){
  if($(this).scrollTop() == 0){
    $('#return-to-top').hide();
  }
    // ===== Scroll to Top ====
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
          $('#return-to-top').fadeIn(200);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });
  $('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({
          scrollTop : 0                       // Scroll to top of body
      }, 500);
  });
});
