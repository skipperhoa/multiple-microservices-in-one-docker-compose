<?php

// Set headers to allow CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Connect to MySQL database
$conn = mysqli_connect('mysql_service1', 'hoacode_service1', '12345678', 'db_service1');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve data from the database
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    // Initialize an empty array to store the fetched data
    $posts = array();

    // Fetch associative array from the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Add each row to the $posts array
        $posts[] = $row;
    }

    // Free result set
    mysqli_free_result($result);

    // Close MySQL connection
    mysqli_close($conn);

    // Convert data to JSON format and output
    echo  json_encode($posts);
} else {
    // If no rows are returned, return an empty JSON array
    echo json_encode(array());
}
