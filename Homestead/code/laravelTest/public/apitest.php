<?php
// 文字コード設定
header('Content-Type: text/html; charset=UTF-8');

//====================WebAPI取得=============================================
// エンドポイントにセット出来る値、本来はここでレスポンスが色々変化するようにする？
$num = 10;
// WebAPIのURL
$url = "http://localhost/tp_biz55_yellow/api.php?num=${num}";  //ローカル用url、xampp環境

// URLの内容を取得し、json形式からstdClass形式にデコードして取得
$data = json_decode(file_get_contents($url));
//===========================================================================


//==================取得したAPIから使いたい物を取得======================
// 連想配列で取得したかったら第二引数にtrueを指定↓
// $data = json_decode(file_get_contents($url), true);

// APIから取得したJSONのstatusがyesだったら
if($data->status == "yes") {
    print $data->name;
    print $data->age;
}

//取得したAPIの結果をそのまま表示（JSON形式、そのままだと全角文字が文字化けする）
//$data = file_get_contents($url);
//print $data;
//=====================================================================