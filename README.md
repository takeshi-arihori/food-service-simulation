# phpテスト

## ディレクトリ構造
```
root
│
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
│
├── composer.json
└── main.php
```


### 対話モード
対話モードは、短いコードを試すための機能で、対話的に PHP コードを入力・実行できる。
```
php -a -d auto_prepend_file=example.php
```
例:
php > echo addNumbers(4, 33);

