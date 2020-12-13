<?php

$server = "localhost";
$name = "sec";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


if(isset($_POST['check_vault']))
{
    $vault_id = $_POST['vault_id'];

    
    $sql = "SELECT * FROM sec_table WHERE vault_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$vault_id]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(sizeof($results) > 0)
        $get = array("true" => "true");
    else
        $get = array("false" => "false");
        
    echo json_encode($get);
    
}




?>