<?php 
$file = 'C:\xampp\htdocs\bt\havy\text.csv';
if (($open = fopen($file,"r")) !== FALSE){
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
          $array[] = $data;
}
fclose($open);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            foreach($array as $sub){
                echo '<div class="card" style="width: 28rem; margin-right: 20px;margin-top: 10px;box-shadow: 0 0 10px 0 grey;">
                <img src="' . $sub[0] . '">
                <div class="card-body">
                    <h5 class="card-title text-primary style="font-family:Arial;">' . $sub[1] . '</h5>';
                
            }
            ?>
            </div>
</body>
</html>