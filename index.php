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
        require 'Personne/enfant.php';
        require 'Personne/adulte.php';

        $personne1 = new Personne("NGABIRANO","Brice",25,"M","Etudiant");
        $personne2 = new Personne("NGABO","Vladimir",10,"M","Ecolier");
        $personne3 = new Personne("NAHAYO","Beatrice",25,"F","Secretaire");
        $personne4 = new Personne("NTAWE","Patrice",60,"M","Sans");
        $enfant = new Enfant($personne2,"Enfant");
        $adulte = new Adulte($personne1,"Adulte","Celibataire");

        //Test
        echo $personne1->getIdentite().'<hr>';
        echo $enfant->getIdentite().'<br>'.$enfant->typePersonne().'<hr>';
        echo $adulte->getIdentite().'<br>'.$adulte->typePersonne().'<br> Etat-Civil: '.$adulte->getEtatcivil();

    ?>
</body>
</html>