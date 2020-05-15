function Search(){
  var searchText = document.getElementById('Search_Input').value;
  if(searchText != null){
  var targetTable = document.getElementById('myTable');
  var targetTableColCount;
  //Loop through table rows
  for (var rowIndex = 0; rowIndex < targetTable.rows.length; rowIndex++) {
      var rowData = '';
      //Get column count from header row
      if (rowIndex == 0) {
         targetTableColCount = targetTable.rows.item(rowIndex).cells.length;
         continue; //do not execute further code for header row.
      }
      //Process data rows. (rowIndex >= 1)
      for (var colIndex = 0; colIndex < targetTableColCount; colIndex++) {
          rowData += targetTable.rows.item(rowIndex).cells.item(colIndex).textContent;
      }
      //If search term is not found in row data
      //then hide the row, else show
      if (rowData.indexOf(searchText) == -1)
          {targetTable.rows.item(rowIndex).style.display = 'none';}
      else
          {
            if (searchText != "") {
              targetTable.rows.item(rowIndex).style.display = 'table-row';
              }
              else {
                var Get_Element_Button_Number = document.getElementsByClassName('active')[2].getElementsByClassName("Paginate_Numbers")[0];
                $(Get_Element_Button_Number).click();
              }
            }
          }
        }
      }
  $(document).ready(function(){
    $('#myTable').after('<br><div id="nav" class="paginator center"></div>');
    $('#nav').append('<ul class="pagination" id="myPager"></ul>');
    var rowsShown = 10;
    var rowsTotal = $('#myTable tbody tr').length;
    var numPages = rowsTotal/rowsShown;
    for(i = 0;i < numPages;i++) {
        var pageNum = i + 1;
        $('#myPager').append('<li><a href="#" id="'+pageNum+'" class="Paginate_Numbers" rel="'+i+'">'+pageNum+'</a></li>');
    }
    var LastPage = i-1;
    $('#myTable tbody tr').hide();
    $('#myTable tbody tr').slice(0, rowsShown).show();
    $('#nav li:first').addClass('active');
    $('<li class="first" style="display:none"><a href="#" rel="0" class="Paginate_Numbers"><i class="material-icons">first_page</i></a></li>').insertBefore(".active");
    $('<li class="prev" style="display:none"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_left</i></a></li>').insertBefore(".active");
    $('#myPager').append('<li class="next"><a href="#" class="Paginate_Next_Prev"><i class="material-icons">chevron_right</i></a></li>');
    $('#myPager').append('<li class="last"><a href="#" rel="'+LastPage+'" class="Paginate_Numbers"><i class="material-icons">last_page</i></a></li>');
    Click_Pagination(rowsShown);
    Click_Next_Prev(rowsShown);
});
function Remove_Class(){
  $('#nav li').removeClass('active');
}
function Click_Pagination(rowsShown){
  $('.Paginate_Numbers').bind('click', function(){
      Remove_Class();
      var Class_li = $(this).parent().attr('class');
      if(Class_li == "first"){
        document.getElementById("1").closest('li').classList.add("active");
        Hide_Prev_Next_Button(1);
      }else if(Class_li == "last"){
        document.getElementById(i).closest('li').classList.add("active");
        Hide_Prev_Next_Button(i);
      }else{
        $(this).closest('li').addClass('active');
        var Id_li = $(this).attr('id');
        Hide_Prev_Next_Button(Id_li);
      }
      // $(this).closest('li').removeClass('disabled');
      var currPage = $(this).attr('rel');
      var startItem = currPage * rowsShown;
      var endItem = startItem + rowsShown;
      $('#myTable tbody tr').css('opacity','1').hide().slice(startItem, endItem).
      css('display','table-row').animate({opacity:1}, 300);
  });
}
function Click_Next_Prev(rowsShown){
  $('.Paginate_Next_Prev').bind('click', function(){
      var Get_Element = document.getElementsByClassName("active")[0].getElementsByClassName("Paginate_Numbers")[0];
      var Rel_Attribute = Get_Element.getAttribute('rel');
      var Rel_Id = Get_Element.getAttribute('id');
      var Class_li = $(this).parent().attr('class');
      if (Class_li == "next") {
        var currPage = parseInt(Rel_Attribute) + 1;
        var next_Id = parseInt(Rel_Id) + 1;
        Hide_Prev_Next_Button(next_Id);
      }else{
        var currPage = parseInt(Rel_Attribute) - 1;
        var next_Id = parseInt(Rel_Id) - 1;
        Hide_Prev_Next_Button(next_Id);
      }
      if(next_Id <= i && next_Id > 0){
      Remove_Class();
      document.getElementById(next_Id).closest('li').classList.add("active");
      var startItem = currPage * rowsShown;
      var endItem = startItem + rowsShown;
      $('#myTable tbody tr').css('opacity','1').hide().slice(startItem, endItem).
      css('display','table-row').animate({opacity:1}, 300);
    }
  });
}
function Hide_Prev_Next_Button(next_Id){
  if (next_Id <= 1) {
    $('.prev').hide();
    $('.first').hide();
    $('.next').show();
    $('.last').show();
  } else if (next_Id >= i) {
    $('.next').hide();
    $('.last').hide();
    $('.prev').show();
    $('.first').show();
  }else{
    $('.next').show();
    $('.last').show();
    $('.prev').show();
    $('.first').show();
  }
}
