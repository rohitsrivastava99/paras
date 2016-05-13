<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;
	margin-left: 300px;

    }
    #admin-panel {
      margin-left: 900px;
}
    h1{
    text-align: center;
    }

</style>

<body>
<?php include("dbConfig.php"); ?>
<div class="table-scrol">
    <h1 align="center" > Hello ADMIN </h1>
    <h1><a href="logout_admin.php" id ="admin-panel">Logout here</a> </h1>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
  <h1>Message Update Panel</h1>
 <table class="table table-bordered table-hover table-striped" style="width:50%">
        <thead>
	 <tr>
            <th>MessageId</th>
            <th>Description</th>
            <th>Updated Value</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        $view_users_query="select * from category";//select query for viewing users.
        $run=mysqli_query($con,$view_users_query);//here run the sql query.
        $view_order_query="select * from order_detail";
        $run_order=mysqli_query($con,$view_order_query);
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $message_id=$row[0];
            $description=$row[2];

        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $message_id;  ?></td>
            <td><?php echo $description;  ?></td>
            <td><input name ="description" value= <?php echo "value"?> ></td>
            <td><button class="btn btn-danger" id ="update" >Update</button></td> 
<?php
 if(isset($_POST['update'])){
	$update_query="update category SET description = '$value'";//delete query
	$run=mysqli_query($con,$update_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('VALUE has been UPDATED)</script>";
}
}
?>
        </tr>

        <?php } ?>

    </table>
        </div>

<!-- table for order detail-->
</div>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
 <h1>Service Detail</h1>
<table class="table table-bordered table-hover table-striped" style="width:50%">
        <thead>

        <tr>
            <th>orderId</th>
            <th>productId</th>
            <th>quantity</th>
            <th>price</th>
        </tr>
        </thead>

        <?php
        $view_order_query="select * from order_detail";
        $run_order=mysqli_query($con,$view_order_query);
        while($row=mysqli_fetch_array($run_order))//while look to fetch the result and store in a array $row.
        {
            $orderid=$row[0];
	    $productid=$row[1];
            $quantity=$row[2];
            $price=$row[3];
        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $orderid;  ?></td>
	    <td><?php echo $productid;  ?></td>
	    <td><?php echo $quantity;  ?></td>
            <td><?php echo $price;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>
<!--table for tracking order-->
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
 <h1>Tracking  Panel</h1>
<table class="table table-bordered table-hover table-striped" style="width:50%">
        <thead>

        <tr>
            <th>serial</th>
            <th>date</th>
            <th>customer</th>
        </tr>
        </thead>

        <?php
        $view_order_query="select * from orders";
        $run_order=mysqli_query($con,$view_order_query);
        while($row=mysqli_fetch_array($run_order))//while look to fetch the result and store in a array $row.
        {
            $serial=$row[0];
	    $date=$row[1];
            $customer=$row[2];
        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $serial;  ?></td>
	    <td><?php echo $date;  ?></td>
	    <td><?php echo $customer;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>
<!--customer detail table-->
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->
<h1>Customer Detail</h1>
<table class="table table-bordered table-hover table-striped" style="width:50%">
        <thead>

        <tr>
            <th>Serial</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
	    <th>Phone</th>
        </tr>
        </thead>

        <?php
        $view_order_query="select * from customers";
        $run_order=mysqli_query($con,$view_order_query);
        while($row=mysqli_fetch_array($run_order))//while look to fetch the result and store in a array $row.
        {
            $Serial=$row[0];
	    $Name=$row[1];
            $Email=$row[2];
            $Address=$row[3];
            $Phone=$row[4];
        ?>
        <tr>
<!--here showing results in the table -->
            <td><?php echo $Serial;  ?></td>
	    <td><?php echo $Name;  ?></td>
	    <td><?php echo $Email;  ?></td>
            <td><?php echo $Address;  ?></td>
            <td><?php echo $Phone;  ?></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
