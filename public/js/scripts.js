$(document).ready(function(){

    // $('.dropdown-trigger').dropdown(); 
   
    $('.has-dropdown .open-dropdown').on('click', function(e){
        $(this).closest('li').find('.sub-menu').toggleClass('open');
        e.preventDefault();
    });

    
});