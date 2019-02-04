<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Users</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Enregistrement</div>
                    <div class="card-body">
                        <?php if(isset($_POST['modifier'])): ?>
                            <form class="form-horizontal" method="post" action="index.php">
                                
                                <div class="form-group">
                                
                                    <input type="hidden" name="id" value='<?php echo $id?>'>
                                    <input type="hidden" name="passwordold" value="<?php echo $password?>">
                                </div>
                            
                                <div class="form-group">
                                    <label for="nom" class="cols-sm-2 control-label">NOM</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $nom?>"  placeholder="Veuillez entrer votre nom"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="prenom" class="cols-sm-2 control-label">PRENOM</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="prenom" value="<?php echo $prenom?>" id="prenom" placeholder="Veuillez entrer votre prenom" />
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">NOUVEAU MOT DE PASSE</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Veuillez entrer votre mot de passe" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php if($sexe == 'masculin'):?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="masculin" checked>
                                        <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="feminin" >
                                        <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                    </div>
                                    <?php elseif($sexe == 'feminin'):?>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="masculin">
                                            <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="feminin" checked>
                                            <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                        </div>
                                    <?php else:?>
                                    <?php endif?>
                                </div>
                                
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button col-md-4" name='update' value='MODIFIER'>
                                    <a href="users.php" class="btn btn-primary btn-lg btn-block login-button " >ANNULER</a>
                                </div>
                            
                            </form>
                        <?php else:?>
                            <form class="form-horizontal" method="post" action="index.php">
                                   
                                <div class="form-group">
                                    <label for="nom" class="cols-sm-2 control-label">NOM</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="nom" id="nom"  placeholder="Veuillez entrer votre nom"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="prenom" class="cols-sm-2 control-label">PRENOM</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Veuillez entrer votre prenom" />
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">MOT DE PASSE</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Veuillez entrer votre mot de passe" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio1" value="masculin">
                                        <label class="form-check-label" for="inlineRadio1">Masculin</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="sexe" id="inlineRadio2" value="feminin">
                                        <label class="form-check-label" for="inlineRadio2">Feminin</label>
                                    </div>
                                </div>
                                
                                <div class="form-group ">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" name='enregistrement' value='ajouter'>
                                </div>
                            
                            </form>
                        <?php endif ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>