<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

    <title>Home Page</title>
  </head>

    <?php
    include 'menu.php';
    ?>
<body>
  <div class="container mt-4">
    <div class="row mt-4">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="img/img1.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Description of Product 1 goes here.</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="img/img2.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">Description of Product 1 goes here.</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="img/img3.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">Description of Product 2 goes here.</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <img src="img/img4.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text">Description of Product 2 goes here.</p>
            <a href="#" class="btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- Add Bootstrap JS and jQuery scripts here (use local or CDN) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>