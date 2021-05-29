<?php
// Connect to SQL Database
$conn = mysqli_connect('localhost', 'root', 'anurag', 'revise');

//check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . $mysqli_connect_errno();
} else {
    echo "Connection Established to MySQL<br>";
}

// After Submit, Enter into database
if(isset($_POST['submit'])){
    if($_POST['name'] != '' && $_POST['name'] != null){

        // Getting value of name from request
        $name = mysqli_real_escape_string($conn, $_POST['name']);

        // Query to enter
        $query = "INSERT INTO users(name) VALUES('$name')";

        // Enter into database and check if entered
        if(mysqli_query($conn,$query)){
            echo 'Written into Database';
        } else {
            echo 'Error Writing into the Database :'.mysqli_error($conn);
        }
        
    } else {
        echo "Input all Fields";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter into database</title>
</head>

<body>
    <div style="display:grid; justify-content:center; height: 100vh; align-items: center;">
        <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
            <input type="text" name="name" placeholder="Name"><br>

            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>