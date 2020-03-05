<?php
    class Acteur extends Individu {
        private $_castings = [] ;

        // CONSTRUCTEUR

        // Aucune nouvelle propriété à gérer => le constructeur "parent" suffit !

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString()
        {
            return "Acteur : ".parent::__toString() ;
        }

        // GETTERS (ACCESSEURS)

        function getCastings() {
            return $this->_castings ;
        }

        // SETTERS (MUTATEURS)

        function ajouterCasting (Role $role, Film $film) {
            array_push($this->_castings, [$role, $film]) ;
        }

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE

        function filmographie() {
            $tCasts = $this->getCastings() ;

            usort ($tCasts, 'compareDeuxRolesFilms') ;

            $tFilmo = "<table class='tableau'>
                            <thead>
                                <tr>
                                    <th colspan='5'>".$this->getIdentite()." (".$this->getAnniversaire().")</th>
                                </tr>
                                <tr>
                                    <th>Ann&eacute;e</th>
                                    <th>R&ocirc;le</th>
                                    <th>Film</th>
                                    <th>Affiche</th>
                                    <th>Genre</th>
                                </tr>
                            </thead>
                            <tbody>" ;

            foreach ($tCasts as $cast) {               
                $tFilmo .="     <tr>
                                    <td>".$cast[1]->getAnnee()."</td>
                                    <td>".$cast[0]->getPersonnage()."</td>
                                    <td>".$cast[1]->getTitreAbrege(24)."</td>
                                    <td class='vignette'><img src='".$cast[1]->getAffiche()."' alt='Affiche du film &laquo;".$cast[1]->getTitre()."&raquo;'></td>
                                    <td>".$cast[1]->getListeGenres()."</td>
                                </tr>" ;
            }

            $tFilmo .= "    </tbody>
                        </table>" ;

            return $tFilmo ;
        }

    }
?>