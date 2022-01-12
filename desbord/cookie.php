<?php include('header.php') ?>
    <?php
        $cokie = time() + 86400*365; 
        setcookie("userName", "omar faruk",$cokie);
    ?>