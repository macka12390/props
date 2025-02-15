<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$pays=$entityManager->getRepository(Pays::class)->find(2);
$zone=$entityManager->getRepository(Zone::class)->find(2);

$zone->setNom_zone("Conacry");
$zone->setNb_habitants(1000);
$zone->setNb_positif(10);
$zone->setStatus("vert");
$zone->setNb_contamines("9");
$pays->setZone($zone);

$entityManager->flush();