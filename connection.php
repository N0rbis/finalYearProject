<?php
$dsn = 'mysql: host=localhost; dbname=Cars';
$user = 'root';
$password = 'root';
try {
$pdo = new PDO($dsn, $user, $password);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
?>
