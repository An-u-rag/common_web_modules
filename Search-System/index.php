<?php
include "search.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search System</title>
</head>

<body>
    <div style="display:flex; flex-direction:column; gap:100px; margin-top:10%; justify-content:center; align-items: center;">
        <form method="GET" action=<?php $_SERVER['PHP_SELF'] ?>>
            <label for="searchinput">Search Input: </label><br>
            <input type="search" name="searchinput" value=<?php if(isset($_GET['submit'])) echo $input; ?>><br>

            <!-- <label for="keeplog">Remember Login Credentials next time?</label><br>
            <input type="checkbox" name="keeplog"><br> -->

            <input type="submit" name="submit">
        </form>
        <div>
            <?php if (!isset($_GET["submit"])) : ?>
                <h1>List of all Users:</h1><br>
                <ul>
                    <?php foreach ($users as $user) : ?>
                        <li><?php echo $user['name'] ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if (isset($_GET['submit'])) : ?>
                <h1>Your query: <?php echo $input; ?></h1><br>

                <h1> Search Results with Broad Results: </h1>
                <ul>
                    <?php foreach ($users as $user) : ?>
                        <?php $sim = similar_text($input, $user['name'], $match); ?>
                        <?php if ($match >= 60) : ?>
                            <li><?php echo $user['name'];
                                $found = 1; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
                <hr>
                <h1> Precise Search Results</h1>
                <ul>
                    <?php foreach ($users as $user) : ?>
                        <?php if (preg_match($inreg, $user['name'])) : ?>
                            <li><?php echo $user['name'];
                                $found = 1; ?></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>




</body>

</html>