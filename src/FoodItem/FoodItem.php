<?php

namespace FoodItem;

/**
 * 各食品アイテムの名称、説明、価格といった基本情報をカプセル化する抽象クラス
 */
abstract class FoodItem
{
  private string $name;
  private string $description;
  private float $price;

  public function __construct(string $name, string $description, float $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  abstract public static function getCategory(): string;
}
