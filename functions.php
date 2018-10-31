<?php
declare(strict_types=1);

/**
 * getUser Fetches a user's data array using a unique userId
 * @param  int $userId The userId which is searched for
 * @param  array $userList List of all users and their information
 * @return array
 */
function getUser(int $userId, array $userList): array{
    foreach($userList as $user){
        if ($user['userId'] == $userId) {
            return $user;
        }
    }
}

/**
 * compareDates Function that compares the publishedDate of two arrays
 * @param  array $a First array
 * @param  array $b Second array
 * @return int
 */
function compareDates(array $a,array $b):int{
    return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
}
