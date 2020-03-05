<?php
    abstract class Individu {
        protected $_nom ;
        protected $_prenom ;
        protected $_sexe;
        protected $_naissance ;

        // CONSTRUCTEUR
        
        function __construct($nom="", $prenom="", $sexe="", $naissance="NOW")
        {
            $cSex = substr(mb_strtoupper($sexe), 0, 1) ;

            $this->_nom = ucwords($nom) ;
            $this->_prenom = ucwords($prenom) ;

            switch ($cSex) {
                case "M":
                case "F":
                    $this->_sexe = $cSex ;
                    break ;
                default:
                    $this->_sexe = "-" ;
                    break ;
            }

            $this->_naissance = new DateTime($naissance) ;
        }

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString()
        {
            return $this->getIdentite()." [ ".$this->getSexe()." | ".$this->getNaissance()." ]" ;
        }

        // GETTERS (ACCESSEURS)

        function getNom() {
            return $this->_nom ;
        }

        function getPrenom() {
            return $this->_prenom ;
        }

        function getIdentite() {
            return $this->_prenom." ".$this->_nom ;
        }

        function getSexe() {
            return $this->_sexe ;
        }

        function getNaissance() {
            return $this->_naissance->format("Y/m/d") ;
        }

        function getAnniversaire() {
            return $this->_naissance->format("d/m/Y") ;
        }

        // SETTERS (MUTATEURS)

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE
    }
?>