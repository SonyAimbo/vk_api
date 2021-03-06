<?php
//require_once('../vendor/autoload.php'); //подключаем библу ЧЕРЕЗ COMPOSER
require_once('../autoload.php'); //подключаем библу
use DigitalStar\vk_api\vk_api;
use DigitalStar\vk_api\LongPoll;

//**********CONFIG**************
const VK_KEY = ""; //ключ авторизации сообщества, который вы получили
//******************************
$vk = vk_api::create(VK_KEY, '5.95');
$vk = new LongPoll($vk);

$vk->listen(function($data)use($vk){ //в $data содержится все данные события, можно убрать, если не нужен
    $vk->initVars('id, message', $id, $message);
    $vk->reply($message);
});
