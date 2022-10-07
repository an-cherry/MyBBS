<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyBBS</title>
<style>
  body {
    text-align: center;
  }

  div {
    border: 1px solid lightblue;
    border-radius: 10px;
    background-color: lightcyan;
    padding: 0 20px;
    
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>
</head>

<body>
  
<?php
    
if(!empty($_POST["name"]) && !empty($_POST["text"])) {
  $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
  $text = htmlspecialchars($_POST["text"], ENT_QUOTES);
      
  $db = new PDO("mysql:host=localhost;dbname=mybbs", "root", "root");
      
  $db -> query("INSERT INTO posts(id, name, body, date)
              VALUES(NULL, '$name', '$text', NOW())");
}
?>  

<div>
  <p>投稿完了</p>
  <p><a href=index.php>戻る</a></p>
</div>

</body>

</html>