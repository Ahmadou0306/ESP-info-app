<?php

    class Article{
        private $id;
        private $titre;
        private $contenu;
        private $dateCreation;
        private $dateModification;
        private $categorie;
        
        

        function __construct($id,$titre,$contenu,$dateCreation,$dateModification,$categorie){
            $this->id=$id;
            $this->titre=$titre;
            $this->contenu=$contenu;
            $this->dateCreation=$dateCreation;
            $this->dateModification=$dateModification;
            $this->categorie=$categorie;
        }
        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id=$id;
        }
        function getTitre(){
            return $this->titre;
        }
        function setTitre($titre){
            $this->titre=$titre;
        }
        function getContenu(){
            return $this->contenu;
        }
        function setContenu($contenu){
            $this->contenu=$contenu;
        }
        function getDateCreation(){
            return $this->dateCreation;
        }
        function setDateCreation($dateCreation){
            $this->dateCreation=$dateCreation;
        }
        
        function getdDateModification(){
            return $this->dateModification;
        }
        function setDateModification($dateModification){
            $this->dateModification=$dateModification;
        }
        function getCategorie(){
            return $this->categorie;
        }
        function setCategorie($categorie){
            $this->categorie=$categorie;
        }





        
    }
    