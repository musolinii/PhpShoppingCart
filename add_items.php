<?php

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$name = $_POST["name"];
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
$description = $_POST["description"];
$created = NULL;
$modified = NULL;


$host = "localhost";
$dbname = "php_shopping_cart";
$username = "brian";
$password = "1738";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());

}           


$sql = "INSERT INTO products (id, name, description, price, created, modified)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "issd",
                       $id,
                       $name,
                       $description,
                       $price);

mysqli_stmt_execute($stmt);

echo "Record saved.";
