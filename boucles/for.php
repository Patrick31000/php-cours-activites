<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';




//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous

$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
 echo "8.Les mois depuis le debut de l'annee : <br>";
for ($i = 0; $i < count($mois); ++$i) {
    echo $mois[$i].'<br>';
}
echo '<br><br>';


//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = 11; $i >= 0; --$i) {
    echo $mois[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
  'Troisième' => array(
    array('Nom' => 'Bond', 'Prenom' => 'Jean'),
    array('Nom' => 'Enerve', 'Prenom' => 'Sam'),
  )
);

echo '10.Les eleves du college : <br>';
foreach ($college as $classe => $valeur) {
    echo '<br>'.$classe.": ";
    foreach ($valeur as $key => $value) {
        foreach ($value as $nom => $prenom){
    }
        echo $value["Nom"].' '.$value["Prenom"].", ";
    }
}

echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
foreach ($college as $classe => $valeur) {
    echo '<br>'.$classe.": ";
    foreach ($valeur as $key => $value) {
        foreach ($value as $nom => $prenom){
    }
        echo $value["Nom"].' '.$value["Prenom"].", ";
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
  array(
    'nom' => 'Le Parrain',
    'date' => 1972,
    'realisateur' => 'Francis Ford Coppola',
     'synopsis' => "Il s'agit d'une adaptation du roman éponyme de Mario Puzo. L'histoire s'étale de 1945 à 1955, et se centre sur l'ascension de Michael Corleone (Al Pacino), perçu comme ne pouvant prétendre à la succession d'une famille mafieuse impitoyable, la famille Corleone, dominé par son père, le patriarche Vito Corleone (Marlon Brando).",
    'acteurs' => array(
      	'Marlon Brando','Al Pacino','James Caan','Robert Duval','Diane Keaton',
    ),
  ),
  array(
    'nom' => 'Scarface',
    'date' => 1984,
    'realisateur' => 'Brian De Palma',
    'synopsis' => "Scarface est un film américain réalisé par Brian De Palma, sorti en 1983. Remake actualisé du Scarface de Howard Hawks sorti en 1932, il met en vedette Al Pacino dans le rôle de Tony Montana, petit gangster cubain émigré aux États-Unis qui va devenir au fil du temps l'un des plus grands trafiquants de drogue.",
    'acteurs' => array(
      	'Al Pacino','Steven Bauer','Michelle Pfeiffer',
    ),
  ),
  array(
    'nom' => 'Heat',
    'date' => 1995,
    'realisateur' => 'Michael Mann',
    'synopsis' => "Heat ou Tension au Québec est un film américain réalisé par Michael Mann, sorti en 1995. Le film a pour acteurs principaux Robert De Niro et Al Pacino, dans les rôles respectifs d'un chef d'une équipe de braqueurs professionnels et d'un lieutenant de police opiniâtre qui se livrent une lutte à distance et voient leurs vies privées et professionnelles se lier inéluctablement. Il s'agit du remake de L.A. Takedown, un téléfilm de Michael Mann datant de 1989.",
    'acteurs' => array(
      	'Robert De Niro','Al Pacino','Val Kilmer','Tom Sizemore',
    ),
  )
);



echo '12.Mes films : <br>';
foreach ($videotheque as $array => $value){
  foreach ($value as $key => $info){
    if (!is_array($info)){
    echo $key.': '.$info.', ';
    }
    else {
    foreach ($info as $acteurs) {
      echo $key.' '.$acteurs.' <br>';
    }
    }
  }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
echo '<br><br>';
