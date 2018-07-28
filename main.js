
// init side nav 
$(document).ready(function(){
    $('.sidenav').sidenav();
  });
//Preloader
$(window).on("load", function() {
function hidePreloader() {
var preload = $('.spinner-wrapper');
preload.fadeOut(875);
}
hidePreloader();
});

function log_out() {
	//SESSION DESTROY
	window.location.replace("login.php");
}

$(function(){
    $('#bootn').click(function(){
        $("table").toggle();
    })
})