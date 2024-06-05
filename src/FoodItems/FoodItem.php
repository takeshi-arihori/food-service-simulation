<?php

namespace FoodItems;

abstract class FoodItem
{
  protected string $name;
  protected string $description;
  protected float $price;

  public function __construct($name, $price, $description)
  {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price;
  }

  public function getDescription()
  {
    return $this->description;
  }
}
