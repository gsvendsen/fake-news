<?php
declare(strict_types=1);

// Loops over each item in data array newsItems and creates article with the current item's information
foreach ($newsItems as $newsItem):
    $author = getUser($newsItem['authorId'], $authors)?>
    <div class="row">
        <div class="col-10 col-sm-8 mx-auto m-3">
            <div class="card">
                <div class="card-header">
                    <h4><?= $newsItem['title'] ?></h4>
                </div><!-- /card-header -->
                <div class="card-body">
                    <p><?= $newsItem['content'] ?></p>
                    <div class="row">
                        <img class="col-xl-1 col-lg-2 col-sm-2 w-25 h-25 rounded-circle img-fluid" src="img/<?= $author['img']?>">
                        <p class="mt-auto md-auto"><?= $author['name']; ?></p>
                    </div><!-- /row -->
                    <p class="font-weight-light m-3">Published : <?= $newsItem['publishedDate'] ?></p>
                </div><!-- /card-body -->
                <div class="card-footer bg-transparent">
                    <div class="row">
                        <p class="m-2">Likes: <?= $newsItem['likeCount'] ?></p>
                    </div><!-- /row -->
                </div><!-- /card-footer -->
            </div><!-- /card -->
        </div><!-- /column -->
    </div><!-- /row -->
<?php endforeach; ?>
<div class="top-button">
    <p class="up-arrow">⇧</p>
</div><!-- /top-button -->
