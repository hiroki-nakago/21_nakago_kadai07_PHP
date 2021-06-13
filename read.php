<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/extras/jquery.metadata.min.js"></script>

<table border='1' class="tablesorter" id="myTable">

<thead>
<tr>
    <th>投稿日時</th>
    <th>名前</th>
    <th>かな</th>
    <th>メール</th>
    <th>チーズアカデミーを<br>知ったきっかけ</th>
    <th>応募したきっかけ</th>
    <th>詳細</th>
</tr>
</thead>
<tbody></tbody>

<?php
// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

//定義
$filename="data.txt";
$fp=fopen($filename,"r");

//テキストファイルから情報を参照する
while(!feof($fp)){
    $array=array();
    $txt =fgets($fp);
    $datas=explode(",",$txt); //テキストファイルの情報を配列へ変換
    $array[]=array($datas);

    var_dump($datas[0]);
    // echo $txt."<br>";
    // echo "<br>";
    // echo $str[1]."<br>";
    if($datas[0]!=""){ //empty関数が反応しないため力技の空白確認
      echo "<tr>";  
      foreach($datas as $value){    
          echo "<td>".$value;
          unset($datas);
      };
      echo "</tr>";  
    };

};

fclose($fp);
?>
<button>数数える</button>




</body>
</html>



