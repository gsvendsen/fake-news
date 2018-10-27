<?php

declare(strict_types=1);
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

// Sorts the array $newsItems using callback function comparedates()
uSort($newsItems, 'compareDates')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fake News Feed</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Fake News</a>
        </nav>
        <?php
        // Loops over each item in data array newsItems and creates article with the current item's information
        foreach ($newsItems as $newsItem): ?>
        <div class="row">
            <div class="col-sm-6 mx-auto m-3">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $newsItem['title'] ?></h4>
                    </div>
                    <div class="card-body">
                        <p><?= $newsItem['content'] ?></p>
                        <p><?= getUserName($newsItem['author'], $authors); ?></p>
                        <p class="font-weight-light"><?= $newsItem['publishedDate'] ?></p>
                        <p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="row">
                                <p class="m-2">Likes: <?= $newsItem['likeCount'] ?></p>
                                <button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Like</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

      </div>
    </body>
</html>
