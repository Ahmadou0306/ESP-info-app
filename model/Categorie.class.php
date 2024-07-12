<?php

    class Categorie{
        private $id;
        private $libelle;

        function __construct($id,$libelle){
            $this->id=$id;
            $this->libelle=$libelle;
        }
        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id=$id;
        }
        function getLibelle(){
            return $this->libelle;
        }
        function setLibelle($libelle){
            $this->libelle=$libelle;
        }
        
    }
    