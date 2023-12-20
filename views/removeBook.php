<!DOCTYPE html>
<html>

<head>
  <title>My Book Form - Remove Book</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Book Form</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Book List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addBook.php">Add Book</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="removeBook.php">Remove book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editBook.php">Edit book</a>
        </li>
      </ul>
    </div>
  </nav>

  <?php include '../fetchBooks.php'; ?>

  <div class="container mt-4">
    <h1>Remove Book</h1>
    <form action="../removeDb.php" method="post">
      <div class="form-group">
        <label for="bookId">Select a book to remove:</label>
        <select class="form-control" id="bookId" name="bookId" required>
        <option value="">-- Select a book --</option>
        <?php
        // include the fetch.php file
        require '../fetchBooks.php';

        // loop through the books array and create an option for each book
        foreach ($books as $book) {
          echo '<option value="' . $book['bookId'] . '">' . $book['bookId'] . ' | ' . $book['author'] . ' | ' . $book['title'] .'</option>';
        }
        ?>
      </select>
      </div>
      <button type="submit" class="btn btn-danger">Remove Book</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
