<?php
    class Realisateur extends Individu {
        private $_films = [] ;

        // CONSTRUCTEUR

        // Aucune nouvelle propriété à gérer => le constructeur "parent" suffit !

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString()
        {
            return "Réalisateur : ".parent::__toString() ;
        }

        // GETTERS (ACCESSEURS)

        function getFilms()
        {
            return $this->_films ;
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
                                    <th colspan='4'>".$this->getIdentite()." (".$this->getAnniversaire().")</th>
                                </tr>
                                <tr>
                                    <th>Ann&eacute;e</th>
                                    <th>Film</th>
                                    <th>Affiche</th>
                                    <th>Genre</th>
                                </tr>
                            </thead>
                            <tbody>" ;

            foreach ($tFilms as $film) {               
                $tFilmo .="     <tr>
                                    <td>".$film->getAnnee()."</td>
                                    <td>".$film->getTitreAbrege(64)."</td>
                                    <td class='vignette'><img src='".$film->getAffiche()."' alt='Affiche du film &laquo;".$film->getTitre()."&raquo;'></td>
                                    <td>".$film->getListeGenres()."</td>
                                </tr>" ;
            }

            $tFilmo .= "    </tbody>
                        </table>" ;

            return $tFilmo ;
        }

    }
?>