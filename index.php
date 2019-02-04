<?php
    include 'config/database.php';


    if(isset($_POST['enregistrement'])){
        $nom = addslashes($_POST['nom']);
        $prenom = addslashes($_POST['prenom']);
        $sexe = addslashes($_POST['sexe']);
        $password = md5($_POST['password']);
        


        $query = "INSERT INTO users_crud (nom,prenom,sexe,password,datepost)
                  VALUES('$nom','$prenom','$sexe','$password','$datepost')";

        $user = mysqli_query($db,$query);

        if(!$user){
            die(mysqli_error($db));
        } else{
            echo '<script language="Javascript">';
            echo 'document.location.replace("./users.php")';
            echo ' </script>';
        }
    }

    if(isset($_POST['modifier'])){
        $id = $_POST['id'];
        $nom = '';
        $prenom ='';
        $password = '';
        $sexe = '';
        $password = '';
        // die($id);
        $users = mysqli_query($db,"SELECT * FROM users_crud WHERE id='$id'");
       
        // die(var_dump($users));
        if($users){
           
            while($user = mysqli_fetch_assoc($users)){
                $nom = $user['nom'];
               
                $prenom = $user['prenom'];
                $password = $user['password'];
                $sexe = $user['sexe'];
            }
        }

    }

    if(isset($_POST['supprimer'])){
        $id = $_POST['id'];
        $deletequery = "DELETE FROM users_crud WHERE id='$id'";
        $users = mysqli_query($db,$deletequery);

        echo '<script language="Javascript">';
        echo 'document.location.replace("./users.php")';
        echo ' </script>';
        
    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nom = addslashes($_POST['nom']);
        $prenom = addslashes($_POST['prenom']);
        $sexe = addslashes($_POST['sexe']);
        $passwordcurrent = md5($_POST['password']);
       
        if($passwordcurrent == $_POST['passwordold']){
            $password = $_POST['passwordold'];
        }else{
            $password = md5($_POST['password']);
        }
       

        $query = "UPDATE users_crud SET nom='$nom', prenom='$prenom',sexe='$sexe',password='$password' WHERE id='$id'";

        $updateUser = mysqli_query($db,$query);

       if($updateUser){
        echo '<script language="Javascript">';
        echo 'document.location.replace("./users.php")'; 
        echo ' </script>';
       } else{
           die(mysqli_error($db));
       }
    }



    include 'views/index.views.php';
?>