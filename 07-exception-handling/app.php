<?php
require_once 'ProductInterface.php';
require_once 'IslamicProduct.php';
require_once 'IslamicBook.php';
require_once 'IslamicClothing.php';

use IslamicNamespace\Classes\IslamicBook;
use IslamicNamespace\Classes\IslamicClothing;

// Create objects
$clothing1 = new IslamicClothing("Abaya", 150, "L");
$book1 = new IslamicBook("The Sealed Nectar", 40, "Safiur Rahman Mubarakpuri");

// Call showInfo method
$clothing1->showInfo();
$book1->showInfo();

echo "<hr>";

// exception handling
$book = new IslamicBook('Mukjizat Al-Quran', 170000, 'Abdullah Nashih Ulwan');
try {
  $book->setPrice(215000);
} catch (InvalidArgumentException $e) {
  echo 'Error: ' . $e->getMessage();
}

echo "<hr>";
$book->showInfo();
echo "<hr>";
echo "horee gak ada errorr!!!";
