<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/to_did.css">
    <title>to did list</title>
</head>
<body>

<h2>to did list</h2>
<table>
  <tr>
  <th>種類</th>
  <th>したこと</th>
  <th>詳細</th>
  <th>実施日</th>
  </tr>

  <?php foreach ($array_row as $did_list): ?>
  <tr>
    <td><a href="./did.php?id=<?php echo $did_list['id'];?>"><img src="../img/<?php echo $did_list['type']; ?>.png" height="100px"></a></td>
    <td><?php echo $did_list['did'];?></td>
    <td><?php echo $did_list['detail'];?></td>
    <td><?php echo date('Y/m/d H:i', strtotime($did_list['did_date']));?></td>
  </tr>
  <?php endforeach; ?>
  </table>

  <a href="./input.php">登録</a>
</body>
</html>

<!--<td class="icon <?php $did_list['type'];?>">test</td>-->
