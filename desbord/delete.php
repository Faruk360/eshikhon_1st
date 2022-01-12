<?php include('header.php') ?>
<?php
if (isset($_COOKIE['userName'])) {
    // header("location:list.php");
    echo '';
}else{
    header("location:index.php");
}
include('connection.php');
$id = $_GET['id'];
$query = "DELETE FROM `our_site` WHERE id = $id"; 
$run_query = mysqli_query($connection,$query);

if ($run_query == true) {
    header("location:list.php");
}

?>
