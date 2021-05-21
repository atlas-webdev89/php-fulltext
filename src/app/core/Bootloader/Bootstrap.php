<?php

namespace Core\Bootloader;

/**
 * Description of Bootstrap
 *
 * @author doroshukdv
 */
class Bootstrap {
     static public function registerFabrica ($container) {
                //Данные для подключения к базе данных
                $container['db'] = function ($container) {
                    return $container ['settings']['db'];
                };
                
                //Корень приложения
                $container['document_root'] = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

                //Register dataBase connection (PDO) Singleton
                $container['pdo'] = function ($container) {
                        $connect = \Core\Connect\ConnectDB::getInstance($container ['db']);
                    return $connect->getConnect();
                };
                //Driver DB
                $container ['driverDB'] = function ($container) {
                    return new \Core\Drivers\DriverDB($container['pdo']);
                };
                
        return $container;
    }
}
