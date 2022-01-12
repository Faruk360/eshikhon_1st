<?php include('../header.php') ;
include('navber.php') ; 
session_start();

// setcookie();
// if (isset($_COOKIE['userName'])) {
//     // header("location:list.php");
//     echo '';
// }else{
//     header("location:index.php");
// }

global $wrong;
echo $wrong ;
var_dump($_FILES['image']['name']) ;
?>
<div class="container insret_section w-50">
    <form action="" method="POST"  enctype="multipart/form-admin">

        <label for="pro_name" class="">Project Name:</label>
        <input type="text" class="form-control " id="pro_name" name="name" required>

        <label for="dev_name" class="">Developer Name:</label>
        <input type="file" class="form-control" id="dev_name" name="image" required>

        <input type="submit" name="submit" value="Add" class="btn insert_btn btn-primary">

        <?php 
include('connection.php');
    $connection = new mysqli($host,$username,$password,$dbname);
    if (isset($_POST['submit'])) {
    $name           =  $_REQUEST['name'];
    $image          =  $_REQUEST['image'];
    $query = "INSERT INTO `admin_pro` (`name`, `image`) VALUES ('$name', '$image')"; 
    $run_query = mysqli_query($connection,$query);
        if ($run_query) {
            // header("location:");
            echo "Thi is a true";
        }else{
            global $wrong ;
            $wrong   = "<div class='bg-danger p-3 '>Samthing Wrong<div>";  
            echo $wrong ;   
        }
    }
?>

            </div>
    </form>
    </body>