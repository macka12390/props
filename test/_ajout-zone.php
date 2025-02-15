<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$pays= new Zone();
$pays->setNom_zone("Dakar");




$entityManager->flush();
