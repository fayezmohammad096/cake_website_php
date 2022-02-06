<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
      <!-- header content -->
      <div class="p-5 bg-primary text-white text-center">
  <h1>CAKE HAVEN</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vanilla.php">Vanilla</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="red_velvet.php">Red Velvet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lemon_spong.php">Lemon Sponge</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="chocolate.php">Chocolate</a>
      </li>
     
    </ul>
  </div>
</nav>
<!-- header content end -->

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
       <h2>Different flavors cake</h2> 
       <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    List of Cake
  </a>
  <a href="black_forest.php" class="list-group-item list-group-item-action">Black forest</a>
  <a href="red_velvet.php" class="list-group-item list-group-item-action">Red Velvet</a>
  <a href="lemon_spong.php" class="list-group-item list-group-item-action ">Lemon Sponge Cake</a>
  <a href="vanilla.php" class="list-group-item list-group-item-action">Vanilla cake</a>
  <a href="chocolate.php" class="list-group-item list-group-item-action ">Chocolate Cake</a>
</div>


     

      <hr class="d-sm-none">
    </div>

  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
