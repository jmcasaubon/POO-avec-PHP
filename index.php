<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>Exercice PHP & POO</title>
    </head>
    <body>
        <?php
            spl_autoload_register(function ($className) {
                include "class/".$className.'.class.php' ;
            });
            
            require "php/tris.php" ;
            require "php/test.php" ;

            // foreach ($tblActeurs as $acteur) {
            //     echo $acteur->filmographie() ;
            // }
            // foreach ($tblRealisateurs as $realisateur) {
            //     echo $realisateur->filmographie() ;
            // }
            // foreach ($tblGenres as $genre) {
            //     echo $genre->filmographie() ;
            // }
            // // foreach ($tblFilms as $film) {
            //     echo $film->distribution() ;
            // }
            // foreach ($tblRoles as $role) {
            //     echo $role->distribution() ;
            // }

            echo $a8->filmographie() ;
            echo $r3->filmographie() ;

            echo $f2->distribution() ;
            echo $f10->distribution() ;
            
            echo $p11->distribution() ;

            echo $g1->filmographie() ;
        ?>
    </body>
</html>