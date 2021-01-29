<?php
  class Pokemon
  {
    private $ability;
    private $height;
    private $id;
    private $baseXp;
    private $name;
    private $artwork;
    private $type;
    private $weight;
    private $movesNumber;
    

    function __construct($ability = null, $height = null, $id = null, $baseXp = null, $name = null, $artwork = null, $type = null, $weight = null, $movesNumber = null)
    {
      $this->ability = $ability;
      $this->height = $height;
      $this->id =$id;
      $this->baseXp = $baseXp;
      $this->name = $name;
      $this->artwork = $artwork;
      $this->type = $type;
      $this->weight = $weight;
      $this->movesNumber = $movesNumber;
    }

    public function getAbility() { return $this->ability; }
    public function getHeight() { return $this->height; }
    public function getId() { return $this->id; }
    public function getBaseXp() { return $this->baseXp; }
    public function getName() { return $this->name; }
    public function getArtwork() { return $this->artwork; }
    public function getType() { return $this->type; }
    public function getWeight() { return $this->weight; }
    public function getMovesNumber() { return $this->movesNumber; }


    public function setAbility($ability) { $this->ability = $ability; }
    public function setHeight($height) { $this->height = $height; }
    public function setId($id) { $this->id = $id; }
    public function setBaseXp($baseXp) { $this->baseXp = $baseXp; }
    public function setName($name) { $this->name = $name; }
    public function setArtwork($artwork) { $this->artwork = $artwork; }
    public function setType($type) { $this->type = $type; }
    public function setWeight($weight) { $this->weight = $weight; }
    public function setMovesNumber($movesNumber) { $this->movesNumber = $movesNumber; }
  }
?>