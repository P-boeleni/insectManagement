<?php

require_once './const.php';

//SQLへログイン
$link = @mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);

//ログイン失敗時
if(!$link){
    $err_msg = '接続エラーが出ました。管理者へお問い合わせください。';
    require_once './tpl/error.php';
    exit;
}

mysqli_set_charset($link, 'utf8');

$antaeus = mysqli_query($link, "SELECT * FROM main_management WHERE die_date IS NOT NULL ORDER BY ID ASC");

if(!$antaeus){
    mysqli_close($link);
    $err_msg = 'データ接続に失敗しました。しばらくたってから再度お試しください。';
    require_once './tpl/error.php';
    exit;
}

//テーブルデータをループで出していく
while ($row = mysqli_fetch_assoc($antaeus)){
    $array_ante[] = $row;
}

//処理終了
mysqli_close($link);

require_once './html/die_list.php';
