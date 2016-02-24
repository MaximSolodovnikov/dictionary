$(function(){
    $('nav#menu span').click(function(){
        $('nav#menu span').children('a').removeClass('active');
        $(this).children('a').addClass('active');
    }); 
});

