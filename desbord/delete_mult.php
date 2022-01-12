<?php include('header.php') ?>
<?php
include('connection.php');
$id = $_GET['id'];
$query = "DELETE FROM `our_site` WHERE id = "; 
$run_query = mysqli_query($connection,$query);

if ($run_query == true) {
    header("location:list.php");
}
$i = 2;
while($i=100){
    echo $i;
    $i++;
}
?>