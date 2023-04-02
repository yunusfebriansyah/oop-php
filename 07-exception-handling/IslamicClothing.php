<?php
namespace IslamicNamespace\Classes;

use IslamicNamespace\Abstracts\IslamicProduct;

class IslamicClothing extends IslamicProduct {
  protected $size;

  public function __construct($name, $price, $size) {
    parent::__construct($name, $price);
    $this->size = $size;
  }
  
  public function setSize($size) {
    $this->size = $size;
  }
  
  public function getSize() {
    return $this->size;
  }
  
  public function showInfo() {
    echo "Product name: " . $this->getName() . "\n";
    echo "Product price: " . $this->getPrice() . "\n";
    echo "Product type: Islamic clothing\n";
    echo "Product size: " . $this->getSize() . "\n";
  }
}