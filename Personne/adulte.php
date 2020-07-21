<?php
    require 'personne.php';

    class Adulte extends Personne
    {
        //Attribut
        private $type;
        private $marie;

        //Constructeur
        public function __construct($personne,$type,$marie)
        {
            $this->nom = $personne->nom;
            $this->prenom = $personne->prenom;
            $this->age = $personne->age;
            $this->sexe = $personne->sexe;
            $this->fonction = $personne->fonction;
            $this->type = $type;
            $this->marie = $marie;
        }
    }