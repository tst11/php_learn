<?php 

  $articles = [
    [
      "title" => "Blog post 1",
      "content" => "The first post."
    ],
    [
      "title" => "Blog post 2",
      "content" => "The second post."
    ],
    [
      "title" => "Blog post 3",
      "content" => "The third post."
    ],
    [
      "title" => "Blog post 4",
      "content" => "The fourth post."
    ]
  ]

?>

<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    
    <h1>Blog</h1>
    <ul>
      <?php foreach($articles as $article): ?>
      <li>
        <h3><?php echo $article["title"]; ?></h3>
        <p><?php echo $article["content"]; ?></p>
      </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>