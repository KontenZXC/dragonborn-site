<?php
include_once '../auth/db/database.php';
 
// instantiate user object
include_once '../auth/db/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
if(empty($_POST['user_id'])) {
    header("Location: https://dragonborn.lol");
}

$user_id = $_POST['user_id'];
$user->username = $_POST['user_id'];
    
?>