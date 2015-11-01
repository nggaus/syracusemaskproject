// do collapsing of the top bar

$(document).ready(function(){


  // detect window scrolling
  $(window).scroll(function(e){

    if ( $(this).scrollTop() >= $("div.header.small").height() ) {
      // show smaller header
      // console.log("small");
      $("div.header").css("display", "none");
      $("div.header.small").css("display", "block");
    } else {
      // show bigger header
      // console.log("big");
      $("div.header").css("display", "block");
      $("div.header.small").css("display", "none");
    }

  }); 


});