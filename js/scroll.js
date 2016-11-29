$(document).ready(function() {

    $('a[href^="#i"]').click(function(){
        //Сохраняем значение атрибута href в переменной:
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 2000);
        return false;
    });

});
