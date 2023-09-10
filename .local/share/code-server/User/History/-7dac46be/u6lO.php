<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $query from form. */
function search($query) {
    global $pms; 

    $results = array();
    
    // Check if the search query is not empty
    if (!empty($query)) {
        // Convert the query to lowercase for case-insensitive comparison
        $query = strtolower($query);
        
        // Loop through each Prime Minister to check for a match with the query
        foreach ($pms as $pm) {
            if (stripos(strtolower($pm['name']), $query) !== false ||
                stripos(strtolower($pm['state']), $query) !== false ||
                stripos(strtolower($pm['from']), $query) !== false ||
                stripos(strtolower($pm['to']), $query) !== false) {
                // If a match is found, add the Prime Minister to the results array
                $results[] = $pm;
            }
        }
    }

    return $results;
}
?>
