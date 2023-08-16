<?php
    $fh = fopen('file1.txt', 'r') or die("Failed to create file");
    $line = fgets($fh);
    echo $line;
    fclose($fh);
?>