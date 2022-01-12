<?php 
session_start();

$cokie =  86400*2;  
// if (isset($_COOKIE['userName'])) {
//     unset($_COOKIE['userName']);
//     setcookie('userName', 'omar faruk', time() - $cokie, '/'); // empty value and old timestamp
// }       
setcookie("userName", "omar faruk", time() - $cokie);

    if (isset($_COOKIE['userName'])) {
        // ?> <a href="logout.php" id="name"><?php #echo $_COOKIE['userName'];?><i  class="fas fa-sign-out-alt danger"></i></a>

            <?php
            }else{
        ?>
            <a href="admin/login.php"><i class="fas fa-user" id="login-btn"></i></a>
            <?php 
            }
            $out   =  $_GET['out'];
            if ($out == 2) {
                header("location:index.php");
            }
       
?>