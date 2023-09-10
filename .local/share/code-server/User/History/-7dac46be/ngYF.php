<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $query from form. */
function search($query) {
    global $pms; 

    $results = array();
    
    if (!empty($query)) {
        $query = strtolower($query);
        foreach ($pms as $pm) {
            if (stripos(strtolower($pm['name']), $query) !== false ||
                stripos(strtolower($pm['state']), $query) !== false ||
                stripos(strtolower($pm['from']), $query) !== false ||
                stripos(strtolower($pm['to']), $query) !== false) {
                $results[] = $pm;
            }
        }
    }

    return $results;
}
?>
