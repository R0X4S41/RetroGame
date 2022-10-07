<?php 
    //recup info user
    require_once '../BDD/session.php';
    
    // Si les variables existent et qu'elles ne sont pas vides
    if (!empty($_POST['pseudo']) && !empty($_POST['grade'])) {
        // Patch XSS
        $pseudo = strtoupper($_POST['pseudo']);
        $grade = strtoupper($_POST['grade']);
        // On vérifie si l'utilisateur a les perms
        if ($data["grade"] == "ADMIN") {
            if (isset($pseudo)) {
                if (isset($grade)) {
                    // On insère dans la basede    données 
                    $update = $bdd->prepare("UPDATE utilisateurs SET grade = :grade WHERE pseudo = :pseudo ;");
                    $update->execute(array(
                        'pseudo' => $pseudo,
                        'grade' => $grade
                    ));
                    
                    header('Location: admin.php? reg_err=success');
                    die();
                }else{ header('Location: admin.php?reg_err=grade'); die();}
            }else{ header('Location: admin.php?reg_err=name'); die();}
        }
    }
?>