<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/sqli.css">
    <favicon></favicon>
    <title>会員詳細</title>
</head>
<body>
    <h2>詳細</h2>
    
    <p><img src="../img/<?php echo $row['type'];?>.png" height="300px"></p>
    <table>
    <tr><td>種類</td><td><?php echo $row['type']; ?></td></tr>
    <tr><td>したこと</td><td><?php echo $row['did']; ?></td></tr>
    <tr><td>詳細</td><td><?php echo $row['detail']; ?></td></tr>
    <tr><td>メモ</td><td><?php echo $row['memo']; ?></td></tr>
  </table>
</body>
</html>