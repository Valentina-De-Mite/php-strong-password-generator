<?php
require __DIR__ . '/functions.php';

if (isset($_GET['pass_length'])) {

    var_dump("ciao");

  $length = $_GET['pass_length'];
  $password = generatePassword($length);
}

session_start();
$_SESSION['password'] = $password;




header('Location: ./index.php');