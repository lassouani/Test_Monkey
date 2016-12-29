<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'bdd_test_m');
define('DB_USER', 'root');
define('DB_PASS', '');

 

function init_db() {
  try {
    $conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    return $conn;
  }
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
}