<?php
ob_start();
include('../header.php') ; 
 ?>
<div class="login-form-container">
    <form action="">
        <h3>login</h3>
        <input type="email" name="user_mail" class="box" value="<?php echo mail_show()?>" placeholder="enter your email" required>
        <input type="password" name="user_pass" class="box" value="<?php pass_show()?>" placeholder="enter your password" >
        <input type="submit" name="submit" value="login" class="btn">
        <?php echo wrong(); ?>
        <input type="checkbox" id="remember">
        <label for="remember" class="click_box">Remember Me</label>
        <p>Forget Password? <a href="#">Click Here</a></p>
    </form>

    <div>
        <div class="login_info">
            <h2>Login Information</h2>
            <p>E-m@il:- omar@andplus.com</p>
            <p>Passwrod:- andplus!1Wq</p>
        </div>
    </div>
</div>
<?php
    if (isset($_COOKIE['userName'])) {
        header("location:list.php");
    }
    $host = "localhost";
    $username = "omar_faruk";
    $password = "";
    $dbname = "andplus";
    $connection = new mysqli($host,$username,$password,$dbname);
    if (isset($_REQUEST['submit'])) {
      $user_mail   =  mysqli_real_escape_string($connection, $_REQUEST['user_mail']);
      $user_pass   =  mysqli_real_escape_string($connection, $_REQUEST['user_pass']);
     }
    if (empty($user_pass) && empty($user_mail)){
       echo '';
      
    }else{
        
    $query = "SELECT * FROM `admin` WHERE `email`='$user_mail' AND `password`='$user_pass'";
    $run_query    =  mysqli_query($connection, $query) or die('Query Failed!');
    $row_select   =  mysqli_num_rows($run_query);
        if (isset($_REQUEST['submit'])) {
            if ($row_select) {
                header("location:list.php");
            } else {
              ob_start();
                header("location:index.php?wrong-info");  
            }
        }
    }
    function wrong(){
        $wrong = '';
        if (isset($_GET['wrong-info'])) {
            $wrong = "<p class='wrong'>Your password or mail wrong<p>" ;
        }
        return $wrong ;
    }
    function mail_show(){
      if (isset($_POST['submit'])) {
        $name = $_REQUEST['user_mail'];
        if (!empty($_REQUEST['user_mail'])) {
          $name;
        } 
      return $name;
      }
    }
    function pass_show(){
      if (isset($_POST['submit'])) {
        $pass = $_REQUEST['user_pass'];
        if (empty($pass)) {
          $pass;
        }
        return $pass;
      }
    }
    
	if ( $user_mail == "omar@andplus.com" && $user_pass == "andplus!1Wq"){
    global $cokie;
		$cokie = time() + 86400*365;      
		setcookie("userName", "omar faruk", $cokie);
	  }else{
      
    }
    ?>