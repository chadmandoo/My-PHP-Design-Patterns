<?php

/**
 * @file
 * Demonstrating an adapter pattern.
 *
 * To ensure this works you must have the twilio api and sendgrid.
 * this is just an example.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
use Patterns\Adapter\Message;

$notify = new Message('username', 'password');

// Sending a SMS message.
$notify->send('15556667777', '15556668888', 'body of the message');
