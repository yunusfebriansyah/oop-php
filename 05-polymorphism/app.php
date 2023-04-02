<?php

// ProductInterface
interface ProductInterface {
  public function setName($name);
  public function setPrice($price);
  public function getName();
  public function getPrice();
}

// IslamicProduct class (abstract class)
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

// IslamicClothing class extends IslamicProduct
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

// IslamicBook class extends IslamicProduct
class IslamicBook extends IslamicProduct {
  protected $author;

  public function __construct($name, $price, $author) {
    parent::__construct($name, $price);
    $this->author = $author;
  }
  
  public function setAuthor($author) {
    $this->author = $author;
  }
  
  public function getAuthor() {
    return $this->author;
  }
  
  public function showInfo() {
    echo "Product name: " . $this->getName() . "\n";
    echo "Product price: " . $this->getPrice() . "\n";
    echo "Product type: Islamic book\n";
    echo "Product author: " . $this->getAuthor() . "\n";
  }
}

// Create objects
$clothing1 = new IslamicClothing("Abaya", 150, "L");
$book1 = new IslamicBook("The Sealed Nectar", 40, "Safiur Rahman Mubarakpuri");

// Call showInfo method
$clothing1->showInfo();
$book1->showInfo();
