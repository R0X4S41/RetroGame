<?php
        // On récupere les données de l'utilisateur
        require_once '../BDD/session.php'
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <meta http-equiv="cache-control" content="no-cache" />
            <meta http-equiv="pragma" content="no-cache" />
            <meta name="author" content="R0X4S"/>

            <title>RetroGame</title>
            
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
            <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!-- Slick -->
		    <link type="text/css" rel="stylesheet" href="CSS/articles/slick.css"/>
		    <link type="text/css" rel="stylesheet" href="CSS/articles/slick-theme.css"/>

		    <!-- nouislider -->
		    <link type="text/css" rel="stylesheet" href="CSS/articles/nouislider.min.css"/>

		    <!-- Font Awesome Icon -->
		    <link rel="stylesheet" href="CSS/articles/font-awesome.min.css">

		    <!-- Custom stlylesheet -->
		    <link type="text/css" rel="stylesheet" href="/CSS/articles/style.css"/>

            <link rel="stylesheet" href="/CSS/styles.css" type="text/css" media="screen"/>
            <link rel="stylesheet" href="/CSS/articles.css" type="text/css" media="screen"/>
            <script src="../JS/articles.js" ></script>
        </head>
        <body>
            <div id="contenaire">
                <div class="topnav" id="myTopnav">
                    <a href="../pages/home.php" class="logo"><img class="logo" src="../IMG/retro.png" alt="Logo RetroGame"></a>
                    <a href="../pages/home.php" class="active"  id="name" >RetroGame</a>
                    <a href="../pages/contact.php"  class="res">Contact</a>
                    <a href="javascript:void(0);" class="icon"  onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                    <?php
                        if(isset($_SESSION['user'])){
                    ?>
                            <a href="../pages/profil.php"   class="res">Profil</a>
                    <?php
                        }
                    ?>
                    <?php
                        if(!isset($_SESSION['user'])){
                    ?>
                            <a href="../BDD/index.php"   class="res">Connection</a>
                    <?php
                        }
                    ?>
                    <?php
                        if(isset($_SESSION['user'])){
                            if($data['grade'] == 'ADMIN'){
                    ?>
                                <a href="../pages/admin.php" class="res">Admin</a>
                    <?php
                            }
                        }
                    ?>
                    
                </div>
        