<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$zone=$entityManager->getRepository(Zone::class)->find(1);

$entityManager->remove($zone);
$entityManager->flush();