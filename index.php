<?php namespace App;

require_once("autoloader.php");

use App\Facebook;
use App\Twitter;

function simulateNetworkLatency()
{
    $i = 0;
    while ($i < 5) {
        echo ".";
        sleep(1);
        $i++;
    }
}

echo "Username: \n";
$username = readline();

echo "Password: \n";
$password = readline();

echo "Message: \n";
$message = readline();

echo "\nChoose the social network to post the message:\n" .
    "1 - Facebook\n" .
    "2 - Twitter\n";
$choice = readline();


if ($choice == 1) {

    $network = new Facebook($username, $password);

} elseif ($choice == 2) {

    $network = new Twitter($username, $password);

} else {
    die("Sorry, I'm not sure what you mean by that.\n");
}

$network->post($message);