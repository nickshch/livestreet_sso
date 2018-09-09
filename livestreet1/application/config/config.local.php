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
$config['db']['params']['dbname'] = 'livestreet_1';
$config['db']['table']['prefix'] = 'prefix_';


$config['db_user']['params']['host'] = 'localhost';
$config['db_user']['params']['port'] = '3306';
$config['db_user']['params']['user'] = 'root';
$config['db_user']['params']['pass'] = '2112';
$config['db_user']['params']['type']   = 'mysqli';
$config['db_user']['params']['dbname'] = 'livestreet_user';
$config['db_user']['table']['prefix'] = 'common_';


$config['db_user']['table']['user'] = '___db_user.table.prefix___user';
$config['db_user']['table']['blog'] = '___db_user.table.prefix___blog';
$config['db_user']['table']['topic'] = '___db_user.table.prefix___topic';
$config['db_user']['table']['topic_tag'] = '___db_user.table.prefix___topic_tag';
$config['db_user']['table']['topic_type'] = '___db_user.table.prefix___topic_type';
$config['db_user']['table']['comment'] = '___db_user.table.prefix___comment';
$config['db_user']['table']['vote'] = '___db_user.table.prefix___vote';
$config['db_user']['table']['topic_read'] = '___db_user.table.prefix___topic_read';
$config['db_user']['table']['blog_user'] = '___db_user.table.prefix___blog_user';
$config['db_user']['table']['favourite'] = '___db_user.table.prefix___favourite';
$config['db_user']['table']['favourite_tag'] = '___db_user.table.prefix___favourite_tag';
$config['db_user']['table']['talk'] = '___db_user.table.prefix___talk';
$config['db_user']['table']['talk_user'] = '___db_user.table.prefix___talk_user';
$config['db_user']['table']['talk_blacklist'] = '___db_user.table.prefix___talk_blacklist';
$config['db_user']['table']['friend'] = '___db_user.table.prefix___friend';
$config['db_user']['table']['topic_content'] = '___db_user.table.prefix___topic_content';
$config['db_user']['table']['comment_online'] = '___db_user.table.prefix___comment_online';
$config['db_user']['table']['invite_code'] = '___db_user.table.prefix___invite_code';
$config['db_user']['table']['invite_use'] = '___db_user.table.prefix___invite_use';
$config['db_user']['table']['page'] = '___db_user.table.prefix___page';
$config['db_user']['table']['reminder'] = '___db_user.table.prefix___reminder';
$config['db_user']['table']['session'] = '___db_user.table.prefix___session';
$config['db_user']['table']['notify_task'] = '___db_user.table.prefix___notify_task';
$config['db_user']['table']['userfeed_subscribe'] = '___db_user.table.prefix___userfeed_subscribe';
$config['db_user']['table']['stream_subscribe'] = '___db_user.table.prefix___stream_subscribe';
$config['db_user']['table']['stream_event'] = '___db_user.table.prefix___stream_event';
$config['db_user']['table']['stream_user_type'] = '___db_user.table.prefix___stream_user_type';
$config['db_user']['table']['user_field'] = '___db_user.table.prefix___user_field';
$config['db_user']['table']['user_field_value'] = '___db_user.table.prefix___user_field_value';
$config['db_user']['table']['subscribe'] = '___db_user.table.prefix___subscribe';
$config['db_user']['table']['wall'] = '___db_user.table.prefix___wall';
$config['db_user']['table']['user_note'] = '___db_user.table.prefix___user_note';
$config['db_user']['table']['user_complaint'] = '___db_user.table.prefix___user_complaint';
$config['db_user']['table']['geo_country'] = '___db_user.table.prefix___geo_country';
$config['db_user']['table']['geo_region'] = '___db_user.table.prefix___geo_region';
$config['db_user']['table']['geo_city'] = '___db_user.table.prefix___geo_city';
$config['db_user']['table']['geo_target'] = '___db_user.table.prefix___geo_target';
$config['db_user']['table']['user_changemail'] = '___db_user.table.prefix___user_changemail';
$config['db_user']['table']['property'] = '___db_user.table.prefix___property';
$config['db_user']['table']['property_target'] = '___db_user.table.prefix___property_target';
$config['db_user']['table']['property_select'] = '___db_user.table.prefix___property_select';
$config['db_user']['table']['property_value'] = '___db_user.table.prefix___property_value';
$config['db_user']['table']['property_value_tag'] = '___db_user.table.prefix___property_value_tag';
$config['db_user']['table']['property_value_select'] = '___db_user.table.prefix___property_value_select';
$config['db_user']['table']['media'] = '___db_user.table.prefix___media';
$config['db_user']['table']['media_target'] = '___db_user.table.prefix___media_target';
$config['db_user']['table']['rbac_role'] = '___db_user.table.prefix___rbac_role';
$config['db_user']['table']['rbac_permission'] = '___db_user.table.prefix___rbac_permission';
$config['db_user']['table']['rbac_role_permission'] = '___db_user.table.prefix___rbac_role_permission';
$config['db_user']['table']['rbac_role_user'] = '___db_user.table.prefix___rbac_role_user';
$config['db_user']['table']['storage'] = '___db_user.table.prefix___storage';
$config['db_user']['table']['poll'] = '___db_user.table.prefix___poll';
$config['db_user']['table']['poll_answer'] = '___db_user.table.prefix___poll_answer';
$config['db_user']['table']['poll_vote'] = '___db_user.table.prefix___poll_vote';
$config['db_user']['table']['category'] = '___db_user.table.prefix___category';
$config['db_user']['table']['category_type'] = '___db_user.table.prefix___category_type';
$config['db_user']['table']['category_target'] = '___db_user.table.prefix___category_target';

$config['db_user']['tables']['engine'] = 'InnoDB';  // InnoDB или MyISAM

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
$config['path']['root']['web'] = 'http://localhost:8001';
$config['path']['offset_request_url'] = 0;
$config['module']['blog']['encrypt'] = '8ed49143ffe7f083521b619cb8b3e016';
$config['module']['talk']['encrypt'] = 'c31bed38c7633ee5c51bf129f1cfce4c';
$config['module']['security']['hash'] = '2823771440032b959a73d4a0817c7b1b';
return $config;