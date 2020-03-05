<?php

    function compareDeuxIndividus ($arg1, $arg2) { 
        $id1 = $arg1->getNom().$arg1->getPrenom();
        $id2 = $arg2->getNom().$arg2->getPrenom();

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxGenres ($arg1, $arg2) { 
        $id1 = $arg1->getLibelle();
        $id2 = $arg2->getLibelle();

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxFilms ($arg1, $arg2) { 
        $id1 = $arg1->getSortie().$arg1->getTitre();
        $id2 = $arg2->getSortie().$arg2->getTitre();

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxRoles ($arg1, $arg2) { 
        $id1 = implode(" ",array_reverse(explode(" ",$arg1->getPersonnage()))) ;
        $id2 = implode(" ",array_reverse(explode(" ",$arg2->getPersonnage()))) ;

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxActeursFilms ($arg1, $arg2) { 
        $id1 = $arg1[1]->getAnnee().$arg1[0]->getNom().$arg1[0]->getPrenom();
        $id2 = $arg2[1]->getAnnee().$arg2[0]->getNom().$arg2[0]->getPrenom();

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxActeursRoles ($arg1, $arg2) { 
        $id1 = $arg1[0]->getNom().$arg1[0]->getPrenom();
        $id2 = $arg2[0]->getNom().$arg2[0]->getPrenom();

        return ($id1 < $id2 ? -1 : ($id1 > $id2 ? 1 : 0)) ; 
    }

    function compareDeuxRolesFilms ($arg1, $arg2) { 
        $id1 = $arg1[1]->getAnnee();
        $id2 = $arg2[1]->getAnnee();

        return ($id1 - $id2) ; 
    }

?>