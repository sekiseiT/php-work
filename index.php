  <?php 
    $result = "";
    if(isset($_POST['add'])) {
      $result = "登録しました";
    }
    echo $result;
  ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ボタンを押すと反応</title>
</head>
<body>
  <form action="index.php" method="post">
    <button type="submit" name = "add">登録</button>
  </form>
</body>
</html>