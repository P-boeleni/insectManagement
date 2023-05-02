<?php

require_once '../const.php';

$link = @mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);

mysqli_set_charset($link, 'utf8');

$result = mysqli_query($link, "SELECT * FROM to_did WHERE id =" .$_GET['id']);

$row = mysqli_fetch_assoc($result);

mysqli_close($link);

require_once './page/did.php';
