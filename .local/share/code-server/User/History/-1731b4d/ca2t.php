<?php
/*
 * Script to print the prime factors of a single positive integer
 * sent from a form.
 * BAD STYLE: Does not use templates.
 */
include "includes/defs.php";

# Set $number to the value entered in the form.
$number = $_GET['number'];

// Check if the form is submitted and validate the input
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['number'])) {
    if (empty($number)) {
        $error = "Error: Missing value";
    } elseif (!is_numeric($number)) {
        $error = "Error: Nonnumeric value: $number";
    } elseif ($number < 2 || $number != strval(intval($number))) {
        $error = "Error: Invalid number: $number";
    } else {
        // Compute the factors if the input is valid
        $factors = factors($number);
        $factors = join(" . ", $factors);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Factors</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>  
  <h1>Factorisation</h1>

  <?php
  // Display error message or factorization result
  if (isset($error)) {
      echo "<p class='error'>$error</p>";
  } elseif (isset($factors)) {
      echo "<p>$number = $factors</p>";
  }
  ?>

  <p><a href="index.html">Another?</a></p>
  <hr>
  <p>
    Sources:
    <a href="show.php?file=factorise.php">factorise.php</a>
    <a href="show.php?file=includes/defs.php">includes/defs.php</a>
  </p>
</body>
</html>
