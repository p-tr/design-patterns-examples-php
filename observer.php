<?php

require(__DIR__ . '/vendor/autoload.php');

$user = new User('Titi', 'titi@titi.com');

$listener = new UserEventListener();
$listener->attach($user);

$user->setUsername('Toto');
$user->setEmail('toto@toto.com');
