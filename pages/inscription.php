<?php
    require('../HTML/header.php');
?>
    <main>
        <h1 class="title">S'inscrire</h1>
        <form class="form" method="post" action="../BDD/validation.php">
            <div class="input__bloc">
                <label for="Nom">Nom</label>
                <input class="input" type="text" id="Nom" name="Nom" placeholder="Nom">
            </div>
            <div class="input__bloc">
                <label for="Prenom">Prenom</label>
                <input class="input" type="text" id="Prenom" name="Prenom" placeholder="Prenom">
            </div>
            <div class="input__bloc">
                <label for="email">Adresse mail</label>
                <input class="input" type="email" id="email" name="email" placeholder="Adresse mail">
            </div>
            <div class="input__bloc">
                <label for="password">Mot de passe</label>
                <input class="input" type="password" id="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="input__bloc">
                <label for="repeatpassword">Confirmez votre mot de passe</label>
                <input class="input" type="repeatpassword" id="repeatpassword" name="repeatpassword" placeholder="Confirmez le mot de passe">
            </div>
            <div class="login">
                <input type="submit" name="submit" value="Valider">
            </div>
        </form>
    </main>
    <br>
<?php
                require('../HTML/footer.php');
?>