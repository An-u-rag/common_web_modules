<?php
    include "db.php";
    $query = 'SELECT * FROM users';
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    // $users = ["Anurag"];
    if(isset($_GET['submit'])){
        $input = $_GET["searchinput"];
        $inreg = "/$input/i";
        $found = 0; 
    }
?>
