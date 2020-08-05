<?php
  $dbname = "chopperland_riku";
  $host = "mysql1.php.xdomain.ne.jp";
  $user = "chopperland_riku";
  $psw = "9te3Wn2PunLZp9h";
  $mydb = "mysql:dbname='.$dbname.'.$host.';charset=utf8";
  try{
    $pdo=new PDO($mydb,$user,$psw ); //DBへ接続
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // PDOのエラーモードを追加してください
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    // 構文チェックと実行を分離したままにする 必須
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // メモリ効率がいい

  } catch (PDOException $e) {
   die('ConneCt Error: ' .$e->getCode()); //DB接続エラー時の処理
  }