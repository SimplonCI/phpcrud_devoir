<?php 
    $datepost = date("Y-m-d");
    $db = mysqli_connect('localhost','root','','challenge');

    if(!$db){
        die('Database connexion error :'.mysqli_connect_error());
    }
?>
