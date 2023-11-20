<?php

session_start();

include "18_database-connection.php";
global $db;


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id !== null && $id !== false) {
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = :id");
    $query->bindParam('id', $id);
    $query->execute();
    $bike = $query->fetch(PDO::FETCH_ASSOC);
    $categoryId = $bike['categorie_id'];
}else{
    die();
}

$deleteQuery = $db->prepare('DELETE FROM fietsen WHERE id= :id');
$deleteQuery->bindParam('id', $id);
if ($deleteQuery->execute()) {
    $_SESSION['message'] = "Object verwijderd!";
} else {
    $_SESSION['message'] = "Verwijderen van het object is niet gelukt!";
}

header('location: detail.php?id=' . $categoryId);
