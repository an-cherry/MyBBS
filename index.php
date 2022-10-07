<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyBBS</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<section class="posts">
  <form action="sent.php" method="post">

  <div>
    <p>投稿者：</p>
    <input type="text" name="name"><br>
  </div>

  <div>
    <p>本文：</p>
    <textarea name="text"></textarea><br>
  </div>

  <input type="submit" value="投稿">
  </form>
</section>

<section class="list">
  <?php
    $db = new PDO("mysql:host=localhost;dbname=mybbs", "root", "root");
    $posts=$db->query('SELECT * FROM posts ORDER BY id DESC');
    foreach($posts as $post): 
  ?>
  <?php echo htmlspecialchars($post['id'], ENT_QUOTES); ?>： 
  <?php echo htmlspecialchars($post['name'], ENT_QUOTES); ?> / 
  <?php echo htmlspecialchars($post['date'], ENT_QUOTES); ?><br>
  <?php echo htmlspecialchars($post['body'], ENT_QUOTES); ?><hr>
  <?php endforeach; ?>
</section> 

</body>
</html>