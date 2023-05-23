<?php
    $username = 'root';
    $servername = 'localhost';
    $password = '';

    $conn = new mysqli($servername, $username, $password, "WearYourMoods");
    if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>