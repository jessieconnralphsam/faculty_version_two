<?php



$query = "SELECT * FROM public.faculty";

$result = pg_query($conn, $query);

if (!$result) {
    echo "Query execution failed.";
    exit;
}

$lectRanks = $profRanks = $astproRanks = $asoproRanks = $instRanks = 0;

while ($row = pg_fetch_assoc($result)) {
    if (strpos($row['rank'], 'PROF') === 0) {
        $profRanks++; 
    }
    if (strpos($row['rank'], 'ASTPRO') === 0) {
        $astproRanks++; 
    }
    if (strpos($row['rank'], 'ASOPRO') === 0) {
        $asoproRanks++; 
    }
    if (strpos($row['rank'], 'INST') === 0) {
        $instRanks++; 
    }
    if (strpos($row['rank'], 'LECT') === 0) {
        $lectRanks++; 
    }
}


?>
