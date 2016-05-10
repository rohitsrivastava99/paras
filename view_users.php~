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

    }

</style>

<body>
<div class="table-scrol">
    <h1 align="center"> Hello ADMIN </h1>
    <h1><a href="logout_admin.php">Logout here</a> </h1>
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


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
        include("dbConfig.php");
        $view_users_query="select * from category";//select query for viewing users.
        $run=mysqli_query($con,$view_users_query);//here run the sql query.

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
</div>


</body>

</html>
