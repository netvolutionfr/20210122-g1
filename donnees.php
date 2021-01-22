<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Données lues depuis un fichier CSV</title>
</head>
<body>
<h1>Données lues depuis un CSV</h1>
<?php
$f = fopen("donnees.csv", "r");
while($ligne = fgets($f)) {
    $donnees = explode(";", $ligne);
    // $donnees est un tableau PHP (l'équivalent d'une liste, pour ceux qui ont fait du Python)

    echo "<ul>";

    echo "<li>";
    echo "Nom : ";
    echo $donnees[0];
    echo "</li>";

    echo "<li>";
    echo "Prénom : ";
    echo $donnees[1];
    echo "</li>";

    echo "<li>";
    echo "Email : ";
    echo $donnees[2];
    echo "</li>";

    echo "</ul>";
}
?>
</body>
</html>