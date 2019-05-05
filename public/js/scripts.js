$(document).ready(function(){

    // $('.dropdown-trigger').dropdown(); 
   
    $('.has-dropdown .open-dropdown').on('click', function(e){
        $(this).closest('li').find('.sub-menu').css('max-height', '100%');
        e.preventDefault();
    });

    
});