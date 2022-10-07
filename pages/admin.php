<?php 
    //recup info user
    require_once '../BDD/session.php';

    // On vérifie si l'utilisateur a les perms
    if ($data["grade"] == "CUSTOMER") {
        header('Location:../pages/home.php');
    }

    require('../HTML/header.php');

    $req = $bdd->prepare('SELECT pseudo FROM utilisateurs');
    $req->execute();
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
                                <strong>Succès</strong> Grade ajoutez !
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
                                    <strong>Succès</strong> Pseudo non definie !
                                </div>
                            <?php
                            break;
                        case 'grade':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Succès</strong> Grade non definie !
                                </div>
                            <?php
                            break;
                    }
                }
                ?>
            
            <form action="valid-grade.php" method="post">
                <h2 class="text-center">Nouveau Seller</h2>
                <h5 class="text-left">Choix de la personne</h2>  
                <select name="pseudo" class="form-group">
                    <option value="">Pseudo</option>
                    <?php 
                        while($data = $req->fetch()){
                            echo '
                                <option value="'.$data['pseudo'].'">'.$data['pseudo'].'</option>
                            ';
                        
                        }
                    ?>
                </select> 
                <h5 class="text-left">Choix du grade</h2>  
                <select name="grade" class="form-group">
                    <option value="">Grade</option>
                    <option value="Seller">SELLER</option>
                    <option value="Customer">CUSTOMER</option>
                </select>          
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ajouter</button>
                </div>   
            </form>
        </div>
        <a href="../articles/add.php"  class="res">New articles</a>
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
