<?php

include './lib/loader.php';
include './app/StartHandler.php';


use lib\Api;

$token = '1234567:ABCd';

$bot = new Api($token);

$bot->onText('\/start',app\StartHandler::class);
