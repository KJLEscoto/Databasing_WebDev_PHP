<?php

require $_SERVER["DOCUMENT_ROOT"] . '/Databasing_WebDev/config/database.php';

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = $id";
$result = $conn->query($sql);

$conn->close();
?>