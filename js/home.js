$(document).ready(function(){
    $(".slide-show img:gt(0)").hide();
    
    setInterval(function(){
    var current = $('.slide-show img:visible');
    var next = current.next().length ? current.next() : $('.slide-show img:eq(0)');
    current.fadeOut("3000");
    next.fadeIn("3000");
    }, 3000);
});