<?php

//connect to database
$conn = mysqli_connect('1234', '1234', '1234.', '1234');

//check connection

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

?>
