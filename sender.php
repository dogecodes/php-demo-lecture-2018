<?php

require 'vendor/autoload.php';

// $domain;
// $apiKey;
require 'config.php';

use Mailgun\Mailgun;

$mailgun = Mailgun::create($apiKey);

$mailgun->messages()->send($domain, [
    'from' => (isset($_POST['from'])) ? $_POST['from'] : 'test@email.com',
    'to' => (isset($_POST['to'])) ? $_POST['to'] : 'test@email.com',
    'subject' => (isset($_POST['subject'])) ? $_POST['subject'] : 'Hey',
    'text' => (isset($_POST['message'])) ? $_POST['message'] : 'Hey, I\'m Billy.',
]);

header('Location: /?success=1');
die;