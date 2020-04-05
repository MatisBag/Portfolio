<?php
session_start();
if (empty($_SESSION))
{
    header ('location:../login.php?acces');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Liste utilisateurs</title>
</head>

<body>

    <main>

        <?php
        echo('<table>');
        echo('<thead>');
        echo('<tr>');
        echo('<th>Sexe</th>');
        echo('<th>Prenom</th>');
        echo('<th>Nom</th>');
        echo('<th>Mail</th>');
        echo('<th>Mot de passe</th>');
        echo('<th>photo</th>');
        echo('</tr>');
        echo('</thead>');
        echo('<tbody>');
         
$row = 1;
if (($handle = fopen("../comptes.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
         
        $num = count($data);
        $row++;
        
        echo('<tr>');
        for ($c=0; $c < $num; $c++) {
            echo utf8_decode('<td>'.$data[$c]."</td>\n");
        }
        echo('</tr>');
        
    }
    echo('</tbody>');
    echo('<table>');

    $row = $row - 1;
    echo('Il y a '.$row.' comptes');
    fclose($handle);
}
?>

    </main>
</body>

</html>