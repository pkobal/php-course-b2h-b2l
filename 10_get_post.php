<?php
session_start();
if (!isset($_SESSION['numbers'])){
    $_SESSION['numbers'] = array();
}

if (isset($_POST['submit'])) {
    if (!empty($_POST['number'])) {
        $number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_FLOAT);
        if (!$number) {
            $alert = "Vul een getal in";
        } else {
            $alert = "";
            $_SESSION['numbers'][] = $number;
            header('location: ');
        }
    } else {
        $alert = "Vul iets in";
    }
} else {
    $alert = "";
}

$result = 0;
for ($i = 0; $i < count($_SESSION['numbers']); $i++){
    $result += $_SESSION['numbers'][$i];
}
if (count($_SESSION['numbers']) > 0) {
    $average = $result / count($_SESSION['numbers']);
} else {
    $average = "";
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
</head>
<body>
<p>
    <?php
    echo $alert;
    ?>
</p>
<form method="post">
    <label for="number">Vul een getal in</label>
    <input type="text" name="number" id="number"><br>
    <button name="submit">submit</button>
</form>
<?= $average ?>
</body>
</html>
