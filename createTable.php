<?php
// Check if table exists
$table_name = "Books";

$result = $conn->query("SHOW TABLES LIKE '$table_name'");

if ($result->num_rows == 0) {
  $sql = "CREATE TABLE Books (
        bookId INT UNSIGNED NOT NULL PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        author VARCHAR(50) NOT NULL,
        noPages INT UNSIGNED NOT NULL,
        publisher VARCHAR(50) NOT NULL
    )";

  $conn->query($sql);
}

?>