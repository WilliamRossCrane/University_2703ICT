<?php
/* 
 * factors($n) returns an array of prime factors of valid integer $n. 
 * Precondition: 2 <= n <= MAHP_MAX_INT = 2^31-1.
 * Note that it is executed for its _value_ not for its _effect_.
 */
function factors($n) {
    $factors = array(); # initialise $factors to be an empty array
    $cand = 2;
    while ($n > 1 && $cand * $cand <= $n) {
        while ($n > 1 && $n % $cand == 0) {
            $factors[] = $cand; # append $cand to the array $factors
            $n = $n / $cand;
        }
        $cand++;
    }
    if ($n > 1) {
        $factors[] = $n; # append $n to the array $factors
    }
    return $factors;
}

# Set $number to the value entered in the form.
$number = $_GET['number'];

# Task 3: Error handling and factorisation calculation
if (empty($number)) {
    $error = "Error: Missing value";
} else if (!is_numeric($number)) {
    $error = "Error: Nonnumeric value: $number";
} else if ($number < 2 || $number != strval(intval($number))) {
    $error = "Error: Invalid number: $number";
} else {
    # Set $factors to the array of factors of $number.
    $factors = factors($number);
    # Set $factors to a single dot-separated string of numbers in the array.
    $factors = join(" . ", $factors);
    $error = ''; // Reset the error message if there are no errors
}

# Task 7: Append factorization result to history.txt
if (empty($error)) {
    $history = fopen("history.txt", "a");
    fwrite($history, "$number = $factors\n");
    fclose($history);
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

    <!-- Display factorization result or error message -->
    <?php if (empty($error)) : ?>
      <p><?= "$number = $factors"; ?></p>
    <?php else : ?>
      <p><?= $error; ?></p>
    <?php endif; ?>

    <!-- Task 3: New factorisation form -->
    <form method="get" action="factorise.php">
      <p>Number to factorise: <input type="text" name="number" value="<?= $number ?>">
      <!-- The value attribute is set to the current $number -->
      <p><input type="submit" value="Factorise it!">
    </form>

    <!-- Task 7: Display the list of previous factorizations -->
    <h2>History</h2>
    <pre><?php echo file_get_contents("history.txt"); ?></pre>
  </body>
</html>
