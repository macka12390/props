<?php
namespace App;
require __DIR__ . '../../../bootstrap.php';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name:"Points")]
 Class Point{
    #[ORM\Id]   
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer',)]
     private int $id;
    #[ORM\Column(type: 'string')]
    private string $nom_point;

    #[ORM\ManyToOne(targetEntity:Zone::class,inversedBy:'points')]
    private Zone $zone;

    public function __construct(){
        
    }
     public function getId()
     {
          return $this->id;
     }


     public function setId($id)
     {
          $this->id = $id;

     }


    public function getNom_point()
    {
        return $this->nom_point;
    }


    public function setNom_point($nom_point)
    {
        $this->nom_point = $nom_point;

    }


    public function getZone()
    {
        return $this->zone;
    }


    public function setZone($zone)
    {
        $this->zone = $zone;

    }
 }