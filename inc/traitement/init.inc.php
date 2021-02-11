<?php
// connexion à la BDD
$pdo = new PDO(
    'mysql:host=localhost;dbname=calendapp',
    'root',
    '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);

// déclaration d'une variable nous permettant de passer des messages à l'utilisateur
$msg = '';

// appel de notre fichier contenant les fonctions utilisateur
require_once("fonction.inc.php");

// démarrage de la session
session_start();


// déclaration du chemin absolu pour l'accès à notre projet
define('URL', 'http://localhost:8080/calendapp/');
