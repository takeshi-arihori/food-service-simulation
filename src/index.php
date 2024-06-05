<?php

spl_autoload_extensions(".php");
spl_autoload_register();

// FoodItemクラスのテスト
$cheeseBurger = new FoodItem\CheeseBurger();
echo 'CheeseBurger: ' . $cheeseBurger->getName() . ', ';
echo 'Category: ' . FoodItem\CheeseBurger::getCategory() . ', ';
echo 'Price: ' . $cheeseBurger->getPrice() . ', ';
echo 'Description: ' . $cheeseBurger->getDescription() . ' ';

// 改行
echo '<br>';

$fettuccine = new FoodItem\Fettuccine();
echo 'Fettuccine: ' . $fettuccine->getName() . ', ';
echo 'Category: ' . FoodItem\Fettuccine::getCategory() . ', ';
echo 'Price: ' . $fettuccine->getPrice() . ', ';
echo 'Description: ' . $fettuccine->getDescription() . ' ';

// 改行
echo '<br>';

$hawaiianPizza = new FoodItem\HawaiianPizza();
echo 'HawaiianPizza: ' . $hawaiianPizza->getName() . ', ';
echo 'Category: ' . FoodItem\HawaiianPizza::getCategory() . ', ';
echo 'Price: ' . $hawaiianPizza->getPrice() . ', ';
echo 'Description: ' . $hawaiianPizza->getDescription() . ' ';
