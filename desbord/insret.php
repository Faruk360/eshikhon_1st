<?php include('../header.php') ;
include('navber.php') ; 
session_start();

// setcookie();

global $wrong;
echo $wrong ;?>
<div class="container insret_section w-50">
    <form action="" method="POST"  enctype="multipart/form-admin">

        <label for="pro_name" class="">Project Name:</label>
        <input type="text" class="form-control " id="pro_name" name="pro_name" required>

        <label for="dev_name" class="">Developer Name:</label>
        <input type="text" class="form-control" id="dev_name" name="dev_name" required>

        <label for="language" class="">Language:</label>
        <input type="language" class="form-control"  id="language" name="language" required>

        <label for="framework" class="">Framework:</label>
        <input type="name" class="form-control" id="framework" name="framework" >

        <label for="start_date" class="">Start Date:</label>
        <input type="date" class="form-control"  id="start_date" name="start_date" >

        <label for="end_date" class="">End Date:</label>
        <input type="date" class="form-control"  id="end_date" name="end_date"  required>

        <label for="initial_deadline" class="">Initial Deadline:</label>
        <input type="date" class="form-control"  id="initial_deadline" name="initial_deadline"  >

        <label for="client_name" class="">Client Name:</label>
        <input type="name" class="form-control"  id="client_name" name="client_name"  required>


        <input type="submit" name="submit" value="Add" class="btn insert_btn btn-primary">

        <?php 
include('connection.php');
    $connection = new mysqli($host,$username,$password,$dbname);
    if (isset($_POST['submit'])) {
    $pro_name          =  $_REQUEST['pro_name'];
    $dev_name          =  $_REQUEST['dev_name'];    
    $language          =  $_REQUEST['language'];  
    $framework         =  $_REQUEST['framework'];  
    $start_date        =  $_REQUEST['start_date'];
    $end_date          =  $_REQUEST['end_date'];
    $initial_deadline  =  $_REQUEST['initial_deadline'];
    $client_name       =  $_REQUEST['client_name'];
    $query = "INSERT INTO `our_site` (`pro_name`, `dev_name`,`end_date`,`start_date`,`initial_deadline`,`client_name` ,`framework`,`language`) VALUES ('$pro_name', '$dev_name', '$end_date','$start_date','$initial_deadline','$client_name','$framework','$language')"; 
    $run_query = mysqli_query($connection,$query);
        if ($run_query) {
            header("location:list.php");
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