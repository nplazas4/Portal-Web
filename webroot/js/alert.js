var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
$(document).ready(function(){
  var eps_lvl1_titles = "";
  var csrfToken = $('[name="_csrfToken"]').val();
  var xhr2 = $.ajax({
    headers:{
      'X-CSRF-Token':csrfToken
    },
    method: "GET",
    url: "/Portal-Web/navbar/nav-portal-projects",
    cache: true,
    beforeSend: function(xhr) {
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    },
    success: function(response){
      $.each(response, function() {
        if (this.parent_eps_id == 23307) {
            eps_lvl1_titles = btoa(unescape(encodeURIComponent($('#h3-dist').text())));
            selected_eps = btoa(unescape(encodeURIComponent(this.name)));
            $('.ul-dist').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(this.eps_id)+'/'+selected_eps+'/'+eps_lvl1_titles+'/'+this.parent_eps_id+'">'+this.name+'</a></li>');
        } else if (this.parent_eps_id == 23306) {
            eps_lvl1_titles = btoa(unescape(encodeURIComponent($('#h3-trans').text())));
            selected_eps = btoa(unescape(encodeURIComponent(this.name)));
            $('.ul-trans').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(this.eps_id)+'/'+selected_eps+'/'+eps_lvl1_titles+'/'+btoa(this.parent_eps_id)+'">'+this.name+'</a></li>');
        } else if (this.parent_eps_id == 23308) {
            eps_lvl1_titles = btoa(unescape(encodeURIComponent($('#h3-gen').text())));
            selected_eps = btoa(unescape(encodeURIComponent(this.name)));
            $('.ul-gen').append('<li class="option-navbar"><a href="/Portal-Web/projects/company/'+btoa(this.eps_id)+'/'+selected_eps+'/'+eps_lvl1_titles+'/'+this.parent_eps_id+'">'+this.name+'</a></li>');
        }
      });
    }
  });
});
