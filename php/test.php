<?php

    $a1 = new Acteur ("Tarantino", "Quentin", "M", "1963/03/27") ;
    $a2 = new Acteur ("Sheen", "Charlie", "M", "1965/09/03") ;
    $a3 = new Acteur ("Berenger", "Tom", "M", "1949/05/31") ;
    $a4 = new Acteur ("Dafoe", "Willem", "M", "1955/07/22") ;
    $a5 = new Acteur ("Travolta", "John", "M", "1954/02/18") ;
    $a6 = new Acteur ("Jackson", "Samuel L.", "M", "1948/12/21") ;
    $a7 = new Acteur ("Thurman", "Uma", "F", "1970/04/29") ;
    $a8 = new Acteur ("Willis", "Bruce", "M", "1955/03/19") ;
    $a9 = new Acteur ("Rhames", "Ving", "M", "1959/05/12") ;
    $a10 = new Acteur ("Connery", "Sean", "M", "1930/08/25") ;
    $a11 = new Acteur ("Moore", "Roger", "M", "1927/10/14") ;
    $a12 = new Acteur ("Dalton", "Timothy", "M", "1946/03/21") ;
    $a13 = new Acteur ("Craig", "Daniel", "M", "1968/03/02") ;

    $tblActeurs = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13] ;
    usort ($tblActeurs, 'compareDeuxIndividus') ;

    $r1 = new Realisateur ("Tarantino", "Quentin", "M", "1963/03/27") ;
    $r2 = new Realisateur ("Stone", "Oliver", "M", "1946/09/15") ;
    $r3 = new Realisateur ("Mc Tiernan", "John", "M", "1951/01/08") ;
    $r4 = new Realisateur ("Young", "Terence", "M", "1915/06/20") ;
    $r5 = new Realisateur ("Hamilton", "Guy", "M", "1922/09/16") ;
    $r6 = new Realisateur ("Glen", "John", "M", "1932/05/15") ;
    $r7 = new Realisateur ("Campbell", "Martin", "M", "1943/10/24") ;
    $r8 = new Realisateur ("Thorp", "Roderick", "M", "1936/09/01") ;
    $r9 = new Realisateur ("Wiseman", "Len", "M", "1973/03/04") ;
    $r10 = new Realisateur ("Moore", "John", "M", "1970") ;

    $tblRealisateurs = [$r1, $r2, $r3, $r4, $r5, $r6, $r7, $r8, $r9, $r10] ;
    usort ($tblRealisateurs, 'compareDeuxIndividus') ;

    $g1 = new Genre ("Drame") ;
    $g2 = new Genre ("Guerre") ;
    $g3 = new Genre ("Action") ;
    $g4 = new Genre ("Espionnage") ;

    $tblGenres = [$g1, $g2, $g3, $g4] ;
    usort ($tblGenres, 'compareDeuxGenres') ;

    $f1 = new Film ("Platoon", $r2, "1987/03/25", 120, "Parti combattre au Vietnam avec enthousiasme, un jeune soldat américain déchante rapidement en découvrant les horreurs de la guerre.", "img/Platoon.jpg", $g1, $g2) ;
    $f2 = new Film ("Pulp Fiction", $r1, "1994/10/26", 178, "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood, à travers trois histoires qui s'entremêlent. Dans un restaurant, un couple de jeunes braqueurs, Pumpkin et Yolanda, discutent des risques que comporte leur activité. Deux truands, Jules Winnfield et son ami Vincent Vega, qui revient d'Amsterdam, ont pour mission de récupérer une mallette au contenu mystérieux et de la rapporter à Marsellus Wallace.", "img/Pulp_Fiction.jpg", $g1) ;
    $f3 = new Film ("Piège de Cristal - Die Hard", $r3, "1988/09/21", 132, "Un policier new-yorkais, John McClane, est séparé de sa femme Holly, cadre dans une puissante multinationale japonaise, la Nakatomi Corporation. Venu à Los Angeles passer les fêtes avec elle, il se rend à la tour Nakatomi où le patron donne une grande soirée. Tandis que John s'isole pour téléphoner, un groupe de terroristes allemands, dirigé par Hans Gruber, pénètre dans l'immeuble.", "img/Piege_de_cristal.jpg", $g3) ;
    $f4 = new Film ("Une journée en Enfer - Die Hard with a Vengeance", $r3, "1995/08/02", 128, "Le lieutenant John McClane est de retour et il est demandé en personne par un terroriste, Simon, qui menace New York. Alors qu'il fait équipe avec Zeus, un commerçant du quartier d'Harlem embarqué dans l'aventure malgré lui, McLane se livre à un petit jeu à travers toute la ville, devant résoudre des énigmes. S'il rate son coup, une bombe explose, c'est la règle imposée par Simon.", "img/Une_journee_en_enfer.jpg", $g3) ;
    $f5 = new Film ("James Bond 007 contre Dr No", $r4, "1963/01/27", 111, "Le chef des services secrets de Sa Majesté britannique, &laquo;M&raquo;, envoie en mission à la Jamaïque l'agent spécial 007, James Bond, enquêter sur la disparition d'un de ses collègues. L'espion va affronter la puissance maléfique de Spectre, organisation criminelle qui vise à la domination du monde, personnifiée par le redoutable Dr No. Au gré de ses aventures il rencontrera la sublime Honey, qui surgit de l'eau vêtue d'un bikini blanc.", "img/James_Bond_007_contre_Dr_No.jpg", $g4) ;
    $f6 = new Film ("Bons Baisers de Russie", $r4, "1964/07/30", 118, "À Venise, Kronsteen, grand champion d'échecs et membre du Spectre, a été chargé par Blofeld de rallumer la guerre froide entre l'Est et l'Ouest. Avec l'aide de Rosa Klebb, ex-chef des services secrets soviétiques, il a mis au point une stratégie qui passe par Istanbul et le vol du nouveau lecteur de déchiffrement soviétique. Persuadé que les britanniques vont mordre à l'hameçon qu'il leur tend et qu'ils vont envoyer sur place James Bond, il charge Klebb de recruter une jeune femme au sein du consulat russe, dont le rôle sera de séduire Bond, de l'aider à s'emparer du lecteur et de le livrer.", "img/Bons_baisers_de_Russie.jpg", $g4) ;
    $f7 = new Film ("Goldfinger", $r5, "1965/02/18", 112, "L'agent secret 007 est chargé d'enquéter sur les revenus d'Auric Goldfinger. La banque d'Angleterre a découvert qu'il entreposait d'énormes quantités d'or, mais s'inquiète de ne pas savoir dans quel but. Quelques verres, parties de golf, poursuites et autres aventures galantes plus loin, James Bond découvre en réalité les préparatifs du &laquo;crime du siècle&raquo;, dont les retombées pourraient amener le chaos économique sur les pays développés du bloc Ouest.", "img/Goldfinger.jpg", $g4) ;
    $f8 = new Film ("Vivre et laisser mourir", $r5, "1973/12/21", 121, "007 est appelé à la rescousse pour mettre fin à l'hécatombe meurtrière qui décime les agents secrets britanniques. Enquêtant à New York, dans le quartier de Harlem, il affronte un caïd de la drogue, le redoutable docteur Kananga et sa comparse, l'étrange Blanche Solitaire.", "img/Vivre_et_laisser_mourir.jpg", $g4) ;
    $f9 = new Film ("Tuer n'est pas jouer", $r6, "1987/09/16", 130, "Après que Bond a aidé un officier soviétique à traverser le Rideau de Fer pour passer à l'Ouest, il découvre avec stupeur que celui-ci a été retrouvé et kidnappé. La piste le mène sur les traces d'une belle violoncelliste, Kara, qui va l'entraîner dans une suite de situations dangereuses, avec comme paroxysme une base militaire en Afghanistan où il doit stopper un trafic d'armes.", "img/Tuer_n_est_pas_jouer.jpg", $g4) ;
    $f10 = new Film ("Casino Royale", $r7, "2006/11/22", 144, "James Bond vient d'obtenir le statut d'agent 00 au sein du MI6. Après une mission qui se solde par la destruction d'une ambassade à Madagascar, Bond est envoyé en vacances. Il poursuit cependant sa mission à Nassau. Il rencontre des agents terroristes qui travaillent pour un certain Le Chiffre. Bond va alors traquer celui-ci jusqu'au Monténégro et y mènera sa première mission, qu'il réussira au prix d'importants sacrifices.", "img/Casino_Royale.jpg", $g3, $g4) ;
    $f11 = new Film ("58 minutes pour vivr - Die Harder", $r8, "1990/10/03", 123, "Washington, 1989. Il reste exactement 58 minutes avant l'atterrissage de l'avion du général Ramon Esperanza sur le tarmac de l'aéroport de Washington-Dulles. Le général doit être traduit devant la justice américaine pour trafic de stupéfiants. Au sol, un groupe de mercenaires, dirigé par le colonel Stuart, fait chanter les autorités en coupant les communications entre la tour de contrôle et les appareils en vol afin de faire évader Esperanza. Mais un imprévu de taille se manifeste bientôt en la personne du lieutenant de police John McClane, qui est sur place dans l'attente de l'arrivée du vol de son épouse.", "img/58_minutes_pour_vivre.jpg", $g3) ;
    $f12 = new Film ("Retour en enfer - Live Free or Die Hard", $r9, "2007/07/04", 129, "Des hackers s'attaquent aux différentes infrastructures des États-Unis dans le but d'entamer une liquidation des biens américains. L'attaque débute par la coupure des communications et le piratage du système informatique du FBI. Les cybercriminels s'en prennent ensuite aux marchés boursiers, et pour finir, ils sabotent les installations électriques et de gaz. Mais ces attaques terroristes ne sont en réalité qu'un leurre destiné à masquer les véritables intentions des hackers (ce qui n'est pas sans rappeler l'intrigue du précédent volet de la saga). Malheureusement pour eux, leur plan savamment orchestré sera chamboulé par l'intervention impromptue du lieutenant de police John McClane, escorté cette fois de Matt Farrell, le jeune hacker (et cryptographe) qu'il a été chargé d'arrêter…", "img/Retour_en_enfer.jpg", $g3) ;
    $f13 = new Film ("Belle journée pour mourir - A Good Day to Die Hard", $r10, "2013/02/20", 98, "John McClane se rend en Russie pour libérer Jack, son fils emprisonné. Il apprend que ce dernier est un agent de terrain de la CIA qui doit récupérer un dossier contenant des preuves pouvant compromettre l'ascension de Viktor Chagarin, un politicien russe haut placé. C'est Yuri Komarov, prisonnier, qui est à l'origine de ce dossier. Jack arrive à s'échapper de prison avec Yuri, et lui propose un marché : son extradition de Russie en échange du dossier. Yuri accepte, mais il se fait enlever par Alik et son équipe, qui travaillent pour Viktor. Eux aussi veulent récupérer le dossier, avec l'intention de le détruire. Yuri est emmené à Tchernobyl où est censé être le dossier, mais une fois dans la chambre forte, il tue Alik. Le reste de l'équipe d'Alik travaillait en fait pour Yuri, dont le but était de s'échapper de prison et de récupérer de l'uranium à usage militaire. Un tueur travaillant pour Yuri assassine Viktor. John et Jack arrivent à Tchernobyl, et comprennent qu'aucun dossier n'existe, et que Yuri a utilisé la CIA pour aider à sa libération. Un combat s'engage, au terme duquel Jack assassine de sang froid Yuri.", "img/Belle_journee_pour_mourir.jpg", $g3) ;

    $tblFilms = [$f1, $f2, $f3, $f4, $f5, $f6, $f7, $f8, $f9, $f10, $f11, $f12, $f13] ;
    usort ($tblFilms, 'compareDeuxFilms') ;

    $p1 = new Role ("Jimmie Dimmick", $f2) ;
    $p2 = new Role ("Soldat Chris Taylor", $f1) ;
    $p3 = new Role ("Sgt Chef Bob Barnes", $f1) ;
    $p4 = new Role ("Sgt Elias Grodin", $f1) ;
    $p5 = new Role ("Vincent Vega", $f2) ;
    $p6 = new Role ("Jules Winnfield", $f2);
    $p7 = new Role ("Mia Wallace", $f2) ;
    $p8 = new Role ("Butch Coolidge", $f2) ;
    $p9 = new Role ("Marcellus Wallace", $f2) ;
    $p10 = new Role ("John Mc Lane", $f3, $f4, $f11, $f12, $f13) ;
    $p11 = new Role ("James Bond", $f5, $f6, $f7, $f8, $f9, $f10) ;
    $p12 = new Role ("Zeus Carver", $f4) ;

    $tblRoles = [$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12] ;
    usort ($tblRoles, 'compareDeuxRoles') ;

    $d1 = new Casting ($f1, $p2, $a2) ;
    $d2 = new Casting ($f1, $p3, $a3) ;
    $d3 = new Casting ($f1, $p4, $a4) ;
    $d4 = new Casting ($f2, $p5, $a5) ;
    $d5 = new Casting ($f2, $p6, $a6) ;
    $d6 = new Casting ($f2, $p7, $a7) ;
    $d7 = new Casting ($f2, $p8, $a8) ;
    $d8 = new Casting ($f2, $p9, $a9) ;
    $d9 = new Casting ($f3, $p10, $a8) ;
    $d10 = new Casting ($f4, $p10, $a8) ;
    $d11 = new Casting ($f5, $p11, $a10) ;
    $d12 = new Casting ($f6, $p11, $a10) ;
    $d13 = new Casting ($f7, $p11, $a10) ;
    $d14 = new Casting ($f8, $p11, $a11) ;
    $d15 = new Casting ($f9, $p11, $a12) ;
    $d16 = new Casting ($f10, $p11, $a13) ;
    $d17 = new Casting ($f11, $p10, $a8) ;
    $d18 = new Casting ($f12, $p10, $a8) ;
    $d19 = new Casting ($f13, $p10, $a8) ;
    $d20 = new Casting ($f4, $p12, $a6) ;
    $d21 = new Casting ($f2, $p1, $a1) ;

    $tblCastings = [$d1, $d2, $d3, $d4, $d5, $d6, $d7, $d8, $d9, $d10, $d11, $d12, $d13, $d14, $d15, $d16, $d17, $d18, $d19, $d20, $d21] ;

    // foreach ($tblActeurs as $acteur) {
    //     echo $acteur."<br>" ;
    // }
    // echo "<br>" ;
    // foreach ($tblRealisateurs as $realisateur) {
    //     echo $realisateur."<br>" ;
    // }
    // echo "<br>" ;
    // foreach ($tblGenres as $genre) {
    //     echo $genre."<br>" ;
    // }
    // echo "<br>" ;
    // foreach ($tblFilms as $film) {
    //     echo $film."<br>" ;
    // }
    // echo "<br>" ;
    // foreach ($tblRoles as $role) {
    //     echo $role."<br>" ;
    // }
    // echo "<br>" ;
    // foreach ($tblCastings as $casting) {
    //     echo $casting."<br>" ;
    // }
    // echo "<br>" ;
?>