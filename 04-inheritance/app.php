<?php
// IslamicProduct class
class IslamicProduct {
  protected $name;
  protected $price;
  protected static $count = 0;
  
  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
    self::$count++;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function getPrice() {
    return $this->price;
  }
  
  public function setPrice($price) {
    $this->price = $price;
  }
  
  public static function getCount() {
    return self::$count;
  }
}

// class IslamicClothing keturunan dari class IslamicProduct
class IslamicClothing extends IslamicProduct {
  protected $size;
  
  public function __construct($name, $price, $size) {
    parent::__construct($name, $price);
    $this->size = $size;
  }
  
  public function getSize() {
    return $this->size;
  }
  
  public function setSize($size) {
    $this->size = $size;
  }

  public function showInfo() {
    echo "Product name: " . $this->name . "<br>";
    echo "Price: " . $this->price . "<br>";
    echo "Size: " . $this->size . "<br>";
  }

}

// instansiasi object
$clothing1 = new IslamicClothing("Abaya", 150, "L");
$clothing1->showInfo();