<?php

declare(strict_types=1);

/**
 * getUser Fetches a user's data array using a unique userId
 * @param  int $userId   The userId which is searched for
 * @param  array  $userList List of all users and their information
 * @return string $user  Returns the user's data array
 */
function getUser(int $userId, array $userList): array{
    foreach($userList as $user){
        if ($user['userId'] == $userId) {
            return $user;
        }
    }
}

/**
 * sortDates Callback function that is used for uSort, sorts two dates at a time
 * @param  array $a The first newsItem
 * @param  array $b The second newsItem
 * @return int    Returns the correct sort
 */
function compareDates(array $a,array $b):int{
    return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
}
