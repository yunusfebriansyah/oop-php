<?php

namespace IslamicNamespace\Classes;
use IslamicNamespace\Abstracts\IslamicProduct;

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