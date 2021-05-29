<?php
    if(isset($_GET['submit'])){
        

        // Write into file (replaces)
        echo file_put_contents($file, "Hello");

        // Write from file to website
        echo file_get_contents($file);

        // Append to the file when writing
        $current = file_get_contents($file);
        $current .= ' Hello';
        file_put_contents($file, $current);

        // Open file for reading
        $handle = fopen($file, 'r');
        $data = fread($handle, filesize($file));
        echo $data;
        fclose($handle);

        // Open file for wrtiting
        $handle = fopen($file, 'w');
        $data = 'Hello World';
        fwrite($handle, $data);
        fclose($handle);
    }

?>