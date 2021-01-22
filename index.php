<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Affichage d'un fichier txt</title>
</head>
<body>
<h1>Lorem Ipsum</h1>
<?php
$f = fopen("fichier.txt", "r"); // J'ouvre le fichier texte en lecture seule ("r")

while($ligne = fgets($f)) {
    echo "<p>";
    echo $ligne;
    echo "</p>";
}
?>
</body>
</html>