<?php

require "vendor/autoload.php";

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;



try {
    //code...


$config = ORMSetup::createAttributeMetadataConfiguration(
   
    paths:[__DIR__."/src/entities"],
    isDevMode:true
);

$connecte=DriverManager::getConnection(
  [  'driver'   => 'pdo_pgsql',
    'host'     => 'localhost',
    'charset'  => 'utf8',
    'user'     => 'postgres',
    'password' => 'passer',
    'dbname'   => 'projet2',],
    $config
);
$entityManager= new EntityManager($connecte, $config);
} catch (Exception $e) {
    print($e);
}