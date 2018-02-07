<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$inquiry = $_SESSION['inquiry'];


// unset email to protect user
unset($_SESSION['email']);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/menu.css" media="all"/>

  <title> Red Carpet Inn Albany </title>
</head>

<body>
  <?php include("includes/nav.php"); ?>

  <div class="main-content-hidden">
    <p id=submit_message>
      Thanks, <?php echo( htmlspecialchars($name) ); ?>! Your form has been submitted. </p>

      <?php include("includes/footer.php"); ?>

  </div>
</body>
</html>
