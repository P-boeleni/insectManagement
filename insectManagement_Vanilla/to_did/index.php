<?php

require_once '../const.php';

$link = @mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);

mysqli_set_charset($link, 'utf8');

$list = mysqli_query($link, "SELECT * FROM to_did WHERE did_date IS NOT NULL ORDER BY did_date DESC");

mysqli_close($link);

while ($row = mysqli_fetch_assoc($list)){
    $array_row[] = $row;
}

require_once 'page/index.php';
