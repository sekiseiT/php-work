<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODOリスト</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>プロジェクトの作成</h1>
  <hr/>
  <form method="GET" action="index.php">
    <input type="text" name="title" size="50">
    <input type="submit" name="add_project" value="プロジェクトの作成">
  </form>

  <div id="project">

    <?php 
    $project_name = "";
    if(isset($_GET["add_project"])) {
      $project_name = $_GET["title"];
    }
    echo $project_name;
    ?>
  </div>
</body>
</html>