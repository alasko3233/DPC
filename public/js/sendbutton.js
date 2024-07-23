$(document).ready(function(){
    var slider = $('div[data-send]');
    slider.hide();

    $('#id').on('change', function(){
        if( $(this).val() != ""){
            slider.show();
        }else{
             slider.slideToggle(600,'linear');
        }
    });
});