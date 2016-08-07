<?php
session_start();

// the advertising message
$_SESSION['AdvertiseMessage'] = "hey [user] check out this cool website http://forums.mcrafters.ml";
//
//send an advertisement on user join you can toogle this by typing between "" true or false
$_SESSION['AdvertiseOnUserJoin'] = "true";
//
// Enable and disable spam command you can toogle this by typing between "" true or false
$_SESSION['SpamCommand'] = "true";
//
//Spam message setting up
//Note: You cant use [user] in the spam message
$_SESSION['SpamMessage'] = "Hello Check This Cool Website http://forums.mcrafters.ml";


return array(
    'server'   => 'irc.freenode.org',
    'port'     => 6667,
    'name'     => 'AddsBot',
    'password' => '',
    'nick'     => 'AddsBot',
    'channels' => array(
        '##spam',
    ),
    'timezone' => 'America/New_York',
    'max_reconnects' => 1,
    'prefix'         => '!',
    'log' => array(
        'file'       => 'log', // No file extension!
        'dir'        => ROOT_DIR . '/logs',

        // Set this if you want only output from specific channel(s) to show up.
        // This will not log any other output, so this is not useful for debugging.
        // This is particularly useful if you use public logs.
        // Can contain multiple channels.
        'filter'     => array(),
    ),
        'commands'         => array(
        'Command\Say'      => array(),
        'Command\Spam'     => array(),
        'Command\Help'     => array(),
    ),
    'listeners' => array(
        'Listener\Joins' => array(),
    ),
    'hosts' => array(
        '29ed9bd7@gateway/web/cgi-irc/kiwiirc.com/ip.41.237.155.215',
        )
    );
;

