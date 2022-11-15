<?php 
session_start();
$_SESSION[] = "";
$_SESSION['IdMarchand'] = "";
header('location: iland/');
session_destroy();