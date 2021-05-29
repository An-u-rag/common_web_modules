<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        // Set cookie for 1 hour
        setcookie('username', $username, time()+3600);

        // Unset a cookie, put time to already passed
        setcookie('username', $username, time()-3600);
    }
?>