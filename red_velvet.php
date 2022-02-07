<?php
 $conn = mysqli_connect('localhost','root','','project_test');
 if(isset($_POST['btn'])){
     $row_cost = $_POST['row_cost'];
     $transport_cost = $_POST['transport_cost'];
     $space_cost = $_POST['space_cost'];
     $staff_cost = $_POST['staff_cost'];
     $u_cost = $_POST['utility_cost'];
     $selling_price = $_POST['selling_price'];
     $discount_price = $_POST['discount_price'];
     $utility_cost= (($row_cost+$transport_cost)* $u_cost)/100;
     //echo "UTILITY : ". $utility_cost;

     if(!empty($row_cost) && !empty($transport_cost) && !empty($space_cost) &&!empty( $staff_cost) &&!empty( $utility_cost)&&!empty( $selling_price)){

        $query = "INSERT INTO red_velvet(row_cost,transport_cost,space_cost,staff_cost,utility_cost,selling_price,discount_price)VALUES($row_cost,$transport_cost,$space_cost,$staff_cost,$utility_cost,$selling_price,$discount_price)";

        $createquery = mysqli_query($conn,$query);
     }else{
         "Field empty!";
     }
 

 }


?>
<!-- delete method -->
<?php
  if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $query = "DELETE FROM red_velvet WHERE id=$id";
    $deltequery = mysqli_query($conn,$query);
    if($deltequery){
      echo "Data Deleted Successfully";
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Red Velvet</title>
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
  <div class="container shadow m-5 p-3">
        <form action="" method="post" class="d-flex justify-content-around">
           
            <input class="form-control" type="number" name="row_cost" id="row_cost" placeholder="Enter Row Materal Cost"><br>
            <input class="form-control" type="number" name="transport_cost" id="transport_cost" placeholder="Enter Transport Cost">
            <input class="form-control" type="number" name="space_cost" id="space_cost" placeholder="Enter Space Cost">
            <input class="form-control" type="number" name="staff_cost" id="staff_cost" placeholder="Enter Staff Cost">
            <input class="form-control" type="number" name="utility_cost" id="utility_cost" placeholder="Utility Cost 3%">
            <input class="form-control" type="number" name="selling_price" id="selling_price" placeholder="Enter Selling price">
            <input class="form-control" type="number" name="discount_price" id="discount_price" placeholder="Discount 5%"><br> <br> <br>
            
            <input class="btn btn-success" type="submit" name="btn" value="send">
        </form>
    </div>

    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>Cake Flavor</th>
                <th>Total Cost</th>
                <th>Regular Price</th>
                <th>Discount Price</th>
                <th>After Disc Selling</th>
                <th>Profit/loss</th>
                <th>Profit/Loss in perc</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                $query = "SELECT * FROM red_velvet";
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
                        $after_disc_selling = $disc_price * 10;//change
                        $profit_loss =$disc_price - $total_cost;

                        $profit_loss_in_perc = (($disc_price- $total_cost)*100)/$total_cost;
 
                
            ?>
            <tr>
                <td>Red Velvet</td>
                <td><?php echo $total_cost;?></td>
                <td><?php echo $regular_price;?></td>
                <td><?php echo $disc_price;?></td>
                <td><?php echo $after_disc_selling;?></td>
                <td><?php echo $profit_loss;?> taka</td>
                <td><?php echo $profit_loss_in_perc;?> %</td>
                <td> <a type="submit" class="btn btn-danger" href="red_velvet.php?delete=<?php echo $id;?>">Delete </a></td><!--change-->
                <td></td>
            </tr>
            <?php }}else{
              echo "No Data Found";
            } ?>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>