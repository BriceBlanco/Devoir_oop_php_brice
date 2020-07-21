<?php
    class Personne
    {
       // Attributs
       private $nom;
       private $prenom;
       private $age;
       private $sexe;
       private $fonction;
       
       //Constructeur
       public function __construct($nom,$prenom,$age,$sexe,$fonction)
       {
           $this->nom = $nom;
           $this->prenom = $prenom;
           $this->age = $age;
           $this->sexe = $sexe;
           $this->fonction = $fonction;
       }

       // Méthodes
       public function getIdentite() 
       {
           $identite = 'Nom: '.$this->nom.'<br> Prenom: '.$this->prenom.'<br> Age: '.$this->age
                               .'<br> Genre: '.$this->sexe.'<br> Fonction: '.$this->fonction;
           return $identite;
       }

       public function getFonction()
       {
           return 'La fonction est '.$this->fonction;
       }

       public function getAge()
       {
           return "L\'age est ".$this->age;
       }

       public function getSexe()
       {
           return 'Le genre est '.$this->sexe;
       }

       public function setSexe($sexe)
       {
           $this->sexe = $sexe;
       }

       public function setFonction($age)
       {
           $this->fonction = $fonction;
       }

       public function setAge($age)
       {
           $this->age = $age;
       }

       public function setNom($nom)
       {
           $this->nom = $nom;
       }


       public function boire()
       {
           echo 'La personne boit<br>';
       }
       
       public function manger()
       {
           echo 'La personne mange<br>';
       }

       public function dormir()
       {
           echo 'La personne dort<br>';
       }

       public function marcher()
       {
           echo 'La personne marche<br>';
       }

       public function typePersonne()
       {
           if($this->age > 0 && $this->age < 15)
               echo 'La personne est encore enfant.<br>';
           else if($this->age > 0 && $this->age > 15)
               echo 'La personne est adulte.<br>';
           else
               echo 'La personne est vieux.<br>';
       }

    }