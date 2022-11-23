<?php 
session_start();
$_SESSION[] = "";
$_SESSION['IdMarchand'] = "";
session_destroy();
header('location: iland/');