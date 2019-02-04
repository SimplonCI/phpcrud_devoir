<?php 
    include 'config/database.php';

    $query = "SELECT * FROM users_crud";
    $users = mysqli_query($db,$query);


    // if(isset($_POST['supprimer'])){
    //     $id = $_POST['id'];
    //     $deletequery = "DELETE FROM users_crud WHERE id='$id'";
    //     $users = mysqli_query($db,$deletequery);

    //     echo '<script language="Javascript">';
    //     echo 'document.location.replace("./users.php")';
    //     echo ' </script>';
        
    // }


    include 'views/users.views.php';
?>