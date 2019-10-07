
$(function () {

window.addEventListener('scroll', ()=> {
    if($(window).width() < 910) {
        let scrolled = window.pageYOffset || document.scrollTop;
        if (scrolled > 150) {
            
        } else {
           
        }
   }
});

$(window).click((e) => {
    if($(e.target).hasClass('nav') || $(e.target).parents().hasClass('nav')) {
        
    } else {
        $('.nav-bar').removeClass('active');
        $('.nav-cont').removeClass('down');

    }
});

$('.about__bar_about').click((e) => {
    $('.active').removeClass('active');
    $('#about').addClass('active');
});
$('.about__bar_projects').click((e) => {
    $('.active').removeClass('active');
    $('#gallery').addClass('active');
});
$('.about__bar_contacts').click((e) => {
    $('.active').removeClass('active');
    $('#contacts').addClass('active');
});


});