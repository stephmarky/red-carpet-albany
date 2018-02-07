<?php
	// Stores the name of the class for hidden error messages
	$HIDDEN_ERROR_CLASS = "hiddenError";

  // Get information about the form
  $submit = $_REQUEST["submit"];
  // when the user submits a form
  if (isset($submit)) {
    // validate form here
		$name = $_REQUEST["name"];
		// if the first name field is not empty:
		if ( !empty($name) ) {
			$nameValid = true;
		} else {
			$nameValid = false;
		}

		// handle email
		$email = $_REQUEST["email"];
		if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
		  $emailValid = true;
		} else {
		  $emailValid = false;
		}

		$inquiry = $_REQUEST["inquiry"];
		// if the description field is not empty:
		if ( !empty($inquiry) ) {
			$inquiryValid = true;
		} else {
			$inquiryValid = false;
		}


		$formValid = $nameValid && $emailValid && $inquiryValid;

		// if valid, allow submission
		if($formValid){
			session_start();
			$_SESSION['name'] = $name;
    	$_SESSION['email'] = $email;
			$_SESSION['inquiry'] = $inquiry;

			// redirect to submitpage.php
			header("Location: submit.php");

			return;
		}


	  } else {
			error_log("no form submitted");
			// no form submitted
		  $nameValid = true;

		  $emailValid = true;
			$inquiryValid = true;

		}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/menu.css" media="all"/>

  <title>Contact | Red Carpet Inn Albany</title>
</head>

<body>
  <?php include("includes/nav.php"); ?>

<div class="main-content-hidden">
  <div>
    <img id="contact_banner" alt="family" src="images/desk.jpg"/>
  </div>

  <form method="post" action="contact.php" id="contact_form" novalidate>
    <h1> Contact Us </h1>
      Name<span id=contact_required> * </span>
      <input type="text" name="name" id="name" placeholder="First Last" required>
			<span class="error <?php if ($nameValid) { echo("$HIDDEN_ERROR_CLASS"); } ?>" id="nameError">
            First name is required.
      </span>
      <br/>
      <br/>
      Email<span id=contact_required> * </span>
      <input type="email" name="email" id="email" placeholder="user@example.com" required>
			<span class="error <?php if ($emailValid) { echo("$HIDDEN_ERROR_CLASS"); } ?>" id="emailError">
            Valid email is required.
      </span>
      <br/>
      <br/>
      Inquiry<span id=contact_required> * </span>
			<span class="error <?php if ($inquiryValid) { echo("$HIDDEN_ERROR_CLASS"); } ?>" id="inquiryError">
            Inquiry is required.
      </span>
      <br/>
      <textarea name="inquiry" id="inquiry" rows="15" cols="70" required></textarea>
      <br/>
      <!-- <input id="contact_submit" type="submit" value="Submit"> -->
      <!-- <a href="submit.php">
        <p id="submit-button">Submit</p>
      </a> -->
			<button type="submit" name="submit" id="submit-button">Submit</button>
  </form>

  <div id=contact_information>
    <h4>Contact Information</h4>
    <span id=contact_headers>
      <p>
        Phone <br/>
        Toll Free <br/>
        Fax <br/>
        Address <br/><br/>
        Facebook <br/>
      </p>
    </span>
    <span id=contact_content>
      <p>
        (518) 462 5562 <br/>
        (800) 251 1962 <br/>
        (518) 462 2243 <br/>
        1579 Central Ave <br/>
        Albany, NY 12205 <br/>
        @RedCarpetAlbany
      </p>
    </span>
  </div>

  <?php include("includes/footer.php"); ?>

	<!--  javascript validation -->
  <script src="scripts/clientValidation.js" type="text/javascript"></script>

</div>

</body>
</html>
