<?php
$host = "127.0.0.1";
$port = "5432";
$dbname = "postgres";
$user = "mattlannigan";
$password = "bydhyk-fumCy4-gurhuk";

try {

    $conn = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $password
    );

    // Enable exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully!";

} catch (PDOException $e) {

    die("Connection failed: " . $e->getMessage());

}
?>