<?php

include_once("praktikum_2.html");

$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";

$l = mysqli_connect($host, $user, $pass, $db);
mysqli_query($l, "SET CHARACTER SET UTF8") or
    die("Error, ei saa andmebaasi charsetti seatud");

$sql = "INSERT INTO maila_grigori (ip)
VALUES ('".$_SERVER['REMOTE_ADDR']."')";

if ($l->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $l->error;
}



$selectSql = "SELECT COUNT(*) AS loendur FROM maila_grigori";
$resultSql = $l->query($selectSql);

if ($resultSql->num_rows > 0) {
    $result = $resultSql->fetch_assoc();
    echo "Sinu lehte on külastatud: " . $result['loendur'] . " korda.";  
} else {
    echo "Error: " . $sql . "<br>" . $l->error;
}

mysqli_close($l);

echo '<pre>';

?>
