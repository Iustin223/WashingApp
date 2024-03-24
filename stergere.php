<?php
session_start();

$sql="DELETE FROM programari WHERE id_user=" . $_SESSION["id_utilizator"];
$server = "localhost";
$username = "root";
$password = "";
$database = "proiect_PA";
$conn = new mysqli($server, $username, $password, $database);
$result = $conn->query($sql);
header("Location: index.php");
exit();

?>