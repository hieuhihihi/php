<?php
    $fh = fopen("file1.txt",'w') or die("failed to create file");
    $text = "localhost;root;pwd1234;mydatabase";
    fwrite($fh,$text) or die ("could not write to file");
    fclose($fh);
    echo"File 'file1.txt' write successfull "
?>