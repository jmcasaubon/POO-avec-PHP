<?php
    class Role {
        private $_personnage ;
        private $_films = [] ;
        private $_castings = [] ;

        // CONSTRUCTEUR

        function __construct($personnage, Film ...$films) {
            $this->_personnage = $personnage ;
            $this->_films = $films ;
        }
        
        // METHODE MAGIQUE D'AFFICHAGE

        function __toString()
        {
            $str = "Personnage : [ '".$this->getPersonnage()."'" ;

            $nbFilms = $this->getNbFilms() ;
            $str .= " dans ".$nbFilms." film".($nbFilms > 1 ? "s" : "")." :" ;
            for ($idx = 0 ; $idx < $nbFilms ; $idx++)
                $str .= ($idx > 0 ? ", '" : " '").$this->getFilm($idx)->getTitreAbrege(24)."'" ;
            $str .= " ]" ;

            return $str ;
        }

        // GETTERS (ACCESSEURS)

        function getPersonnage() {
            return $this->_personnage ;
        }

        function getNbFilms () {
            return count($this->_films) ;
        }
        
        function getFilms() {
            return $this->_films ;
        }

        function getFilm($idx = 0) {
            return $this->_films[$idx] ;
        }

        function getCastings() {
            return $this->_castings ;
        }

        // SETTERS (MUTATEURS)

        function ajouterCasting (Acteur $acteur, Film $film) {
            array_push($this->_castings, [$acteur, $film]) ;
        }

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE

        function distribution() {
            $tCasts = $this->getCastings() ;

            usort ($tCasts, 'compareDeuxActeursFilms') ;

            $tDistr = "<table class='tableau'>
                            <thead>
                                <tr>
                                    <th colspan='4'>".$this->getPersonnage()." </th>
                                </tr>
                                <tr>
                                    <th>Ann&eacute;e</th>
                                    <th>Acteur</th>
                                    <th>Film</th>
                                    <th>Affiche</th>
                                </tr>
                            </thead>
                            <tbody>" ;

            foreach ($tCasts as $cast) {               
                $tDistr .="     <tr>
                                    <td>".$cast[1]->getAnnee()."</td>
                                    <td>".$cast[0]->getIdentite()."</td>
                                    <td>".$cast[1]->getTitreAbrege(24)."</td>
                                    <td class='vignette'><img src='".$cast[1]->getAffiche()."' alt='Affiche du film &laquo;".$cast[1]->getTitre()."&raquo;'></td>
                                </tr>" ;
            }
            
            $tDistr .= "    </tbody>
                        </table>" ;

            return $tDistr ;
        }

    }
?>