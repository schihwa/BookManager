<?php
// include the connect.php file
require 'connect.php';

// retrieve the id, title, and author from the database table
$query = "SELECT bookId, title, author, noPages, publisher FROM Books";
$result = $conn->query($query);

// check for query errors
if (!$result) {
    die("Query failed: " . $conn->error);
}

// store the results in the $books array
$books = array();

while ($row = $result->fetch_assoc()) {
    $books[] = $row;
}

?>