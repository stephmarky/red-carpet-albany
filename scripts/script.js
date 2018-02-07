$(document).ready(function(){
  $(".main-content-hidden").delay(100).fadeIn(900).removeClass('hidden');

  $("#dropdown-container").hover(
    function () {
     $('#dropdown-content').slideDown('slow');
    },
    function () {
       $('#dropdown-content').slideUp('slow');
    }
  );
});
