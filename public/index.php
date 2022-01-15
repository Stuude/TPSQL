<?php 


// 13.a) AFFICHER LES ARTICLES
echo 'AFFICHAGE DES ARTICLES';
echo '<br>';
require("../bdd/index.php");


$con=bd();
$data=$con->query("SELECT * FROM `article`");

foreach($data as $result){
    echo $result['nom'];
};


// 13.C) 

$sql="SELECT count(*) FROM `utilisateur`";

$sql="SELECT count(*) FROM `article`";

// 13.D

$sql="SELECT * FROM `article`";

// 13.E

$sql="SELECT * FROM `article` GROUP BY `utilisateur`";

// 14

// Case WHEN : est une condition par exemple lorsque qu'on veut quelque chose a une certaine condition (ex: afficher les  utilisateurs ayant posté plus de 5 articles)

$sql="SELECT * FROM `article` GROUP BY `utilisateur` WHEN article > 5 ";

// GROUP BY Lorsqu'on veut afficher quelque chose et trier par quelque chose d'autres

$sql="SELECT * FROM `article` GROUP BY `utilisateur`";



?>

<p>  </p>
