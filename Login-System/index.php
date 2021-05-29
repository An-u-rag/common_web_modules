<?php   
    include "validation.php";

    // Create Session
    if(isset($_POST['submit'])){
        include "session.php";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Login System</title>
</head>

<body>
    <div style="text-align:center">
        <?php if ($_POST) : ?>

            <h1>Hello <?php echo $name; ?></h1>
            <h3>You have been successfully logged in!</h3>

        <?php endif; ?>
    </div>

    <div style="display:grid; justify-content:center; height: 100vh; align-items: center;">
        <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="********"><br>

            <label for="keeplog">Remember Login Credentials next time?</label><br>
            <input type="checkbox" name="keeplog"><br>

            <a href="#">Don't have an Account? Click here.</a><br><br>

            <input type="submit" name="submit">
            <input type="reset" value="reset">
        </form>
    </div>
</body>

</html>