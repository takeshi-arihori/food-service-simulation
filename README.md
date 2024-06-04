# Food Service Simulation

このプロジェクトでは、簡易的なレストランの注文システムを形成するいくつかのクラスを実装します。オブジェクト指向プログラミングの四大柱（カプセル化、抽象化、継承、ポリモーフィズム）に関わるコードを書き、PHP の構文を出力し練習していきましょう。

プロジェクトのテーマは食事で、FoodItems、Restaurant、そして Customer や Employee といった人々をモデル化する Person クラスのモデリングを含みます。

## ディレクトリ構造

```
root/
├── docker/
│   ├── mysql/
│   │   └── my.cnf
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       ├── Dockerfile
│       └── php.ini
├── src/
│   ├── Interfaces/
│   │   └── Engine.php
│   ├── Engines/
│   │   ├── GasolineEngine.php
│   │   └── ElectricEngine.php
│   └── Cars/
│       ├── Car.php
│       ├── GasCar.php
│       └── ElectricCar.php
├── docker-compose.yml
└── .env

```
