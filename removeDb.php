<?php
require 'connect.php';

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data
  $bookId = $_POST['bookId'];

  // Perform validation
  $errors = array();
  if (empty($bookId)) {
    $errors[] = "Please enter a book ID.";
  }

  if (!ctype_digit($bookId)) {
    $errors[] = "Error: bookId must contain only numbers";
  }

  if (!empty($errors)) {
    header("Refresh: 5; URL='views/addBook.php'");

    // Display the errors
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    echo "returning in 5 seconds";
    exit();
  }

  if (!$errors) {
    // Get the book ID to remove from the form data
    $bookId = $_POST['bookId'];

    // Remove the book from the database
    $sql = "DELETE FROM Books WHERE bookId='$bookId'";

    if ($conn->query($sql) === TRUE) {

      header("Refresh: 5; URL='views/home.php'");

      echo "book successfully removed! Going to home page in 5 seconds";

      exit();
    } else {
      header("Refresh: 5; URL='views/removeBook.php'");

      echo "Error removing book";
    }
  }
}
?>