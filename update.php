<?php
include "18_database-connection.php";
global $db;


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id !== null && $id !== false) {
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $bike = $query->fetch(PDO::FETCH_ASSOC);
}else{
    die();
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['brand']) && !empty($_POST['type']) && !empty($_POST['price'])) {
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        if (!$price) {
            $alert = "Vul een geldig getal in";
        } else {
            $updateQuery = $db->prepare('UPDATE fietsen SET merk = :brand, 
                   type = :type, prijs = :price WHERE id = :id');
            $updateQuery->bindParam('brand', $_POST['brand']);
            $updateQuery->bindParam('type', $_POST['type']);
            $updateQuery->bindParam('price', $price);
            $updateQuery->bindParam('id', $id);
            if ($updateQuery->execute()){
                header('location: detail.php?id=' . $bike['categorie_id']);
            }else{
                $alert= "er is iets mis gegaan";
            }
        }
    } else {
        $alert = "Vul alles in";
    }
} else {
    $alert = "";
}

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
        <div class="col-6">
            <form method="post">
                <div class="mb-3">
                    <label for="brand" class="form-label">Merk</label>
                    <input type="text" class="form-control" name="brand" id="brand" value="<?=$bike['merk']?>">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" name="type" id="type" value="<?=$bike['type']?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prijs</label>
                    <input type="number" class="form-control" name="price" id="price" step="0.01" value="<?=$bike['prijs']?>">
                </div>
                <button class="btn btn-primary" name="submit">Submit</button>
            </form>
            <p>
                <?= $alert ?>
            </p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>