<?php
require_once 'ClassAutoLoad.php';
$ObjSendMail-> Send_Mail();

$mailCnt = [
    'name_from' => 'Onesmus Kamau',
    'mail_from' => 'gateru57@gmail.com.',
    'name_to' => 'Onesmus Gateru',
    'mail_to' => 'gateru05@gmail.com',
    'subject' => 'Greetings from BBIT DevOps',
    'body' => 'Welcome to <b>BBIT DevOps</b>! This is a new semester of learning and growth.',
    ];
$ObjSendMail-> Send_Mail($CONF, $mailCnt);