<?php
use App\Utils\Database;
require_once __DIR__ ."/vendor/autoload.php";
$db = new Database();
$db->update($_POST);   

   

?>