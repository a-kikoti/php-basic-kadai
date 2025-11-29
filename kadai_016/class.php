<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題16</title>
</head>

<body>
 <p>

<?php
//　クラスを定義する
class Food {
  // プロパティを定義する
  private $name;
  private $price;

  // コンストラクタを定義する
  public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
   }
  //　メソッドを定義する
  public function show_price() {
      return $this->price;
  }
}
// インスタンス化する
$vegetables = new Food('potato', 250);

//　インスタンス$foodの各プロパティの値を出力する
print_r($vegetables);

 //　クラスを定義する
class Animal {
   //　プロパティを定義する
   private $name;
   private $height;
   private $weight;

   //　コンストラクタを定義する
   public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height  = $height;
      $this->weight = $weight;
   }

   //
   public function show_height() {
        return $this->height;
   }
}
echo '<br>';
// インスタンス化する
$mammalian = new Animal('dog', 60, 5000);

//　インスタンス$dogの核プロパティの値を出力する
print_r($mammalian);
echo '<br>';

// 各クラスのメソッドを呼び出す
echo $vegetables->show_price();
echo '<br>';
echo $mammalian->show_height();
 ?>
  </p>
 </body>

 </html>
