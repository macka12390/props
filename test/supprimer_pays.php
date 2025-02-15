<?php
namespace App;
require __DIR__ . '../../bootstrap.php';

$pays=$entityManager->getRepository(Pays::class)->find(1);

$entityManager->remove($pays);
$entityManager->flush();