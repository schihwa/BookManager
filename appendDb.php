<?php
require 'connect.php';

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Retrieve form data 
  $bookId = $_POST['bookId'];
  $title = $_POST['title'];
  $author = $_POST['author'];
  $publisher = $_POST['publisher'];
  $noPages = (int)$_POST['noPages'];

  // sanitate form data
  $bookId = $conn->real_escape_string($bookId);
  $title = $conn->real_escape_string($title);
  $author = $conn->real_escape_string($author);
  $publisher = $conn->real_escape_string($publisher);
  $noPages = $conn->real_escape_string($noPages);


  // Perform validation
  $errors = array();
  if (empty($bookId) || empty($title) || empty($author) || empty($publisher) || empty($noPages)) {
    $errors[] = "all data must be present";
  }
  
    // required to target correct book in db
   // validation for book Id
  if (!ctype_digit($bookId) && !empty($bookID)) {
    $errors[] = "Error: bookId must contain only numbers";
  } 
  
  if ($bookId <= 0 && !empty($bookID)) {
    $errors[] = "Error: bookId must be a positive integer";
  } 
  
  if ($bookId > 4294967295 && !empty($bookID)) {
    $errors[] = "Error: bookId exceeds the maximum allowed value (4294967295)";
  }
  
  // validation for title 
  if (strlen($title) > 100) {
    $errors[] = "Error: titlemust be 100 characters or less";
  }

  // validation for author 
  if (strlen($author) > 50) {
    $errors[] = "Error: author must be 50 characters or less";
  }

  // validation for publisher
  if (strlen($publisher) > 50) {
    $errors[] = "Error: publisher must be 50 characters or less";
  }

  // validation for pages
  if (!ctype_digit($noPages) && !empty($noPages)) {
    $errors[] = "Error: number of Pages must contain only numbers";
  } elseif ($noPages <= 0 && !empty($noPages)) {
    $errors[] = "Error: number of Pages must be a positive integer";
  } elseif ($noPages > 4294967295 && !empty($noPages)) {
    $errors[] = "Error: number of Pages exceeds the maximum allowed value";
  }

  // if a row already has the same bookid return an error
  $sql = "SELECT * FROM Books WHERE bookId='$bookId'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $errors[] = "Error: Book ID already exists in database. Returning";
  }

  if (!empty($errors)) {
    header("Refresh: 5; URL='views/editBook.php'");

    // Display the errors
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
    echo "returning in 5 seconds";
    exit();
  }





  // if there are no errors continue
  if (empty($errors)) {

	    $sql = "INSERT INTO Books (bookId, title, author, noPages, publisher) VALUES ('$bookId', '$title', '$author', '$noPages', '$publisher')";
	
    if (!empty($sql)) {
      if ($conn->query($sql) === TRUE) {
        header("Refresh: 5; URL='views/home.php'");
        echo "Book successfully added! Going to the home page in 5 seconds";
      } else {
        header("Refresh: 5; URL='views/editBook.php'");
        echo "Error adding book";
      }
    }
  }
}



?>
