<?php
$jsonData = file_get_contents('dataset.json');
$data = json_decode($jsonData, true);


$results = [];

foreach ($data as $person) {
    $age = $person['age'];
    $company = $person['company'];
    
   
    if ($age < 30 && $company === "Jollibee Foods Corp") {
        $results[] = $person;
    }
}


echo "People under 30 working at Jollibee Foods Corp:\n";

if (count($results) > 0) {
    foreach ($results as $person) {
        echo "Name: " . $person['first_name'] . " " . $person['middle_name'] . " " . $person['last_name'] . "\n";
        echo "Company: " . $person['company'] . "\n";
        echo "Age: " . $person['age'] . "\n";
        echo "-------------------------\n";
        
    }
    echo "Total count: " . count($results) . "\n";
} else {
    echo "No results found.\n";
}
?>
