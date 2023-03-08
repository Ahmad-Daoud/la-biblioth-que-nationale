<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à la bibliothèque nationale!</title>
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- fichier css unique à la page "acceuil" -->
    <link rel="stylesheet" href="acceuil.css">

    <!-- CSS global contenant quelques variables et des règles globales pour les pages -->
    <link rel="stylesheet" href="global.css">

    <!-- Polices google font API -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Rowdies:wght@400;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
<!-- Début du menu sticky, utilisé sur toute les pages -->
<div class="row menusticky">
    <div class="col-1">
        <a href="acceuil.php"> 
            <img src="logo.png" alt="Logo de notre bibliothèque" class="imglogo">
        </a>
    </div>
    <div class="col-3 textmilieumenu">
        La Bibiliothèque Nationale
    </div>
    <div class=" col-2 textmenuglobal ">
        <a href="acceuil.php"><span class="animationtext">Acceuil</span></a>
    </div>
    <div class=" col-2 textmenuglobal ">    
        <a href="livres.php"> <span class="animationtext">Nos livres</span></a>
    </div>

    <div class=" col-2 textmenuglobal ">
        <a href="modifier.php"><span class="animationtext">Ajouter</span></a>
    </div>


    <div class="col-2 textmenuglobal">
        <a href=""> <span class="animationtext"> Contactez nous</span></a>
    </div>
</div>
<!-- Fin du menu sticky, utilisé sur toute les les pages -->





<!-- Début du footer, utilisé sur toute les pages -->
<div class="footer">
 La bibliothèque nationale© a pour objectif d'ouvrir l'esprit de nos jeunes et de leur permettre de recevoir un 20/20 
 en cours de PHP à l'aide des informations de qualité proposé par notre système inclusif d'éducation. Nous vous remercions pour cette année plein de support pour notre cause 
 et je ne sais plus trop quoi dire donc je vais écrire quelques mots en plus afin de rendre ce paragraphe assez long pour que vous ne le lisiez pas, et si vous êtes en train de 
 le lire en ce moment cela veut dire que mon effort a été inutile et j'ai perdu 5 minutes à écrire un pargraphe qui fait 5 lignes.
</div>

<!-- Fin du footer, utilisé sur toute les les pages -->


<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html