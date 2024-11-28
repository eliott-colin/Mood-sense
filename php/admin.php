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
            <table style="border-collapse: collapse;
  border: 2px solid rgb(140 140 140);
  font-family: sans-serif;
  font-size: 0.8rem;
  letter-spacing: 1px;">
                <tr>
                    <td>Email</td>
                    <td>Participations</td>
                    <td>Boxe</td>
                    <td>Sophrologie</td>
                    <td>Atelier Créatif</td>
                </tr>
                
            
            <?php 
            $txt = file_get_contents("../php/bd.txt"); 
            $user = explode("/",$txt);
            $listemails=[];
            

            foreach ($user as $key => $value) {
                $email = explode(";",$user[$key]);
                foreach ($email as $clef => $value) {
                    $check = true;
                    if($clef%2 == 0){
                        foreach ($listemails as $dollars => $value) {
                            if($listemails[$dollars] == $email[$clef]){
                                $check = false;
                            }
                        }
                        array_push($listemails,$email[$clef]);
                        if($check){$countboxe = substr_count($txt, $email[$clef].";".'boxe');
                            $countsophrologie = substr_count($txt, $email[$clef].";".'sophrologie');
                            $countAtelier = substr_count($txt, $email[$clef].";".'ateliercrea');
                            $counttotal = $countboxe+$countsophrologie+$countAtelier;
                            echo "<tr>
                                <td>$email[$clef]</td>
                                <td>$counttotal</td>
                                <td>$countboxe</td>
                                <td>$countsophrologie</td>
                                <td>$countAtelier</td>
                                </tr>";}
                        
                    } 
                }
            }
            
            ?>
            </table>
        </div>




        <script src="../script/script.js"></script>
    <script src="../script/scriptheader.js"></script>
    </body>
</html>