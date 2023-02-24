<?php

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=mydatabase';
$username = 'myusername';
$password = 'mypassword';
$dbh = new PDO($dsn, $username, $password);

// Define the query
$query = 'SELECT name, age, gender FROM Friends';

// Execute the query and fetch all the results
$stmt = $dbh->query($query);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Convert the results to a list of dictionaries
$friends = [];
foreach ($results as $row) {
    $friend = ['name' => $row['name'], 'age' => $row['age'], 'gender' => $row['gender']];
    $friends[] = $friend;
}

// Convert the list of dictionaries to a JSON string
$json_friends = json_encode($friends);

// Print the JSON output
echo $json_friends;

?>
