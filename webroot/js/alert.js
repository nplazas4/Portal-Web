var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
// $(document).ready(function(){
    var eps_lvl1_titles = "";
    var csrfToken = $('[name="_csrfToken"]').val();
    var xhr2;
    if(xhr2 && xhr2.readyState != 4){
        xhr2.abort();
    }
    xhr2 = $.ajax({
    headers:{
      'X-CSRF-Token':csrfToken
    },
    method: "GET",
    dataType: "json",
    url: "/Portal-Web/navbar/nav-portal-projects",
    cache: true,
    beforeSend: function(xhr) {
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    },
    success: function(response){
      $.each(response, function() {
        if (this.eps_id == 23307) {
            $('.ul-dist').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))+'">'+this.child_name+'</a></li>');
        } else if (this.eps_id == 23306) {
            $('.ul-trans').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))+'">'+this.child_name+'</a></li>');
        } else if (this.eps_id == 23308) {
            $('.ul-gen').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this))))+'">'+this.child_name+'</a></li>');
        }
      });
    }
  });
// });
