<?php

//Уровень логирования
error_reporting(E_ALL);
//Вывод ошибок
ini_set('display_errors', 1);
//Ошибки при старте php 
ini_set('display_startup_errors', 1);
//Включение лога ошибок и указания файла для записи.
ini_set('log_errors', 'On');
ini_set('error_log', '/var/log/php/php_errors.log');

require_once 'vendor/autoload.php';
require_once 'app/config/config.php';


\Library\UsageMemory::start();
$time_load_page = \Library\Timer::getInstanse('start');

$config = [
    'settings' => [
        'determineRouteBeforeAppMiddleware' => true,
        //Подробнная инфа по ошибке
        'displayErrorDetails' => true,
        'debug' => true,
        'templates.path' => __DIR__.'/templates',
        
        'db' => [
            'host' =>       HOST,
            'dbname' =>     DBNAME,
            'user' =>       USER,
            'password' =>   PASSWORD
            ],
    ],    
];

$app = new \Slim\App($config);


//DI
$container = \Core\Bootloader\Bootstrap::registerFabrica($app);





//echo "Потребляемая память - ". \Library\UsageMemory::finish_memory()."<br>";
//echo "максимальное значение памяти " .(\Library\UsageMemory::finish_peak_memory())." байт <br>";
//Время выполения всех sql запросов
//Время генерации страницы
//echo "Время генерации страницы - ".$time_load_page->finish()." сек<br>";

//Добавляем маршруты
$container->routers->createRoutes($app);


//Запуск приложения  
$app->run();