<?php

require_once './const.php';

//SQLへログイン
$link = @mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);

mysqli_set_charset($link, 'utf8');

//テーブル検索
$result = mysqli_query($link,"SELECT * FROM main_management WHERE ID ='" .$_GET['id']."'");

//テーブルデータ
$row = mysqli_fetch_assoc($result);

$lavae = mysqli_query($link,"SELECT * FROM exchange WHERE ID ='" .$_GET['id']."'");

//テーブルデータ
while ($row_lavae = mysqli_fetch_assoc($lavae)){
    $array_lavae[] = $row_lavae;
}
//処理終了
mysqli_close($link);

require_once './html/detail.php';
