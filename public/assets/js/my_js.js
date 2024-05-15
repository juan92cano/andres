// Cierra el alert en 8 segundos ( 8 000 )
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 8000);