$(window).scroll(function(){
    // El botón se mostrara cuando el usuario aya bajado 501px a más.
    if($(this).scrollTop() > 500){
      $(".fa-solid").show(); //fadeIn
    }else{
      $(".fa-solid").fadeOut(); //fadeOut
    }
  });
  $(".fa-solid i").on('click', function (e) {
    e.preventDefault();
      $("body,html").animate({
      scrollTop: 0
    },700);
    return false;
  });