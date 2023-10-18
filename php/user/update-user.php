<?php

require $_SERVER["DOCUMENT_ROOT"] . '/Databasing_WebDev/config/database.php';

$stmt = $conn->prepare("UPDATE user SET first_name = ?,
last_name = ?,
gender = ?,
updated_at = ?
WHERE id = ?");

$stmt->bind_param("sssss", $first_name, $last_name, $gender, $updated_at, $id);

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$gender = $_POST["gender"];
$updated_at = date("Y-m-d H:i:s");
$id = $_POST["id"];
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?delete-success=true");