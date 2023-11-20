<?php
include "18_database-connection.php";
global $db;

$query = $db->prepare("SELECT * FROM fietsen");
$query->execute();

$bikes = $query->fetchAll(PDO::FETCH_ASSOC);

//print_r($bikes);
//foreach ($bikes as $bike){
//    echo $bike['merk'] . " ";
//    echo $bike['type'] . " ";
//    echo $bike['prijs'] . "<br>";
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Merk</th>
                    <th scope="col">Type</th>
                    <th scope="col">Prijs</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($bikes as $bike) {
                    ?>
                    <tr>
                        <td><?= $bike['merk'] ?></td>
                        <td><?= $bike['type'] ?></td>
                        <td><?= $bike['prijs'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <td>Batavus</td>-->
                <!--                    <td>Blockbuster</td>-->
                <!--                    <td>699</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Batavus</td>-->
                <!--                    <td>Flying D</td>-->
                <!--                    <td>749</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Gazelle</td>-->
                <!--                    <td>Giro</td>-->
                <!--                    <td>899</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Gazelle</td>-->
                <!--                    <td>Chamonix</td>-->
                <!--                    <td>1049</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Gazelle</td>-->
                <!--                    <td>Eclipse</td>-->
                <!--                    <td>799</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Giant</td>-->
                <!--                    <td>Competition</td>-->
                <!--                    <td>999</td>-->
                <!--                </tr>-->
                <!--                <tr>-->
                <!--                    <td>Giant</td>-->
                <!--                    <td>Expedition AT</td>-->
                <!--                    <td>1299</td>-->
                <!--                </tr>-->
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
