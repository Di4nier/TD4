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
    class ControllerVoiture{
        public static function readAll(){
            $tab_v = ModelVoiture::getAllVoitures(); //appel au modèle pour gerer la BD
            require '../view/voiture/list.php'; //redirige vers la vue
        }

        public static function read($immat){
            $tab_voit = ModelVoiture::getVoitureByImmat($immat);
            require '../view/voiture/detail.php';
        }

        public static function create(){
            require '../view/voiture/create.php';
        }

        public static function created($i,$m,$c){
            ModelVoiture::Save($i, $m, $c);
        }
    }
    ?>

</body>
</html>