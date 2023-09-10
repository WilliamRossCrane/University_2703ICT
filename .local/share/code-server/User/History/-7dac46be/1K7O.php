<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Task 4: Search sample data for $name or $year or $state from form. */
function search($name, $year, $state) {
    global $pms; 

    $results = array();
    
    // Task 5: Check if the search query is not empty
    if (!empty($name) || !empty($year) || !empty($state)) {
        // Convert the query to lowercase for case-insensitive comparison
        $name = strtolower($name);
        $state = strtolower($state);
        
        // Loop through each Prime Minister to check for a match with the query
        foreach ($pms as $pm) {
            // Task 5: Implement search logic for name, state, and year
            if ((empty($name) || stripos(strtolower($pm['name']), $name) !== false) &&
                (empty($state) || stripos(strtolower($pm['state']), $state) !== false) &&
                (empty($year) || (is_numeric($year) && (strpos($pm['from'], $year) !== false || strpos($pm['to'], $year) !== false)))) {
                // If a match is found, add the Prime Minister to the results array
                $results[] = $pm;
            }
        }
    }

    return $results;
}
?>
