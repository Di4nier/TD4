<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD4 Controlleur</title>
</head>
<body>

    <?php
    require_once '../model/ModelVoiture.php'; // chargement du modèle
    $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
    require '../view/voiture/list.php'; //redirige vers la vue

?>

</body>
</html>