    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
      }
    }
<<<<<<< HEAD
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
  }
})
.fail(function(response, errorThrown){
  console.log('php controller status code: '+response.status+", "+errorThrown);
})
.done(function(response){
  $.each(response, function() {
    if (this.eps_id == 23305) {
      // Append enlaces navbar eps
      $('.a-corp').attr('href', '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
    }
    else if (this.eps_id == 23307) {
      // Append enlaces navbar eps
      $('.ul-dist').append([
        $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
          $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
        ])
      ]);
    } else if (this.eps_id == 23306) {
      $('.ul-trans').append([
        $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
          $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
        ])
      ]);
    } else if (this.eps_id == 23308) {
      $('.ul-gen').append([
        $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
          $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
        ])
      ]);
    }
  });
});
=======

    // NABVAR PORTAL PROJECTS
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
    }
  })
  .fail(function(response, errorThrown){
    console.log('php controller status code: '+response.status+", "+errorThrown);
  })
  .done(function(response){
    $.each(response, function() {
      if (this.eps_id == 23305) {
        // Append enlaces navbar eps
        $('.a-corp').attr('href', '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))));
      }
      else if (this.eps_id == 23307) {
        // Append enlaces navbar eps
        $('.ul-dist').append([
          $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
            $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
          ])
        ]);
      } else if (this.eps_id == 23306) {
        $('.ul-trans').append([
          $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
            $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
          ])
        ]);
      } else if (this.eps_id == 23308) {
        $('.ul-gen').append([
          $('<li>',{class : 'option-navbar', style : 'display : flex !important'}).append([
            $('<a>',{href : '/Portal-Web/projects/company/'+btoa(unescape(encodeURIComponent(JSON.stringify(this)))), text : this.child_name})
          ])
        ]);
      }
    });
  });
>>>>>>> 6ef522a45028eb85a251d70cde1c99a26315901a
// });
