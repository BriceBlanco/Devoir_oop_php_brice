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
    }