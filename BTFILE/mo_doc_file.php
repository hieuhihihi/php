<?php
    $fp  = fopen('file1.txt', 'r') or die("Failed to create file");
   while(!feof($fp))
    { echo "<div style='background: green; width: 300px;'>";
        echo fgets($fp);
        echo "</br>";
        echo "</div>";
    }
    fclose($fp);
?>