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

// e
