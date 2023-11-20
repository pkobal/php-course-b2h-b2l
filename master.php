<?php
include '18_database-connection.php';

global $db;

$query = $db->prepare("SELECT * FROM categorie");

$query->execute();

$categories = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($categories as $category) {
    echo "<a href='detail.php?id=". $category['id'] ."'>" . $category['naam'] . "</a><br>";
}
