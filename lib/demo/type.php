<?php
  echo "★ String\n";
  $str = "Hello, World!!";
  var_dump($str);

  echo "★ Embeded String\n";
  $age = 15;
  var_dump("{age} years old.");

  echo "\n★ Integer\n";
  $calc = 5 - 3;
  var_dump($calc);
  var_dump(-1);

  echo "\n★ Decimal\n";
  $dec = 3.5 - 1.5;
  var_dump($dec);

  echo "\n★ Array\n";
  $arr = [1, 3, 5, 7];
  var_dump($arr);

  echo "\n★ Boolean\n";
  $bool = false;
  var_dump($bool);

  echo "\n★ Global Scope\n";
  foreach ($arr as $i) {
    echo $i, ' ';
  }
  echo $i; // foreachのスコープ外でも参照される

  echo "\n★ Local Scope\n";
  $local = 1;
  function test_func() {
    $local = 10;
    $local2 = 20;
  }
  test_func();
  echo $local; // => 1
  echo $local2; // => undefined

  echo "\n★ constant\n";
  CONST BOOK = 'Sherlock Holmes';
  // BOOK = 'Hercule Poirot'; // => PHP Parse error:  syntax error, unexpected token "="
  // 再代入不可のためエラーになる
  echo BOOK;

  echo "\n★ Here Document\n";
  $hereDoc = <<<EOI
    ヒアドキュメントはこのように
    複数行にわたる文章を表記可能です。

    Tom is "{age}" years old.
  EOI;

  var_dump($hereDoc);

  echo "\n★ execution operator\n";
  $result = `ls -a`;
  var_dump($result);

  echo "\n★ Associated Array\n";
  $associated = [
    'apple' => 5,
    'banana' => 3,
    'kiwifruit' => 7,
  ];
  var_dump($associated);
?>
