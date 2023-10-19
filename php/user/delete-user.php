<?php
session_start(); 

require $_SERVER["DOCUMENT_ROOT"] . '/Databasing_WebDev/config/database.php';

$stmt = $conn->prepare("UPDATE user SET deleted_at = ? WHERE id = ?");
$stmt->bind_param("ss", $deleted_at, $id);

$deleted_at = date("Y-m-d H:i:s");
$id = $_GET["id"];
$stmt->execute();

$stmt->close();
$conn->close();

$_SESSION["delete-success"] = true;

header("Location: ../../index.php");
?>