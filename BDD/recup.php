<?php
include('connect.php');

$requete = $bdd->query('SELECT * FROM users');
$i = 0;
echo '<table border>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Mot de passe</th>
            </tr>';

while($donnees = $requete->fetch()){

    echo '<tr>
                <td>'.$donnees['prenom'].'</td>
                <td>'.$donnees['nom'].'</td>
                <td>'.$donnees['email'].'</td>
                <td>'.$donnees['mdp'].'</td>
            </tr>';
}
echo '</tr>
        </table>';
?>