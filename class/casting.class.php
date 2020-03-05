<?php
    class Casting {
        private $_film ;
        private $_role ;
        private $_acteur ;

        // CONSTRUCTEUR

        function __construct (Film $film, Role $role, Acteur $acteur) {
            $this->_film = $film ;
            $this->_role = $role ;
            $this->_acteur = $acteur ;

            $acteur->ajouterCasting ($role, $film) ;
            $film->ajouterCasting ($acteur, $role) ;
            $role->ajouterCasting ($acteur, $film) ;
        }

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString () {
            return "Casting : [ ".$this->getFilm()->getTitreAbrege(24)." | ". $this->getRole()->getPersonnage()." | ".$this->getActeur()->getIdentite()." ]" ;
        }

        // GETTERS (ACCESSEURS)

        function getFilm () {
            return $this->_film ;
        }

        function getRole () {
            return $this->_role ;
        }

        function getActeur () {
            return $this->_acteur ;
        }

        // SETTERS (MUTATEURS)

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE

    }
?>