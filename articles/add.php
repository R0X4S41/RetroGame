<?php 
    //recup info user
    require_once '../BDD/session.php';

    // On vérifie si l'utilisateur a les perms
    if ($data["grade"] == "CUSTOMER") {
        header('Location:../pages/home.php');
    }

    require('../HTML/header.php');

?>
    <div class="contenaire">
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
            
                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> Articles ajoutez !
                            </div>
                        <?php
                        break;
            
                        case 'down':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Problême BDD !
                                </div>
                            <?php
                            break;
                        
                        case 'name':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Nom du produit non definie !
                                </div>
                            <?php
                            break;
                        case 'desc':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Description non definie !
                                </div>
                            <?php
                            break;
                            
                        case 'lien':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Lien d'image non definie !
                                </div>
                            <?php
                            break;
            
                        case 'prix':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Prix non definie !
                                </div>
                            <?php
                            break;
                        
                        case 'categorie':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Catégorie non definie !
                                </div>
                            <?php
                            break;
                        
                        case 'categorie-no':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Catégorie non valide (Retro ou New) !
                                </div>
                            <?php
                            break;
                    }
                }
                ?>
            
            <form action="validation.php" method="post">
                <h2 class="text-center">Nouveau article</h2>       
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nom du produit" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="desc" class="form-control" placeholder="Description" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="img" class="form-control" placeholder="Lien de l'image" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="prix" class="form-control" placeholder="Prix" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="categorie" class="form-control" placeholder="Catégorie" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                </div>   
            </form>
        </div>
    </div>
        <style>
            .contenaire{
                max-width: 100%;
            }
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
<?php
    require('../HTML/footer.php');
?>
