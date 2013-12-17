<?php
/**
 * File Archive - тип топика "файл"
 *
 * Версия:	1.0.0
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_filearchive
 *
 **/

$config = array();

// Максимальное количество символов в одном топике-файле
$config['text_max_length'] = Config::Get('module.topic.max_length');

// Путь к каталогу с файлами
$config['uploads_files'] = '___path.uploads.root___/files';

// Максимальный размер файла, байт
$config['max_size'] = 1048576; // 1 МБ

// Доступ к скачиванию только пользователям
$config['only_users'] = true;

// Разрешенные расширения для файла
$config['allow_ext'] = array('pdf', 'rar', 'zip');

// Показывать число скачиваний в панели информации топика
$config['show_info'] = true;

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// НЕ ИЗМЕНЯТЬ
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Config::Set('router.page.file', 'PluginFilearchive_ActionFile');

$aTypes = Config::Get('block.rule_topic_type');
$aTypes['action']['file'] = array('add','edit');
Config::Set('block.rule_topic_type', $aTypes);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

return $config;
?>