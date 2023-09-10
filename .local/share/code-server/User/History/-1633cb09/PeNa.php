<?php
/*
 * Step 1: Simple example to illustrate associative arrays, queries, and input validation.
 * DANGEROUS: Does not sanitize user input.
 * BAD STYLE: Does not use templates.  Interleaves PHP and HTML.
 */
include "includes/defs.php";

/* Step 2: Get form data. */
$query = $_GET['query'];

// Step 3: Initialize error message
$error = "";

// Step 4: Validate the input
if (empty($query)) {
    // If the query is empty, display an error message
    $error = "At least one field must contain a value.";
} elseif (!is_numeric($query)) {
    // If the query is not a number, display an error message
    $error = "Year must be a number.";
}

/* Step 5: Get array of PMs that match the query in form data. */
if (empty($error)) {
    // If there are no validation errors, perform the search
    $pms = search($query);
}
?>

<!-- Step 6: Display results or error message -->
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

<?php 
if (!empty($error)) {
    // Step 7: Display the error message if there's an error
    echo "<p class='alert'>$error</p>";
} else {
    if (count($pms) == 0) {
        // Step 8: Display "No results found" message
        echo "<p>No results found.</p>";
    } else {
        // Step 9: Display the search results in a table
?>
        <table class="bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Duration</th>
                    <th>Party</th>
                    <th>State</th>
                </tr>
            </thead>
            <tbody>
<?php
        foreach ($pms as $pm) {
            echo "<tr>";
            echo "<td>{$pm['index']}</td>";
            echo "<td>{$pm['name']}</td>";
            echo "<td>{$pm['from']}</td>";
            echo "<td>{$pm['to']}</td>";
            echo "<td>{$pm['duration']}</td>";
           
