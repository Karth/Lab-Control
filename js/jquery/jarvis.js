/* Java Script file */

$(document).ready( function(){
   $("#other_unit").fadeOut(10);
   
   $("#other").change(function(){
   $("#other_unit").fadeIn(500);	
   });

   $("#kg").change(function(){
   $("#other_unit").fadeOut(500);	
   });
   
   $("#box").change(function(){
   $("#other_unit").fadeOut(500);	
   });

   $("#liter").change(function(){
   $("#other_unit").fadeOut(500);	
   });
   
   $("#package").change(function(){
   $("#other_unit").fadeOut(500);	
   });

});

function new_pass() {
	window.location=('new_pass.php');
}

