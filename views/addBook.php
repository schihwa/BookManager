<!DOCTYPE html>
<html>

<head>
  <title>My Book Form - Add Book</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="addBook.php">Add Book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="removeBook.php">Remove book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="editBook.php">Edit book</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Add Book</h1>
    <form action="../appendDb.php" method="post">
      
      <div class="form-group">
        <label for="bookId">book ID:</label>
        <input type="number" class="form-control" id="bookId" name="bookId" required>
      </div>
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" id="author" name="author" required>
      </div>

      <div class="form-group">
        <label for="noPages">number of pages:</label>
        <input type="number" class="form-control" id="noPages" name="noPages" required>
      </div>

      <div class="form-group">
        <label for="publisher">Publisher:</label>
        <input type="text" class="form-control" id="publisher" name="publisher" required>
      </div>

      <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
