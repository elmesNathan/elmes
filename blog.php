<?php 
$page = "Blog";
$label = "Des articles pour répondre à vos préoccupations...";
$titre = "Articles d'ELMES";
$data_classications = array('1' => 'popularite', '2' => 'categories', '3' => 'auteurs', '4' => 'problematiques', '5' =>'titres');

include_once 'models/connexion_sql.php';
include_once 'controleurs/blog/blog.php';