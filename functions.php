<?php

declare(strict_types=1);

/**
 * getUserName Fetches a user's full name using a unique userId
 * @param  string $userId   The userId which is searched for
 * @param  array  $userList List of all users and their information
 * @return string           Returns the user's full name which has the userId
 */
function getUserName(string $userId, array $userList): string{
    foreach($userList as $user){
        if ($user['userId'] == $userId) {
            return $user['name'];
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
