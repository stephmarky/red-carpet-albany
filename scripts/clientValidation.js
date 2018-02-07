// Make it easy to test PHP.
// Set this variable to true, if you want to test PHP form validation without
// client-side jQuery validation too.
var TEST_PHP_FORM = false;

// On load
$(document).ready(function () {

  if (!TEST_PHP_FORM) {
    // whenever the user tries to submit the form
   $("#contact_form").on("submit", function() {
    // assume the form is valid, unless we find an invalid field
      formValid = true;
      // check if the first name is empty
      nameIsValid = $("#name").prop("validity").valid;
      // if the first name field is valid (has text in it),
      if(nameIsValid) {
        // hide the error
        $("#nameError").hide();
      } else { // (otherwise, if the first name field is empty)
        // show the error
        $("#nameError").show();
        // and don’t let the user submit the form
        formValid = false;
      }

      emailIsValid = $("#email").prop("validity").valid;
      if(emailIsValid) {
        // hide the error
        $("#emailError").hide();
      } else { // (otherwise, if the first name field is empty)
        // show the error
        $("#emailError").show();
        // and don’t let the user submit the form
        formValid = false;
      }

      inquiryIsValid = $("#inquiry").prop("validity").valid;
      if(inquiryIsValid) {
        // hide the error
        $("#inquiryError").hide();
      } else { // (otherwise, if the first name field is empty)
        // show the error
        $("#inquiryError").show();
        // and don’t let the user submit the form
        formValid = false;
      }


  // if the form is valid, let the user submit it; otherwise, block submission
  return formValid;


 });

}

});
