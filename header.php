<?php
declare(strict_types=1);
require_once __DIR__.'/data.php';
require_once __DIR__.'/functions.php';

// Sorts the array $newsItems by default using callback function comparedates() to newest first
uSort($newsItems, 'compareDates');

// Checks if user has selected sorting
if(isset($_GET['sortBy'])){

    // Sets order of posts to oldest first
    if($_GET['sortBy'] === 'old'){
        $newsItems = array_reverse($newsItems);
    }

    // Sets order of posts to newest first
    if($_GET['sortBy'] === 'new'){
        uSort($newsItems, 'compareDates');
    }
}

// Filters feed to show selected author
if(isset($_GET['filterAuthor'])){
    $showAuthor = $_GET['filterAuthor'];
    $newsItems = array_filter($newsItems, function($newsItem) use ($authors) {
        return(getUser($newsItem['authorId'], $authors)['name'] == $_GET['filterAuthor']);
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Fake News</a>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sort By:
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="?sortBy=new">New → Old</a>
                <a class="dropdown-item" href="?sortBy=old">Old → New</a>
            </div><!-- /dropdown-menu -->
        </div><!-- /dropdown -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter by Author:
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php">Show All</a>
                <?php foreach ($authors as $author): ?>
                    <a class="dropdown-item" href="?filterAuthor=<?= $author['name'] ?>"><?= $author['name'] ?></a>
                <?php endforeach; ?>
            </div><!-- /dropdown-menu -->
        </div><!-- /dropdown -->
    </nav>
