/* Java Script file */

$(document).ready(function() {
   /* Code for fadeIn and fadeOut the (other unit input) */
   $("#other_unit").fadeOut(1);
   $("#other").change(function() {
      $("#other_unit").fadeIn(1000);
   });
   $("#kg").change(function() {
      $("#other_unit").fadeOut(1000);
   });
   $("#box").change(function() {
      $("#other_unit").fadeOut(1000);
   });
   $("#liter").change(function() {
      $("#other_unit").fadeOut(1000);
   });
   $("#package").change(function() {
      $("#other_unit").fadeOut(1000);
   });
   /* Code for fadeIn and fadeOut the (more key-words input)  */
   $("#more").fadeOut(1);
   $("#Mais").change(function() {
      $("#more").fadeIn(1000);
   });
   $("#Transistor").change(function() {
      $("#more").fadeOut(1000);
   });
   $("#Resistores").change(function() {
      $("#more").fadeOut(1000);
   });
   $("#Circuito_integrados").change(function() {
      $("#more").fadeOut(1000);
   });
   $("#Ferramentas").change(function() {
      $("#more").fadeOut(1000);
   });

});

function new_pass() {
   window.location = ('new_pass.php');
}