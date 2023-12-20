

<!DOCTYPE html>

<html>
  <head>
    <title>My Book Form</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">My Book Form</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Book List</a>
          </li>
          <li class="nav-item">
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


    <?php include '../fetchBooks.php';?>

    <div class="container mt-4">
      <h1>My Book List</h1>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Book ID</th>
              <th>Title</th>
              <th>Author</th>
              <th>no of pages</th>
              <th>publisher</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($books as $book) { ?>
              <tr>
                <td><?php echo $book['bookId']; ?></td>
                <td><?php echo $book['title']; ?></td>
                <td><?php echo $book['author']; ?></td>
                <td><?php echo $book['noPages']; ?></td>
                <td><?php echo $book['publisher']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
