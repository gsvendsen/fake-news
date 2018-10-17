<?php

declare(strict_types=1);
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

usort($newsItems, "sortDates");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fake News Feed</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <div class="wrapper">
        <?php foreach ($newsItems as $newsItem): ?>
        <article>
          <h2><?= $newsItem['title'] ?></h2>
          <h3><?= getUserName($newsItem['author'], $authors).' ('.$newsItem['author'].')'; ?></h3>
          <p>Published: <?= $newsItem['publishedDate'] ?></p>
          <p><?= $newsItem['content'] ?></p>
          <div class="likeBox">
            <img class="thumbsUp" src="https://png.icons8.com/metro/1600/thumb-up.png" alt="">
            <div class="likeCounter">
              <p><?= $newsItem['likeCount'] ?></p>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </body>
</html>
