jQuery(document).ready(function(){
    jQuery(document).on('click' , '.news li' , function() {
        jQuery(".popup").show();
        var bg = jQuery(this).css('background-image');
        jQuery(".popup").css("background-image",bg);
    });
    jQuery(document).on('click' , '.popup' , function() {
        jQuery(".popup").hide();
    });

    jQuery(document).on('click' , '.closeBtn' , function() {
        jQuery(".popup").hide();
    });

});