<?php
require_once 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Records</title>
</head>

<body class="bg-light">
  <div class="container py-4">
    <h1 class="my-4 text-center">Records</h1>
    <div class="row g-4">
      <?php
      foreach ($records as $record) {
        echo '
          <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
              <img src="' . $record['cover_url'] . '" class="card-img-top" alt="' . $record['title'] . '">
              <div class="card-body">
                <h5 class="card-title">' . $record['title'] . '</h5>
                <p class="card-text mb-1"><strong>Artist:</strong> ' . $record['artist'] . '</p>
                <p class="card-text mb-1"><strong>Year:</strong> ' . $record['year'] . '</p>
                <p class="card-text"><strong>Genre:</strong> ' . $record['genre'] . '</p>
              </div>
            </div>
          </div>';
      }
      ;
      ?>
      <h2 class="mt-4 mb-3">Add a record</h2>
      <div class="card p-4 shadow-sm">
        <form action="server.php" method="POST" class="row g-3">
          <div class="col-12">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
          </div>
          <div class="col-12">
            <label for="artist" class="form-label">Artist</label>
            <input type="text" id="artist" name="artist" class="form-control" required>
          </div>
          <div class="col-12">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" id="genre" name="genre" class="form-control" required>
          </div>
          <div class="col-12">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" max="2026" min="1860" class="form-control" required>
          </div>
          <div class="col-12">
            <button class="btn btn-primary w-100">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>