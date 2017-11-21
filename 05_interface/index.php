<?php 
require_once("Likeable.php");
require_once("Facebook.php");
require_once("Twitter.php");
require_once("SocialCompare.php");

$fbAhok = new Facebook("Ahok");
$fbAhok->setLike();
$fbAhok->setLike();
$fbAhok->setLike();

$tweetAnies = new Twitter("Anis");
$tweetAnies->setLike();
$tweetAnies->setLike();
$tweetAnies->setLike();
$tweetAnies->setLike();

SocialCompare::compare($fbAhok, $tweetAnies);
?>