<?php
    $dbh = mysqli_connect('localhost','root','melody');

    die("Unable to connect to MySQL: " . mysqli_error());

    if(!mysqli_select_db($dbh,'my_personal_contacts'))

    die("Unable to select database:" . mysqli_error());

    $sql_stmt = "SELECT * FROM my_contacts";

     $result = mysqli_query($dbh,$sql_stmt);

    if(!$result)
        die("database access failed:" . mysqli_error());

        $rows = mysqli_num_rows($result);

        if ($rows)  {
            while ($row = mysqli_fetch_array($result)){
                echo 'ID:' .$row['id'] . '<br>';
                echo 'Full Names: ' . $rows['full_names'] . '<br>';
                echo 'Gender: ' . $row['gender'] . '<br>';
                echo 'Contact to: ' . $row['Contact to'] . '<br>';
                echo 'Email: ' . $row['Email'] . '<br>';
                echo 'City: ' . $row['City'] . '<br>';
                echo 'Country: ' . $row['Country'] . '<br>';
            }
        }
    mysqli_close($dbh);
?>