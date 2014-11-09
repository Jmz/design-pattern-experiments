<?php

// Includes
include('Observable.php');
include('Observer.php');
include('User.php');
include('UserObserver.php');

// Create the classes
$user = new User;
$userObserver = new UserObserver;

// Subscribe  $userOberver to the User class
$user->attach($userObserver);

// Update something on $user and $userObserver should be notified!
$user->update();