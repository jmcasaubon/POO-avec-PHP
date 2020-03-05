<?php
    class Film {
        private $_titre ;
        private $_realisateur ;
        private $_sortie ;
        private $_duree ;
        private $_synopsis ;
        private $_affiche ;
        private $_genres = [] ;
        private $_castings = [] ;

        // CONSTRUCTEUR

        public function __construct($titre="", Realisateur $realisateur, $sortie="NOW", $duree=90, $synopsis="", $affiche, Genre ...$genres)
        {
            $this->_titre = $titre ;
            $this->_sortie = new DateTime($sortie) ;
            $this->_duree = $duree ;
            $this->_synopsis = $synopsis ;
            $this->_affiche = $affiche ;
            $this->_genres = $genres ;
            $this->_realisateur = $realisateur ;

            foreach ($genres as $genre) 
                $genre->ajouterFilm($this) ;  

            $realisateur->ajouterFilm($this) ;
        }

        // METHODE MAGIQUE D'AFFICHAGE

        function __toString()
        {
            $str  = "Film : [ '".$this->getTitre()."'" ;
            $str .= " | ".$this->getAnnee() ;
            $str .= " | ".$this->getDuree()." mn" ;
            $str .= " | &laquo;".$this->getSynopsisAbrege()."&raquo;" ;
            $str .= " | ".$this->getListeGenres()." ]" ;

            return $str ;
        }

        // GETTERS (ACCESSEURS)

        public function getTitre()
        {
            return $this->_titre ;
        }

        public function getTitreAbrege($lim)
        {
            if (strlen($this->_titre) > $lim)
                return substr($this->_titre, 0, ($lim - 3))."..." ;
            else
                return $this->_titre ;
        }

        public function getSortie()
        {
            return $this->_sortie->format("Y/m/d");
        }
        
        public function getAnnee()
        {
            return $this->_sortie->format("Y") ;
        }

        public function getDuree()
        {
            return $this->_duree ;
        }

        public function getDureeHrMn()
        {
            return sprintf("%dh%02d%s", ($this->_duree / 60), ($this->_duree % 60), "&rsquo;") ;
        }

        public function getSynopsis()
        {
            return $this->_synopsis ;
        }

        public function getSynopsisAbrege($lim = 72)
        {
            if (strlen($this->_synopsis) > $lim)
                return substr($this->_synopsis, 0, ($lim - 3))."..." ;
            else
                return $this->_synopsis ;
        }

        public function getAffiche() {
            return $this->_affiche ;
        }

        public function getGenres()
        {
            return $this->_genres ;
        }

        public function getListeGenres()
        {   
            $liste = "" ;
            $separ = "" ;

            foreach ($this->_genres as $genre) {
                $liste .= $separ.$genre->getLibelle() ;
                $separ =", " ;
            }

            return $liste ;
        }

        public function getRealisateur()
        {
            return $this->_realisateur ;
        }

        public function getCastings()
        {
            return $this->_castings ;
        }

        // SETTERS (MUTATEURS)

        function ajouterCasting (Acteur $acteur, Role $role) {
            array_push($this->_castings, [$acteur, $role]) ;
        }

        // AUTRES METHODES DE MANIPULATION DES INSTANCES DE LA CLASSE

        function distribution() {
            $tCasts = $this->getCastings() ;

            usort ($tCasts, 'compareDeuxActeursRoles') ;

            $tDistr = "<table class='tableau'>
                            <thead>
                                <tr>
                                    <th colspan='2'>".$this->getTitre()." (".$this->getRealisateur()->getIdentite()." - ".$this->getAnnee()." - ".$this->getDureeHrMn()." - ".$this->getListeGenres().")</th>
                                </tr>
                                <tr class='affiche'>
                                    <th colspan='2'><img src='".$this->getAffiche()."' alt='Affiche du film &laquo;".$this->getTitre()."&raquo;'.></th>
                                </tr>
                                <tr>
                                    <th>Acteur</th>
                                    <th>R&ocirc;le</th>
                                </tr>
                            </thead>
                            <tbody>" ;

            foreach ($tCasts as $cast) {               
                $tDistr .="     <tr>
                                    <td>".$cast[0]->getIdentite()."</td>
                                    <td>".$cast[1]->getPersonnage()."</td>
                                </tr>" ;
            }
            
            $tDistr .= "        <tr>
                                    <td class='texte' colspan='2'>".$this->getSynopsis()."</td>
                                </tr>
                            </tbody>
                        </table>" ;

            return $tDistr ;
        }

    }
?>