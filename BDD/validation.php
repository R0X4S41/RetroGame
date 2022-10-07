<?php
if (isset($_POST['submit']))
{
    $Nom = htmlspecialchars(trim($_POST['Nom']));
    $Prenom = htmlspecialchars(trim($_POST['Prenom']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));

    $infos = array ($Nom,$Prenom,$email,$password,$repeatpassword);
    foreach($infos as $info){
        return $info . "\n";
    }
}
?>