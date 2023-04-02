<?php
namespace IslamicNamespace\Abstracts;

use InvalidArgumentException;
use IslamicNamespace\Interfaces\ProductInterface;

abstract class IslamicProduct implements ProductInterface {
  protected $name;
  protected $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }
  
  public function setName($name) {
    $this->name = $name;
  }
  
  public function setPrice($price) {
    if (!is_numeric($price)) {
      throw new InvalidArgumentException('Harga harus bilangan atau angka.');
    }
    if ($price < 0) {
      throw new InvalidArgumentException('Harga gak boleh bilangan negatif.');
    }
    $this->price = $price;
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getPrice() {
    return $this->price;
  }
  
  public function showDescription() {
    echo "This is an Islamic product.";
  }
  
  abstract public function showInfo();
}