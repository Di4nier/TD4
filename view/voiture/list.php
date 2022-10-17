<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
<body>
    <?php

    $nbr = 1;

        foreach($tab_v as $v){
            echo '<ul> <li> ' .$nbr .' </li> </ul>';
            echo '<p> Voiture d\'immatriculation ' . '<a href="../controller/routeur.php?action=read&immat='.$v->getImmatriculation().'">' . $v->getImmatriculation() .'</a>' . '.</p>';
            $nbr = $nbr + 1;
            echo '<br>';
        }
    ?>
</body>

</html>