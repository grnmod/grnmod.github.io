$(document).ready(function() {

    $('a[href^="#call"]').click(function(){
        //Сохраняем значение атрибута href в переменной:
        var target = $(this).attr('href');
        $('html, body').animate({scrollTop: $(target).offset().top}, 2500);
        return false;
    });

});
