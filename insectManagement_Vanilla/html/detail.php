<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細</title>
</head>
<body>
    <h2>個体詳細</h2>
    <p><img src="./img/insect/<?php echo $row['ID'];?>.jpg" height="300px"></p>
    <h3>管理番号：<?php echo $row['ID'];?></h3>
    <p><?php echo $row['name'];?></p>
    <p>累代:<?php echo $row['eon'];?></p>
    <p>産地:<?php echo $row['origin'];?></p>
    <p>性別:<?php echo $row['sex'];?></p>
    <p>サイズ:<?php echo $row['size'];?>mm</p>
    <p>羽化日:<?php echo $row['emergence_day'];?></p>
    <p>後食日:<?php if(empty($row['meal_day'])){
        ?>
        不明
        <?php }
        else{echo $row['meal_day'];}
        ?>
    </p>
    <p>メモ:<?php echo $row['memo'];?></p>

    <h2>幼虫時のデータ</h2>
<?php if(empty($array_lavae)){ ?>
    <p>データなし</p>
  <?php  }
  else{?>
<table border="1">
  <tr>
  <th>交換日</th>
  <th>体重</th>
  <th>使用菌糸</th>
  <th>ボトルサイズ</th>
  <th>備考</th>
  </tr>

  <?php foreach ($array_lavae as $r_lav): ?>
  <tr>
    <td><?php echo $r_lav['exchange'];?></td>
    <td><?php echo $r_lav['weight'];?>g</td>
    <td><?php echo $r_lav['use_mycelium'];?></td>
    <td><?php echo $r_lav['bottle'];?>cc</td>
    <td><?php echo $r_lav['ex_memo'];?></td>
  </tr>
  <?php endforeach;
  }
  ?>
</table>
    <a href="update.php?=id<?php echo $row['ID'];?>">登録情報の変更へ</a>
    <a href="die.php?id=<?php echo $row['ID'];?>">死亡確認</a>
</body>
</html>
