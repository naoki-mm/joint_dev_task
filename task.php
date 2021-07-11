<?php

# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  $names[] = "斎藤";
  print_r($names);

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
  $array3 = array_merge($array1, $array2);
  print_r($array3);
  
echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

  # 以下に回答を記載 (array_coutnt_values 使用)
  // $count = array_count_values($numbers);
  // echo $count[3]."回";

// echo PHP_EOL;

  # 以下に回答を記載 (foreach 使用)
  $count_3 = 0;

  foreach($numbers as $number) {
    if($number == 3) {
      $count_3++;
    }
  }

  echo $count_3."回";

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

# 以下に回答を記載 
// 下記(1)～(3)の内, 可読性の観点から(3)で回答。  

// (1) unsetでキー・要素を削除

// foreach($sports as $key => $sport) {
//   if($sport == null) {
//     unset($sports[$key]);
//   }
// }
// print_r($sports);

// echo PHP_EOL;

// (2) arry_keysで条件に合うキーを抽出した後, unsetでキー・要素を削除

//   $sports_keys = array_keys($sports, null);
  
//   foreach($sports_keys as $key) {
//     unset($sports[$key]);
//   }
//   print_r($sports);

// echo PHP_EOL;

// (3) (diffでnullとの差分を削除)

  $sports = array_diff($sports, [null]);
  print_r($sports);

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載

  var_export(empty($array1));
  echo PHP_EOL;

  var_export(empty($array2));
  echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
  $numbers2 = [];

  foreach($numbers1 as $number1) {
    $numbers2[] = $number1 * 10;
  }

  print_r($numbers2);

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
$array = array_map('intval',$array);
  
//   # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

  # 以下に回答を記載
  $programming_languages = array_map('ucfirst',$programming_languages);
  $upper_case_programming_languages = array_map('strtoupper',$programming_languages);

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載

  $number = 1;
  $names_add_number = [];

  foreach($names as $name) {
    $names_add_number[] = "会員No.".$number." ".$name;
    $number++;
  }

  print_r($names_add_number);

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

  # 以下に回答を記載
  // 下記(1), (2)の内, 処理速度の観点から(1)で回答。  

// (1) strpos関数を使用
  foreach($foods as $food) {
    if(strpos($food,"うに") === false) {
      echo "まぁまぁ好きです".PHP_EOL;
    } else {
      echo "好物です".PHP_EOL;
    }
  }

echo PHP_EOL;

// (2) 正規表現を使用
// foreach($foods as $food) {
//   if(preg_match("/うに/",$food)) {
//     echo "好物です".PHP_EOL;
//   } else {
//     echo "まぁまぁ好きです".PHP_EOL;
//   }
// }

// echo PHP_EOL;

print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載

  $sports_all = [];

  foreach($sports as $sport1) {
    if(is_array($sport1)) {
      foreach($sport1 as $sport2) {
      $sports_all[] = $sport2;
      }
    } else {
      $sports_all[] = $sport1;
    }
  }

  echo "ユーザーの趣味一覧".PHP_EOL;

  $sports_hobby = array_unique($sports_all);
  $number = 1;

  foreach($sports_hobby as $sport_hobby) {
    echo "No{$number} {$sport_hobby}".PHP_EOL;
    $number++;
  }

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

  # 以下に回答を記載

  echo $data["user"]["name"];

echo PHP_EOL;

// print("#####q13#####".PHP_EOL);
// $user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
// $update_data = ["age" => 32, "address" => "沖縄"];

//   # 以下に回答を記載

// echo PHP_EOL;

// print("#####q14#####".PHP_EOL);
// $data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

//   # 以下に回答を記載

// echo PHP_EOL;

// print("#####q15#####".PHP_EOL);
// $data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
// $data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

//   # 以下に回答を記載

// echo PHP_EOL;

// print("#####q16#####".PHP_EOL);
// $users = [
//   ["name" => "satou", "age" => 22],
//   ["name" => "yamada", "age" => 12],
//   ["name" => "takahashi", "age" => 32],
//   ["name" => "nakamura", "age" => 41]
// ];

//   # 以下に回答を記載

// echo PHP_EOL;

// print("#####q17#####".PHP_EOL);
// class User
// {

//   # コードを追加

// }

// $user1 = new User("神里", 32, "男");
// $user2 = new User("あじー", 32, "男");

// $user1->info();
// print("-------------".PHP_EOL);
// $user2->info();

// echo PHP_EOL;

// print("#####q18#####".PHP_EOL);

//   # コードを追加

// $man1 = new Man("あじー", 32);
// $man2 = new Man("ゆたぼん", 10);

// $man1->introduce();
// $man2->introduce();

// echo PHP_EOL;

// print("#####q19#####".PHP_EOL);
// class Item{
//   # 以下を修正して下さい

//   protected $name;

//   function __construct($book_name){
//     $this->name = $book_name;
//   }
// }
//   # 以下は変更しないで下さい

// $book = new Item("ゼロ秒思考");
// print($book->name.PHP_EOL);

// echo PHP_EOL;

// print("#####q20#####".PHP_EOL);
// class Human
// {

//   # コードを追加

// }

// class Zoo
// {

//   # コードを追加

// }

// $zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

// $human1 = new Human("たま", 3);
// $human2 = new Human("ゆたぼん", 10);
// $human3 = new Human("あじー", 32);
// $human4 = new Human("ぎん", 108);

// $humans = [$human1, $human2, $human3, $human4];

// foreach($humans as $human){
//   $zoo->info_entry_fee($human);
// }

// echo PHP_EOL;

// ?>
