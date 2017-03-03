$(document).ready(function() {
  $('select').material_select();
});

$('.datepicker').pickadate({
  selectMonths: true,
  selectYears: 15,
  format: 'yyyy-mm-dd'
});

$('.timepicker').pickatime({
  default: 'now',
  twelvehour: false, // change to 12 hour AM/PM clock from 24 hour
  donetext: 'OK',
  autoclose: false,
  vibrate: true // vibrate the device when dragging clock hand
});

$(document).ready(function(){
  $('.materialboxed').materialbox();
});

$(document).ready(function(){
	 $('.tooltipped').tooltip({delay: 50});
});

$(document).ready(function() {
  $('.modal-trigger').leanModal();
});

$(document).ready(function() {
    $('input#room, input#roomtype').characterCounter();
});

$(document).ready(function(){
  $(".dropdown-button").dropdown({
     hover: true,
     belowOrigin: true, // Displays dropdown below the button
     alignment: 'right' // Displays dropdown with edge aligned to the left of button
  });
});

$(document).ready(function(){
   $('.button-collapse').sideNav();
 });
//Custom

var status = $('#status').val();

if (status == 'Available') {
  $("#status").addClass('blue');
}
