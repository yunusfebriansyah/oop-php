<?php
namespace IslamicNamespace\Interfaces;

interface ProductInterface {
  public function setName($name);
  public function setPrice($price);
  public function getName();
  public function getPrice();
}