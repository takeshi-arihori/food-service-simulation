# 簡易的なレストラン注文システム

## プロジェクト概要

このプロジェクトは、簡易的なレストランの注文システムを構築することを目的としています。オブジェクト指向プログラミング（OOP）の四大柱（カプセル化、抽象化、継承、ポリモーフィズム）を利用し、PHP でクラスを実装する練習をします。

## 構成クラス

### FoodItem

`FoodItem` は各食品アイテムの基本情報（名称、説明、価格）をカプセル化する抽象クラスです。このクラスを拡張して、具体的な食品カテゴリ（バーガー、ピザ、パスタなど）を表現する具象クラスを作成します。各食品カテゴリは、クラス定数としてカテゴリ情報を保持し、静的メソッドを通じてアクセス可能です。

#### 具体例

- `HawaiianPizza`
- `Spaghetti`
- `Fettuccine`
- `CheeseBurger`

### Person

`Person` クラスは一般的な人物の属性（名前、年齢、住所）をカプセル化します。このクラスを拡張して、具体的な顧客 (`Customer`) や従業員 (`Employee`) を表現します。これらの具象クラスは、共通の属性を継承しつつ、それぞれ固有のプロパティやメソッドを追加します。

### Restaurant

`Restaurant` クラスはレストランの全業務をカプセル化します。このクラスは、メニューを表現する `FoodItem` オブジェクトのリストと、従業員を表現する `Employee` オブジェクトのリストを保持します。また、特定の食品カテゴリに基づいて注文を受け付ける `order()` メソッドを提供します。

#### order() メソッドの動作

1. レジ係の `Employee` が `FoodOrder` を生成します。
2. `FoodOrder` は `FoodItem` のリストを含みます。
3. レジ係は注文をシェフ役の `Employee` に委任します。
4. レジ係は請求書 (`Invoice`) を生成し、これが `order()` メソッドの返り値となります。
5. `Invoice` には最終価格、注文時間、注文が完成するまでの時間（分）が含まれます。

### 追加的な注意点

- このシステムはシミュレーションのため、行動は文字列で表現します。例: "the cashier John created a food order"、"the chef William cooked a Pizza"。
- `Customer` クラスには `interestedCategories()` メソッドがあり、引数として `Restaurant` を取り、そのレストランにある興味のある食品カテゴリのリストを返します。このリストは order() メソッドで使用されます。
- クラス名を取得するには `{Class}::classname` を使用します。例: `Cheeseburger::classname`。
- 定数や静的メソッドは `self::{NAME}` を使用して取得します。例: `self::CATEGORY`。
- 現在の時間を取得するには `date("D M d, Y G:i");` を使用します。詳細は `date()` 関数のドキュメントを参照してください。
  厳格な型付けを利用します。

## ディレクトリ構成

```
root/
├── diagrams/
│   ├── class_diagram.png
├── docker/
│   ├── mysql/
│   │   └── my.cnf
│   ├── nginx/
│   │   └── default.conf
│   └── php/
│       ├── Dockerfile
│       └── php.ini
├── src/
│   ├── FoodItems/
│   │   ├── FoodItem.php
│   │   ├── HawaiianPizza.php
│   │   ├── Spaghetti.php
│   │   ├── Fettuccine.php
│   │   └── CheeseBurger.php
│   ├── People/
│   │   ├── Person.php
│   │   ├── Customers/
│   │   │   └── Customer.php
│   │   └── Employees/
│   │       ├── Employee.php
│   │       ├── Cashier.php
│   │       └── Chef.php
│   ├── Invoices/
│   │   └── Invoice.php
│   ├── Restaurants/
│   │   └── Restaurant.php
│   ├── db/
│   │   └── Database.php
│   └── index.php
├── compose.yml
├── .env
├── .gitignore
├── README.md
└── README.docker.md

```
