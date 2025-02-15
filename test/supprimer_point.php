<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$point=$entityManager->getRepository(Point::class)->find(3);
$entityManager->remove($point);
$entityManager->flush();