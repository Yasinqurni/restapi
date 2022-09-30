<?php

define('HOST', 'localhost');
define('USER', 'root');
define('DB', 'restapi_todolist');
define('PASS','');

$conn = mysqli_connect(HOST , USER , PASS ,  DB) or die("koneksi error");

?>