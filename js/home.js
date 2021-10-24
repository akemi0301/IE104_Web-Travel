$(document).ready(function(){
    
    $(function() {
        $('.place-card-1 .slide-show img:gt(0)').hide();
        setInterval(function(){
          $('.place-card-1 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.place-card-1 .slide-show'); 
          }, 3000);
    })

    $(function() {
        $('.place-card-2 .slide-show img:gt(0)').hide();
        setInterval(function(){
          $('.place-card-2 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.place-card-2 .slide-show'); 
          }, 3000);
    })

    $(function() {
        $('.place-card-3 .slide-show img:gt(0)').hide();
        setInterval(function(){
          $('.place-card-3 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.place-card-3 .slide-show'); 
          }, 3000);
    })

    $(function() {
        $('.place-card-4 .slide-show img:gt(0)').hide();
        setInterval(function(){
          $('.place-card-4 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.place-card-4 .slide-show'); 
          }, 3000);
    })

    $(function() {
        $('.place-card-5 .slide-show img:gt(0)').hide();
        setInterval(function(){
          $('.card-5 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.card-5 .slide-show'); 
          }, 3000);
    })

    $(document).ready(function(){
      $('.slider').bxSlider();
    });

});