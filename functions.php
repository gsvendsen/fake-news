<?php

declare(strict_types=1);

/**
 * [getUserName Fetches a user's full name using a unique userId]
 * @param  string $userId   [The userId which is searched for]
 * @param  array  $userList [List of all users and their information]
 * @return string           [Returns the user's full name which has the userId]
 */
function getUserName(string $userId, array $userList): string{
  foreach($userList as $user){
    if ($user['userId'] == $userId) {
        return $user['name'];
    }
  }
}

/**
 * [sortDates Function that is used for usort, sorts two dates at a time]
 * @param  [type] $a [The first date]
 * @param  [type] $b [The second date]
 * @return [type]    [Returns the correct order]
 */
function sortDates($a, $b) {
    return strtotime($b['publishedDate']) - strtotime($a['publishedDate']);
}
