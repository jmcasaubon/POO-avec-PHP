<?php
    class Genre {
        private $_libelle ;
        private $_films = [] ;

        // CONSTRUCTEUR

        function __construct ($libelle) {
            $this->_libelle = $libelle ;
        }

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString () {
            // return "Genre : ".$this->getLibelle() ;

            $str = "Genre : [ '".$this->getLibelle()."'" ;

            $nbFilms = $this->getNbFilms() ;
            $str .= " associé à ".$nbFilms." film".($nbFilms > 1 ? "s" : "")." :" ;
            for ($idx = 0 ; $idx < $nbFilms ; $idx++)
                $str .= ($idx > 0 ? ", '" : " '").$this->getFilm($idx)->getTitreAbrege(24)."'" ;
            $str .= " ]" ;

            return $str ;
         }

        // GETTERS (ACCESSEURS)

        function getLibelle () {
            return $this->_libelle ;
        }

        function getNbFilms () {
            return count($this->_films) ;
        }
        
        function getFilms () {
            return $this->_films ;
        }

        function getFilm($idx = 0) {
            return $this->_films[$idx] ;
        }
 
        // SETTERS (MUTATEURS)

        function ajouterFilm(Film $film) {
            $this->_films[] = $film ;
        }

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE

        function filmographie() {
            $tFilms = $this->getFilms() ;

            usort ($tFilms, function($arg1, $arg2) { return $arg1->getAnnee() - $arg2->getAnnee() ; }) ;

            $tFilmo = "<table class='tableau'>
                            <thead>
                                <tr>
                                    <th colspan='4'>".$this->getLibelle()."</th>
                                </tr>
                                <tr>
                                    <th>Ann&eacute;e</th>
                                    <th>Film</th>
                                    <th>Affiche</th>
                                    <th>R&eacute;alisateur</th>
                                </tr>
                            </thead>
                            <tbody>" ;

            foreach ($tFilms as $film) {               
                $tFilmo .="     <tr>
                                    <td>".$film->getAnnee()."</td>
                                    <td>".$film->getTitreAbrege(64)."</td>
                                    <td class='vignette'><img src='".$film->getAffiche()."' alt='Affiche du film &laquo;".$film->getTitre()."&raquo;'></td>
                                    <td>".$film->getRealisateur()->getIdentite()."</td>
                                </tr>" ;
            }

            $tFilmo .= "    </tbody>
                        </table>" ;

            return $tFilmo ;
        }
    }
?>