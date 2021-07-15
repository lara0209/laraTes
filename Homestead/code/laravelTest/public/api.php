<?php
//数字の10が渡されたら固定の文字列を返すWebAPI

// 文字コード設定
header('Content-Type: application/json; charset=UTF-8');

// numがurlに存在する、かつnumが数字のみかどうか
if(isset($_GET["num"]) && !preg_match('/[^0-9]/', $_GET["num"])) {
    // numをエスケープ(xss対策)
    $param = htmlspecialchars($_GET["num"]);

    $arr["status"] = "yes";
    $arr["name"] = "徳川家康";
    $arr["age"] = "18歳";
} else {
    // パラメーターの値が規定の奴じゃないならstatusにnoと入れて返す
    $arr["status"] = "no";
}

// 配列をjson形式にエンコード, 第二引数は、整形するためのオプションらしい
print json_encode($arr, JSON_PRETTY_PRINT);