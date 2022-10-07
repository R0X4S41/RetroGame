<?php 
    //recup info user
    require_once '../BDD/session.php';

    // Si les variables existent et qu'elles ne sont pas vides
if (!empty($_POST['name']) && !empty($_POST['desc']) && !empty($_POST['img']) && !empty($_POST['prix']) && !empty($_POST['categorie'])) {
    // Patch XSS
    $name = htmlspecialchars($_POST['name']);
    $desc = htmlspecialchars($_POST['desc']);
    $img = htmlspecialchars($_POST['img']);
    $prix = htmlspecialchars($_POST['prix']);
    $prix = $prix*100;
    $categorie = htmlspecialchars($_POST['categorie']);
    $categorie = strtolower($categorie);
    $vendeur = $data['pseudo'];

    // On vérifie si l'utilisateur a les perms
    if ($data["grade"] == "ADMIN" || $data["grade"] == "SELLER") {
        if (isset($name)) {
            if (isset($desc)) {
                if (isset($img)) {
                    if (isset($prix)) {
                        if (isset($categorie)) {
                        
                            if($categorie == 'retro' || $categorie == 'new'){
                                // On insère dans la base de données
                                $insert = $bdd->prepare("INSERT INTO articles(name, descripti,img,  prix, categorie, vendeur) VALUES(:namer, :descr, :img, :prix,    :categorie, :vendeur);");
                                $insert->execute(array(
                                    'namer' => $name,
                                    'descr' => $desc,
                                    'img' => $img,
                                    'prix' => $prix,
                                    'categorie' => $categorie,
                                    'vendeur' => $vendeur
                                ));
                        
                                header('Location: add.php?reg_err=success');
                                die();
                            }else {header('Location: add.php?reg_err=categorie-no'); die();}
                        }else {header('Location: add.php?reg_err=categorie'); die();}
                    } else {header('Location: add.php?reg_err=prix'); die();}
                }else{ header('Location: add.php?reg_err=img'); die();}
            }else{ header('Location: add.php?reg_err=desc'); die();}
        }else{ header('Location: add.php?reg_err=name'); die();}
    }
}
?>