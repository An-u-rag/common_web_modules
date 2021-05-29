<?php
if (isset($_POST["submit"])) {
    echo "Successfful Submit<br>";
    echo htmlentities($_SERVER["REMOTE_PORT"]) . "<br>";
    $name = htmlentities($_POST["username"]);
}
