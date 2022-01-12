 <?php include('../header.php');
?>
   
<?php
      include('connection.php');;

$id                 =  2;
$sql                =  "SELECT * FROM admin_pro WHERE id = 2";
$query              =  $connection->query($sql);
$admin              =  mysqli_fetch_assoc($query);
$db_id              =  2;
$db_user_name       =  $admin['name'];
$db_image           =  $admin['image'];
include('connection.php');
if (isset($_POST['submit'])) {
  $user_name            =  $_REQUEST['user_name'];
  $user_image           =  $_REQUEST['user_photo'];
// UPDATE `admin_pro` SET `name` = 'Omar Faruk' WHERE `admin_pro`.`id` = 2
  $query              = "UPDATE `admin_pro` SET 
      `name`          =  $user_name,
      `image`         = '$user_image',
    WHERE `admin_pro`.`id` = 2";
  $run_query = mysqli_query($connection, $query);
  if ($run_query) {
    header("location:list.php");
  }
}
?>

<div class="container main_edit w-50">
<form action="" enctype="multipart/form-data">
        <h3>Profile</h3>
        <input type="name" name="user_name" class="box" value="<?php echo $db_user_name ?>" placeholder="User Name" required>
        <input type="file" name="user_photo" class="box" value="<?php #pass_show()?>" placeholder="" >
        <input type="submit" name="submit" value="Update" class="btn">
        <?php #echo wrong(); ?>
    </form>
</div>
</form> 
