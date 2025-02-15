<?php
namespace App;
require __DIR__ . '../../../bootstrap.php';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
 
#[ORM\Entity]
#[ORM\Table(name:"Zones")]
Class Zone {
    #[ORM\Id]   
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer',)]
     private int $id;
    #[ORM\Column(type: 'string')]
    private string $nom_zone;
    #[ORM\Column(type: 'string')]
    private string $status;
    #[ORM\Column(type: 'integer')]
    private int $nb_positif;

    #[ORM\Column(type: 'integer')]
    private int $nb_habitants;

    #[ORM\Column(type: 'integer')]
    private int $nb_contamines;

    #[ORM\ManyToOne(targetEntity:Pays::class,inversedBy:'zones')]
    private Pays $pays;

    #[ORM\OneToMany(targetEntity:Point::class,cascade:['persist','remove'],mappedBy:'zone',orphanRemoval:true)]
    private Collection $points;

    public function __construct(){
        $this->points = new ArrayCollection();
            }
    
     public function getId()
     {
          return $this->id;
     }
 
     public function setId($id)
     {
          $this->id = $id;

     }


    public function getNom_zone()
    {
        return $this->nom_zone;
    }


    public function setNom_zone($nom_zone)
    {
        $this->nom_zone = $nom_zone;

    }

 
    public function getStatus()
    {
        return $this->status;
    }


    public function setStatus($status)
    {
        $this->status = $status;

    }


    public function getNb_positif()
    {
        return $this->nb_positif;
    }

    public function setNb_positif($nb_positif)
    {
        $this->nb_positif = $nb_positif;

    }

    public function getPays()
    {
        return $this->pays;
    }


    public function setPays($pays)
    {
        $this->pays = $pays;

    }

 
    public function getPoint()
    {
        return $this->points;
    }


    public function setPoint(Point $point)
    {
        $this->points->add($point);
        $point->setZone($this);

    }

    public function getNb_contamines()
    {
        return $this->nb_contamines;
    }

    public function setNb_contamines($nb_contamines)
    {
        $this->nb_contamines = $nb_contamines;

    }

    public function getNb_habitants()
    {
        return $this->nb_habitants;
    }

    public function setNb_habitants($nb_habitants)
    {
        $this->nb_habitants = $nb_habitants;

    }
}