<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php include("dbConfig.php"); 
$q = intval($_GET['q']);
$sql="SELECT * FROM users WHERE first_name = '$q'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row['email'];
mysqli_close($con);
?>
</body>
</html>
