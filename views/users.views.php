<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>All users</title>
</head>
<body>

<div class="container">
    <div class="row col-md-10 col-md-offset-1 ">
    <table class="table table-striped custab">
    <thead>
    <a href="index.php" class="btn btn-primary btn-xs pull-right"><b>+</b> ajouter un user</a>
        <tr>
            <th>ID</th>
            <th>Nom et prenom</th>
            <th> mot de passe</th>
            <th class="text-center">sexe</th>
            <th> Date d'enregistrement</th>
            <th> modifier</th>
            <th> Effacer</th>
        </tr>
    </thead>
            <?php if($users):?>
                <?php $id = 0 ?>
                <?php while($user = mysqli_fetch_assoc($users)):?>
                    <tr>
                        <td><?php echo ++$id ;?></td>
                        <td><?php echo $user['nom'].' '.$user['prenom'];?></td>
                        <td><?php echo $user['password'];?></td>
                        <td>
                            <?php if($user['sexe'] == 'masculin'):?>
                                <img src="assets/img/boy.svg" alt="" srcset="">
                            <?php elseif($user['sexe'] == 'feminin'):?>
                                <img src="assets/img/girl.svg" alt="" srcset="">
                            <?php else: ?>
                                <font color='red'>sexe innconnu</font>
                            <?php endif ?>
                            
                        </td>
                        <td><?php echo $user['datepost'];?></td>
                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                                <button type="submit" name="modifier">
                                    <img src="assets/img/edit.svg" alt="" srcset="" style="height:30px;">
                                </button>
                            </form>
                        </td>
                        <td>
                        <form action="index.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                                <button type="submit" name="supprimer" onclick="ConfirmDelete('<?php echo $user['nom'].' '.$user['prenom'];?>')">
                                    <img src="assets/img/delete.svg" alt="" srcset="" style="height:30px;">
                                </button>
                            </form>
                        </td>

                    </tr>
                <?php endwhile?>
            <?php endif?>
           
    </table>
    </div>
</div>




    <script type="text/javascript">
      function ConfirmDelete(params)
      { 
        var reponse = confirm("Voulez vous vraiment supprimer "+ params +"? ");
        
       
            if (reponse){
                 location.href='index.php';
            } else{
                location.href='users.php';
            }
      }
    </script>
</body>
</html>