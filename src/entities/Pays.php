<?php
namespace App;

require __DIR__ . '../../../bootstrap.php';
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
#[ORM\Table(name:"Pays")]
class Pays{
    #[ORM\Id]   
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
     private int $id;

    #[ORM\Column(type: 'string')]
    private string $nom_pays;

    #[ORM\OneToMany(targetEntity:Zone::class,cascade:['persist','remove'],mappedBy:'pays',orphanRemoval:true)]
    private Collection $zones;
    public function __construct(){
$this->zones = new ArrayCollection();
    }

     public function getId()
     {
          return $this->id; 
     }

     public function setId($id)
     {
          $this->id = $id;

     }
 
    public function getNom_pays()
    {
        return $this->nom_pays;
    }
    public function setNom_pays($nom_pays)
    {
        $this->nom_pays = $nom_pays;
    }

    public function getZone() {
        return $this->zones;
    }

    public function setZone(Zone $zone) {
            $this->zones->add($zone);
            $zone->setPays($this);
    }

} 