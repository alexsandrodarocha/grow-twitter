<?php

require_once ('./user.php');
require_once ('./tweet.php');

$user1 = new User("Alex", "alex@gmail.com", "@alexcolorado", "inter1979");
$user2 = new User("User2", "user2@gmail.com", "@user2", "user123");
$user3 = new User("User3", "user3@gmail.com", "@user3", "user123");
$users = [$user1, $user2, $user3];

$tweet1 = new Tweet("Vamo inter!", $user1->getId());
$tweet2 = new Tweet("Adoro a growdev :)", $user2->getId());
$tweet3 = new Tweet("hehehe", $user3->getId());
$tweets = [$tweet1, $tweet2, $tweet3];

$tweet1->addLike($user2->getId());
$tweet2->addLike($user1->getId());
$tweet2->addLike($user2->getId());

foreach ($tweets as $tweet) {
    $user = findUserById($tweet->getUserId(), $users);
    $username = $user->getUsername();
    $content = $tweet->getContent();
    $likesString = $tweet->getLikesString($users);
    if (empty($likesString)) {
        $likesString = "0 likes";
    } else {
        $likesString = $tweet->getLikesString($users);
    }
    
    echo ("$username: $content <br> [$likesString]");
    echo ("<br> <hr>");
}

function findUserById($id, $users)
{
    foreach ($users as $user) {
        if ($user->getId() === $id) {
            return $user;
        }
    }
    return null;
}

?>