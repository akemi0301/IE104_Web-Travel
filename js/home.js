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
          $('.place-card-5 .slide-show :first-child').fadeOut()
          .next('img').fadeIn() 
          .end().appendTo('.place-card-5 .slide-show'); 
          }, 3000);
    })
    $(function() {
      $('.place-card-6 .slide-show img:gt(0)').hide();
      setInterval(function(){
        $('.place-card-6 .slide-show :first-child').fadeOut()
        .next('img').fadeIn() 
        .end().appendTo('.place-card-6 .slide-show'); 
        }, 3000);
    })

    $(function() {
      $('.place-card-7 .slide-show img:gt(0)').hide();
      setInterval(function(){
        $('.place-card-7 .slide-show :first-child').fadeOut()
        .next('img').fadeIn() 
        .end().appendTo('.place-card-7 .slide-show'); 
        }, 3000);
    })

    $(function() {
      $('.place-card-8 .slide-show img:gt(0)').hide();
      setInterval(function(){
        $('.place-card-8 .slide-show :first-child').fadeOut()
        .next('img').fadeIn() 
        .end().appendTo('.place-card-8 .slide-show'); 
        }, 3000);
    })

    $(function() {
      $('.place-card-9 .slide-show img:gt(0)').hide();
      setInterval(function(){
        $('.place-card-9 .slide-show :first-child').fadeOut()
        .next('img').fadeIn() 
        .end().appendTo('.place-card-9 .slide-show'); 
        }, 3000);
    })
    
    $(function() {
      $('.place-card-10 .slide-show img:gt(0)').hide();
      setInterval(function(){
        $('.place-card-10 .slide-show :first-child').fadeOut()
        .next('img').fadeIn() 
        .end().appendTo('.place-card-10 .slide-show'); 
        }, 3000);
    })

    $('.card-container').slick({
      isFinite: true,
      slidesToShow: 5,
      slidesToScroll: 5,
      prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fas fa-angle-left' aria-hidden='true'></i></button>",
      nextArrow:"<button type='button' class='slick-next pull-right'><i class='fas fa-angle-right' aria-hidden='true'></i></button>",
      responsive: [
        {
          breakpoint: 1276,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            inFinite: true,
          }
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
      });
});