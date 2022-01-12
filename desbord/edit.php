<?php include('../header.php');
include('navber.php'); ?>
  <?php
  include('connection.php');;

  $id                 =  $_GET['id'];
  $sql                =  "SELECT * FROM our_site WHERE id = $id";
  $query              =  $connection->query($sql);
  $admin              =  mysqli_fetch_assoc($query);
  $dbid               =  $admin['id'];
  $dbpro_name         =  $admin['pro_name'];
  $dbdev_name         =  $admin['dev_name'];
  $dblanguage         =  $admin['language'];
  $dbframework        =  $admin['framework'];
  $dbstart_date       =  $admin['start_date'];
  $dbend_date         =  $admin['end_date'];
  $dbinitial_deadline =  $admin['initial_deadline'];
  $dbclient_name      =  $admin['client_name'];

  include('connection.php');
  $id = $_GET['id'];
  if (isset($_POST['submit'])) {
    $pro_name           =  $_REQUEST['pro_name'];
    $dev_name           =  $_REQUEST['dev_name'];
    $language           =  $_REQUEST['language'];
    $framework          =  $_REQUEST['framework'];
    $start_date         =  $_REQUEST['start_date'];
    $end_date           =  $_REQUEST['end_date'];
    $initial_deadline   =  $_REQUEST['initial_deadline'];
    $client_name        =  $_REQUEST['client_name'];
    $query              = "UPDATE `our_site` SET 
        `pro_name`          = '$pro_name',
        `dev_name`          = '$dev_name',
        `language`          = '$language',
        `framework`         = '$framework',
        `start_date`        = '$start_date',
        `end_date`          = '$end_date',
        `initial_deadline`  = '$initial_deadline',
        `client_name`       = '$client_name'
         WHERE id=$id";
    $run_query = mysqli_query($connection, $query);
    if ($run_query) {
      header("location:list.php");
    }
  }
//   global $cokie;
//   setcookie("userName", "omar faruk", $cokie);
//   if (isset($_COOKIE['userName'])) {
//     // header("location:list.php");
//     echo '';
// }else{
//     // header("location:index.php");
// }
  ?>

  <div class="container main_edit w-50">
    <form action="" method="POST">

      <label for="pro_name">Project Name:</label>
      <input type="text" value="<?php echo $dbpro_name; ?>" class="form-control" id="pro_name" name="pro_name">

      <label for="dev_name">Developer Name:</label>
      <input type="text" value="<?php echo $dbdev_name; ?>" class="form-control" id="dev_name" name="dev_name">

      <label for="language">Language:</label>
      <input type="language" value="<?php echo $dblanguage; ?>" class="form-control" id="language" name="language">

      <label for="framework">Framework:</label>
      <input type="name" value="<?php echo $dbframework; ?>" class="form-control" id="framework" name="framework">

      <label for="start_date">Start Date:</label>
      <input type="date" value="<?php echo $dbstart_date; ?>" class="form-control" id="start_date" name="start_date">

      <label for="end_date">End Date:</label>
      <input type="date" value="<?php echo $dbend_date; ?>" class="form-control" id="end_date" name="end_date">

      <label for="initial_deadline">Initial Deadline:</label>
      <input type="date" value="<?php echo $dbinitial_deadline; ?>" class="form-control" id="initial_deadline" name="initial_deadline">

      <label for="client_name">Client Name:</label>
      <input type="name" value="<?php echo $dbclient_name; ?>" class="form-control" id="client_name" name="client_name">


      <input type="submit" name="submit" value="Edit" class="btn edit_btn btn-primary">
  </div>
  </form>