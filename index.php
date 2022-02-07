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
  <p>Choice your lexury flavor</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="black_forest.php">Black Forest</a>
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

 </div>
    <div class="col-8">
    <!-- <div class="container">
        <table class="table table-bordered  table-striped ">
            <tr style="background-color:#0d6efd">
                <th>Cake Flavor</th>
                <th>Total Cost</th>
                <th>Regular Price</th>
                <th>Discount Price</th>
                <th>After Disc Selling</th>
                <th>Profit/loss</th>
                <th>Profit/Loss in perc</th>
              
            </tr>
            <?php
                $query = "SELECT * FROM black_forest";
                $readquery = mysqli_query($conn,$query);
                if($readquery->num_rows >0){
                    while($read_data = mysqli_fetch_assoc($readquery)){
                        $id = $read_data['id'];
                        $row_cost  = $read_data['row_cost'];
                        $transport_cost  = $read_data['transport_cost'];
                        $space_cost = $read_data['space_cost'];
                        $staff_cost = $read_data['staff_cost'];
                        $utility_cost = $read_data['utility_cost'];
                        $selling_price = $read_data['selling_price'];
                        $discount_price = $read_data['discount_price'];

                        $total_cost = ($row_cost+$transport_cost+$space_cost+ $staff_cost+$utility_cost);// regular making cost totle 

                        $regular_price =$selling_price;//------seeling price
                        $disc_price = $regular_price- (($regular_price *$discount_price)/100);
                        $after_disc_selling = $disc_price * 5;//change
                        $profit_loss =$disc_price - $total_cost;

                        $profit_loss_in_perc = (($disc_price- $total_cost)*100)/$total_cost;
 
                
            ?>
            <tr>
                <td>Black Forest</td>
                <td><?php echo $total_cost;?></td>
                <td><?php echo $regular_price;?></td>
                <td><?php echo $disc_price;?></td>
                <td><?php echo $after_disc_selling;?></td>
                <td><?php echo $profit_loss;?> taka</td>
                <td><?php echo $profit_loss_in_perc;?> %</td>
               
            </tr>
            <?php }}else{
              echo "No Data Found";
            } ?>
        </table>
    </div> -->

 </div>

  </div>
  
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>
