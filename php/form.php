<?php 
 
$sophrologie = 0;
$boxe = 0;
$ateliercrea= 0;


###Question 1###
if($_POST['question1'] == "A"){
    $boxe += 1;
}
if($_POST['question1'] == "B"){
    $boxe += 1;
}
if($_POST['question1'] == "C"){
    $sophrologie += 1;
    $ateliercrea +=1;
}
###Question 2###
if($_POST['question2'] == "C"){
    $boxe += 1;
    $ateliercrea += 1;
}
###Question 3###
if($_POST['question3'] == "A"){
    $boxe += 1;
}
if($_POST['question3'] == "B"){
    $sophrologie += 1;
    $boxe += 1;
    $ateliercrea +=1;
}
if($_POST['question3'] == "C"){
    $boxe += 1;
}
###Question 4###
if($_POST['question4'] == "B"){
    $sophrologie += 1;
    $boxe += 1;    
}


   


$arra = ["sophrologie" =>$sophrologie, "boxe" =>$boxe, "ateliercrea" =>$ateliercrea];


foreach ($arra as $nom => $nombre_votes) {
    if ($nombre_votes > $max_votes) {
        $max_votes = $nombre_votes;
        $nom_max = $nom;
    }
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mood Sense</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-questionnaire.css">
</head>
<body>
    <header>
        <nav class="nav-header">
                <div class="center-all"></div>
                <ul class="dynamique-island">
                    <a href="../index.html" class="logo"></a>
                    <div class="header-container">
                        <li><a href="../index.html#activite">Activité</a></li>
                        <li><a href="../index.html#Apropos">Moodometre</a></li>
                        <li><a href="../index.html#temoignage">Témoignage</a></li>
                    </div>
                   
                </ul>
        </nav>
    </header>
    <main>
        <div class="container-questionnaire">
            <h1>Notre suggestion</h1>
        </div>
        <?php 
        if($nom_max === "boxe"){
            echo "<div class='container-resultat'>
            La boxe, un refuge pour les étudiants, hommes et femmes, cherchant à se détendre dans un environnement stressant. Dans ce sport, chaque coup devient une libération, chaque mouvement une affirmation de soi. Entraînement intense, libération d'endorphines et esprit de communauté offrent une échappatoire saine et un soutien précieux. Enfiler les gants devient ainsi bien plus qu'un exercice physique, c'est un moyen de trouver la paix intérieure et la force nécessaire pour affronter les défis du quotidien.
            <div class='container-boxe'><a href='../pages/boxe.html'>
                    <div class='container-boxe-content'>
                        <img src='../img/logo-boxe.svg' alt='Logo représentant des gants de boxe' width='20%'>
                        <p style='margin:auto;'>Boxe</p>
                    </div></a>
                </div>
                </div>";}
        if($nom_max === "sophrologie"){
            echo "<div class='container-resultat'>
            La sophrologie, un havre de paix pour les étudiants, hommes et femmes, cherchant à se détendre dans un environnement stressant. Dans cette pratique, chaque séance devient un moment de calme et de relaxation profonde. Grâce à des techniques de respiration, de visualisation et de détente musculaire, la sophrologie permet de relâcher les tensions mentales et physiques accumulées. En apprenant à se connecter avec leur corps et leur esprit, les étudiants trouvent un refuge tranquille où ils peuvent retrouver l'équilibre et la sérénité. La sophrologie devient ainsi bien plus qu'une simple méthode de relaxation, c'est un outil précieux pour gérer le stress et cultiver un bien-être durable.
            <div class='container-boxe'><a href='../pages/sophrologie.html'>
                    <div class='container-boxe-content'>
                        <img src='../img/logo-yinyang.svg' alt='Logo représentant des gants de boxe' width='20%'>
                        <p style='margin:auto;'>Sophrologie</p>
                    </div></a>
                </div>
                </div>";
            }
        if($nom_max === "ateliercrea"){
            echo "<div class='container-resultat'>
            Les ateliers créatifs, une oasis de calme et d'inspiration pour les étudiants, hommes et femmes, en quête de détente dans un environnement stressant. Dans ces sessions, chaque moment devient une exploration de la créativité et de l'expression personnelle. Que ce soit à travers la peinture, le dessin, l'écriture ou d'autres formes d'art, les étudiants sont invités à laisser libre cours à leur imagination. Ces ateliers offrent un espace sécurisé où les soucis du quotidien s'estompent au profit de la joie de créer. En se plongeant dans des activités artistiques, les participants trouvent une échappatoire salutaire et un moyen de se reconnecter avec eux-mêmes. Les ateliers créatifs deviennent ainsi bien plus qu'une simple diversion, ils deviennent un refuge où l'on trouve inspiration, détente et satisfaction personnelle.
            <div class='container-boxe'><a href='../sophrologie.html'>
                    <div class='container-boxe-content'>
                        <img src='../img/logo-crea.svg' alt='Logo représentant des gants de boxe' width='20%'>
                        <p style='margin:auto;'>Atelier créatif</p>
                    </div></a>
                </div>
                </div>";
            }
        
        

        
        ?>



    <script src="../script/script.js"></script>
    <script src="../script/scriptheader.js"></script>
    </body>
</html>
<?php 
    if(isset($_POST['email'])){
        $txt = file_get_contents("../php/bd.txt");
        file_put_contents("../php/bd.txt","/".$_POST['email'].";".$nom_max, FILE_APPEND);
    }
        
?>