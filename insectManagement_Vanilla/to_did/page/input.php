<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to did リスト</title>
    <link rel="icon" type="image/x-icon" href="../../img/test.ico">
</head>
<body>
    <h1>to did リスト</h1>

    <form action="./query.php" method="post">
<table>
  <tr><th>種類</th><td><select name="type">
        <option value="stagbeetle">クワガタ</option>
        <option value="neptune">カブト（ネプチューン）</option>
        <option value="tropical">プレコ</option>
        <option value="flog">カエル</option>
        <option value="plants">植物</option>
  </select>
  <tr><th>やったこと</th><td><input type="text" name="did"></td></tr></td></tr>
  <tr><th>詳細</th><td><input type="text" name="detail"></td></tr>
  <tr><th>メモ</th><td><input type="text" name="memo"></td></tr>
  <tr><td colspan="2"><button type="submit">登録する</button></td></tr>
</table>
</form>
</body>
</html>
