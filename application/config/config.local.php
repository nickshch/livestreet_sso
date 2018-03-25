<?php
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 * Именно в этом файле необходимо переопределять все настройки конфига
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = '2112';
$config['db']['params']['type']   = 'mysqli';
$config['db']['params']['dbname'] = 'livestreet';
$config['db']['table']['prefix'] = 'prefix_';

/**
 * Настройки кеширования
 */
$config['sys']['cache']['use'] = false;               // использовать кеширование или нет
$config['sys']['cache']['type'] = 'file';             // тип кеширования: file, xcache и memory. memory использует мемкеш, xcache - использует XCache

/**
 * Параметры обработки css/js-файлов
 */
$config['module']['asset']['force_https'] = true; // При использовании https принудительно заменять http на https у путях до css/js
$config['module']['asset']['css']['merge'] = true; // указывает на необходимость слияния css файлов
$config['module']['asset']['js']['merge'] = true; // указывает на необходимость слияния js файлов


$config['db']['tables']['engine'] = 'InnoDB';
$config['path']['root']['web'] = 'http://127.0.0.1:8080';
$config['path']['offset_request_url'] = 0;
$config['module']['blog']['encrypt'] = '6b7639ac9609a7736416297e8ad77d0f';
$config['module']['talk']['encrypt'] = '66208b7f61325133576570258b55a5a4';
$config['module']['security']['hash'] = '6698f84053348c6a97ee92364dde39bb';
return $config;