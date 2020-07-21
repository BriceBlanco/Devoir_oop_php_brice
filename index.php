<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEVOIR_OOP_PHP_Brice</title>
</head>
<body>
    <?php
        require 'Personne/personne.php';
        require 'Personne/Adulte.php';
        require 'Personne/Enfant.php';

        $personne1 = new Personne("NGABIRANO","Brice",25,"M","Etudiant");
        $personne2 = new Personne("NGABO","Vladimir",20,"M","Etudiant");
        $personne3 = new Personne("NAHAYO","Beatrice",25,"F","Secretaire");
        $personne4 = new Personne("NTAWE","Patrice",60,"M","Sans");
    ?>
</body>
</html>