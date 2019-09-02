<?php

use Doctrine\ORM\Mapping as ORM; 
/**
*  @ORM\Entity 
*/
class Tarif
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
    * 
    * @ORM\Column(type="integer")
    */
    private $prix_tarif;
    /**
    * 
    * @ORM\ManyToOne(targetEntity=Type_tarif::class, inversedBy="id")
    */
    private $id_type_tarif;

    

    public function getId_tarif(){
        return $this->id_tarif;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getId_type_tarif(){
        return $this->id_type_tarif;
    }
  
    
    public function setId_tarif($id_tarif){
        $this->id_tarif = $id_tarif;
    }
    public function setPrix_tarif($prix_tarif){
        $this->prix_tarif = $prix_tarif;
    }
    public function setId_type_tarif($id_type_tarif){
        $this->id_type_tarif = $id_type_tarif;
    }
  
}