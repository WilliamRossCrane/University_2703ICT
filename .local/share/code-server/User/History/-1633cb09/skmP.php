<?php
/*
 * Simple example to illustrate associative arrays and queries with input validation.
 * DANGEROUS: Does not fully sanitise user input.
 * BAD STYLE: Does not use templates.  Interleaves PHP and HTML.
 */
include "includes/defs.php";

// Define variables to store form input and error message
$name = "";
$year = "";
$state = "";
$error = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get form data
    $name = test_input($_GET['name']);
    $year = test_input($_GET['year']);
    $state = test_input($_GET['state']);

    // Validate input and handle errors
    if (empty($name) && empty($year) && empty($state)) {
        $error = "At least one field must contain value.";
    } elseif (!empty($year) && !is_numeric($year)) {
        $error = "Year must be a number.";
    }
}

// Get array of pms that match query in form data
$pms = search($name, $year, $state);

// Function to sanitize and validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Display results -->
<!DOCTYPE html>
<!-- Results page of associative array search example. -->
<html>
<head>
    <title>Associative array search results page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
<h2>Australian Prime Ministers</h2>
<h3>Results</h3>

<!-- Display error message if present -->
<?php if (!empty($error)) { ?>
    <p class="alert"><?php echo $error; ?></p>
<?php } ?>

<!-- Display search form -->
<form method="get" action="results.php">
    <table>
        <tr><td>Name: </td><td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></td></tr>
        <tr><td>Year: </td><td><input type="text" name="year" value="<?php echo htmlspecialchars($year); ?>"></td></tr>
        <tr><td>State: </td><td><input type="text" name="state" value="<?php echo htmlspecialchars($state); ?>"></td></tr>
        <tr><td colspan=2><input type="submit" value="Search">
                <input type="reset" value="Reset"></td></tr>
    </table>
</form>

<!-- Display search results if there are any -->
<?php if (count($pms) > 0) { ?>
    <table class="bordered">
        <thead>
        <tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
        </thead>
        <tbody>
        <?php foreach($pms as $pm) { ?>
            <tr>
                <td><?php echo htmlspecialchars($pm['index']); ?></td>
                <td><?php echo htmlspecialchars($pm['name']); ?></td>
                <td><?php echo htmlspecialchars($pm['from']); ?></td>
                <td><?php echo htmlspecialchars($pm['to']); ?></td>
                <td><?php echo htmlspecialchars($pm['duration']); ?></td>
                <td><?php echo htmlspecialchars($pm['party']); ?></td>
                <td><?php echo htmlspecialchars($pm['state']); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>

<hr>
<p>
    Sources:
    <a href="show.php?file=results.php">results.php</a>
    <a href="show.php?file=includes/defs.php">includes/defs.php</a>
    <a href="show.php?file=includes/pms.php">includes/pms.php</a>
</p>

</body>
</html>
