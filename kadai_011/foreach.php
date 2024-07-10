<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset =" UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <P>
    <?php
    // 連想配列に値を代入する
    $vegetable  = ['名前'=>'玉ねぎ','値段'=>200, '産地'=> '北海道'];

    //foreach文とecho文を使ってキーと値を出力する
    foreach($vegetable as $key =>$value){
      echo $key . ":" . $value . "<br>";
    }
  
    ?>
  </body>
</html>

