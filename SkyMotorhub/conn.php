<?php

$connection = mysqli_connect("localhost","root", "", "skymotorhub") or die("ERROR");

if(mysqli_connect_errno()) {
    die('Database Connection Failed' . mysqli_connect_error());
}
else {
    echo"Connection Successful." ;
}



?>

