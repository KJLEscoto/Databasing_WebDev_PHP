<?php

require $_SERVER["DOCUMENT_ROOT"] . '/Databasing_WebDev/config/database.php';

$sql = "SELECT * FROM user WHERE deleted_at IS NULL";
$result = $conn->query($sql);

$conn->close();

?>