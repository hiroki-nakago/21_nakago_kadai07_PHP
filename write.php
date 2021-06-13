<?php

define('FILENAME','data.txt'); 
define('FILENAME_csv','data.csv'); 
 
date_default_timezone_set('Asia/Tokyo');

//宣言する
$name = $_POST["name"];
$kana = $_POST["kana"];
$mail = $_POST["mail"];
$example = $_POST["example"];
$checkbox = $_POST["checkbox"];
$detail = $_POST["detail"];

function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
};

function t(){
    echo date("Y年m月d日 H時i分")."<br>";
};

//textファイル出力用
if( !empty($_POST['btn_submit']) ) {
	var_dump($_POST);	
    if( $file_handle = fopen( FILENAME, "a") ) {
        
        //現在日時を設定
        $date = date("Y/m/d H:i");
        //書き込むデータを保存
        $data = "$date".","."$name".","."$kana".","."$mail".","."$example".","."$checkbox".","."$detail"."\n";
        // echo $data;

        //書き込みデータ
        fwrite($file_handle,h($data));

        // ファイルを閉じる
		fclose($file_handle);
    };
};

//csvファイル出力用
if( !empty($_POST['btn_submit']) ) {
	var_dump($_POST);	
    if( $file_handle_csv = fopen( FILENAME_csv, "a") ) {
        
        //現在日時を設定
        $date = date("Y/m/d H:i");
        //書き込むデータを保存
        $data_csv = $_POST."\n"; //なぜこの配列情報が下のfputcsvに反応しないのか。
        var_dump($data_csv);

        //書き込みデータ
        fputcsv($file_handle_csv,$_POST);
 
        // ファイルを閉じる
		fclose($file_handle_csv);
    };
};
?>    

<!-- <p>回答日時：<?=t();?></p>
<p>名前：<?=h($name);?></p>
<p>カナ：<?=h($kana);?></p>
<p>MAIL：<?=h($mail);?></p>
<p>チーズアカデミーを知ったきっかけ：<?=h($example);?></p>
<p>志望動機：<?=h($checkbox);?></p>
<p>詳細：<?=h($detail);?></p> -->

