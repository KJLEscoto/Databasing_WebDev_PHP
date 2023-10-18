<?php

require $_SERVER["DOCUMENT_ROOT"] . '/Databasing_WebDev/config/database.php';

$stmt = $conn->prepare("INSERT INTO user (first_name, last_name, gender) VALUES (?, ?, ?)");
$stmt->bind_param("sss",  $firstname, $lastname, $gender);

$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$gender = $_POST["gender"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?save-success=true");
?>