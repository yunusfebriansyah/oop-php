<?php

// bikin class

class IslamicProduct{
  // properties non-static
  public $name;
  public $price;
  public $category;

  // properties static
  public static $count = 0;

  // constructor
  public function __construct( $name, $price, $category )
  {
    $this->name = $name;
    $this->price = $price;
    $this->category = $category;
    self::$count++;
  }

  // method non-static
  public function display() {
    echo "Product name: " . $this->name . "<br>";
    echo "Price: " . $this->price . "<br>";
    echo "Category: " . $this->category . "<br>";
  }

  // methos static
  public static function getCount() {
    return self::$count;
  }

}

// instansiasi class
$product1 = new IslamicProduct("Baju Koko", 230000, "Pakaian");
// manggil property non-static
// $product1->name = "Baju Koko";
// $product1->price = 230000;
// $product1->category = 'Pakaian';

// manggil method non-static
$product1->display();

// manggil property static
echo "<hr>Banyak produk : " . IslamicProduct::$count;

// manggil method static
echo "<hr>Banyak produk : " . IslamicProduct::getCount();