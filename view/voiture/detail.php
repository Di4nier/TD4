<!DOCTYPE html>
    <html>
        <head>
        <meta charset="UTF-8">
        <title>Voiture By Immat</title>
    </head>
<body>
    <?php

    $nbr = 1;

    foreach($tab_voit as $v){
        echo '<ul> <li> ' .$nbr .' </li> </ul>';
        echo '<p> Voiture d\'immatriculation ' .  $v->getImmatriculation() . '.</p>';
        echo '<p> Voiture de couleur ' . $v->getCouleur() . '.</p>';
        echo '<p> Voiture de Marque ' . $v->getMarque() . '.</p>';
        $nbr = $nbr + 1;
        echo '<br>';
    }
        
    ?>
</body>

</html>