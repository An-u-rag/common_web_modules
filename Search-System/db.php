<?php
    //connect to MySQL (localhost, user, password, databasename)
    $conn = mysqli_connect('localhost', 'root', 'anurag', 'revise');

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL" . $mysqli_connect_errno();
    }
    else{
        echo "Conenction Established to MySQL";
    }
?>