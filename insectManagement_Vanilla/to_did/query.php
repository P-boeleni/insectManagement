<?php

/**
 * 
 * 
 * INSERT
 */

require_once '../const.php';

$link = @mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);

mysqli_set_charset($link, 'utf8');

if(empty($_POST['memo'])){
    $sql = "INSERT INTO to_did (type,did,detail) VALUES ('" . $_POST['type'] . "' , '" . $_POST['did'] . "' , '" . $_POST['detail'] . "')";
}
else{
    $sql = "INSERT INTO to_did (type,did,detail,memo) VALUES ('" . $_POST['type'] . "' , '" . $_POST['did'] . "' , '" . $_POST['detail'] . "' , '".$_POST['memo']."')";
}

mysqli_query($link, $sql);

$id = mysqli_insert_id($link);

mysqli_close($link);

require_once 'page/query.php';
