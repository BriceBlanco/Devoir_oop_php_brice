<?php
    require 'personne.php';

    class Enfant extends Personne
    {
        //Attribut
        private $type;

        //Constructeur
        public function __construct($personne,$type)
        {
            $this->nom = $personne->nom;
            $this->prenom = $personne->prenom;
            $this->age = $personne->age;
            $this->sexe = $personne->sexe;
            $this->fonction = $personne->fonction;
            $this->type = $type;
        }
    }