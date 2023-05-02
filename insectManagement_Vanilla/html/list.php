<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "antaeus";?> list</title>
</head>
<body>
    <h2><?php echo "antaeus";?> list</h2>

<table>
  <tr>
  <th></th>
  <th>ID</th>
  <th>累代</th>
  <th>サイズ</th>
  <th>産地</th>
  <th>羽化日</th>
  </tr>

  <?php foreach ($array_ante as $list): ?>
  <tr>
    <td><img src="./img/insect/<?php echo $list['ID'];?>.jpg" height="80px"></td>
    <td><a href="./detail.php?id=<?php echo $list['ID'];?>"><?php echo $list['ID']; ?></a></td>
    <td><?php echo $list['eon'];?></td>
    <td><?php echo $list['size'];?>mm</td>
    <td><?php echo $list['origin'];?></td>
    <td><?php echo $list['emergence_day'];?></td>
  </tr>
  <?php endforeach; ?>
  </table>
  <a href="insert.php">生体登録</a>
  <a href="die_list.php">死亡した個体の一覧</a>
</body>
</html>