<?php
declare(strict_types=1);
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

// Sorts the array $newsItems by default using callback function comparedates() to newest first
uSort($newsItems, 'compareDates');

// Checks if user has selected a sorting preference
if(isset($_GET['sortBy'])){

    // Reversed order to oldest first if user selected old
    if($_GET['sortBy'] === 'old'){
        $newsItems = array_reverse($newsItems);
    }

    // Sets order back to default newest if user selected new
    if($_GET['sortBy'] === 'new'){
        uSort($newsItems, 'compareDates');
    }
}

// Filters feed to show selected author
if(isset($_GET['filterAuthor'])){
    $showAuthor = $_GET['filterAuthor'];
    $newsItems = array_filter($newsItems, function($newsItem) use ($authors) {
        return(getUser($newsItem['author'], $authors)['name'] == $_GET['filterAuthor']);
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fake News Feed</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Fake News</a>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?sortBy=new">New → Old</a>
                <a class="dropdown-item" href="?sortBy=old">Old → New</a>
            </div><!-- /dropdown-menu -->
        </div><!-- /dropdown -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter by Author
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php">Show All</a>
                <?php foreach ($authors as $author): ?>
                    <a class="dropdown-item" href="?filterAuthor=<?= $author['name'] ?>"><?= $author['name'] ?></a>
                <?php endforeach; ?>
            </div><!-- /dropdown-menu -->
        </div><!-- /dropdown -->
    </nav>

    <?php
    // Loops over each item in data array newsItems and creates article with the current item's information
    foreach ($newsItems as $newsItem):
        $author = getUser($newsItem['author'], $authors)?>
        <div class="row">
            <div class="col-10 col-sm-8 mx-auto m-3">
                <div class="card">
                    <div class="card-header">
                        <h4><?= $newsItem['title'] ?></h4>
                    </div><!-- /card-header -->
                    <div class="card-body">
                        <p><?= $newsItem['content'] ?></p>
                        <div class="row">
                            <img class="col-2 col-sm-1 w-25 h-25 rounded-circle img-fluid" src="img/<?= $author['img']?>">
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

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
