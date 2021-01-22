<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Données CSV sous forme de tableau</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Liste des contacts</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $f = fopen("donnees.csv", "r");
        while($ligne = fgets($f)) {
            $donnees = explode(";", $ligne);

            echo "<tr>";

            echo "<td>";
            echo $donnees[0];
            echo "</td>";

            echo "<td>";
            echo $donnees[1];
            echo "</td>";

            echo "<td>";
            echo $donnees[2];
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>