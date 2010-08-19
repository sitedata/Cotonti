<?php
/**
 * Russian Language File for News Plugin
 *
 * @package news
 * @version 0.7.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2010
 * @license BSD
 */

defined('SED_CODE') or die('Wrong URL.');

/**
 * Plugin Config
 */

$L['cfg_category'] = array('Категории новостной ленты',
 'Введите коды категорий новостной ленты, разделенные запятыми. Для вывода на главной странице главной(первая в списке) категории новостей используйте тэг {INDEX_NEWS} в файле index.tpl.<br />
Вывод дополнительных(остальные) категорий  новостей осуществляется при помощи тэга <strong>{INDEX_NEWS_КОДКАТЕГОРИИ}</strong> в файле index.tpl.
При помощи шаблона <strong>news.кодкатегории.tpl</strong> можно настроить отображение новостной ленты для каждой из категорий.');
$L['cfg_maxpages'] = array('Количество отображаемых страниц');
$L['cfg_syncpagination'] = array('Синхронное переключение страниц');

$L['Maincat']='Основная категория новостей';
$L['Addcat']='Дополнительные категории новостей';
$L['NewsCount']='Количество новостей';
$L['Template']='Шаблон';
$L['Template_help']='Если отсутствует шаблон дополнительных новостых категорий в папке {ВАШ_СКИН}/plugins, то будет использован шаблон основной новостной категории';
$L['Newscat_exists']='Данная категория уже выбрана. Выберите другую категорию';
$L['Unsetadd']= 'Не использовать дополнительную категорию, если она соответствует основной категории.';
$L['Newsautocut']='Ограничение символов';
$L['Newsautocutdesc']='На странице новостей будут выведены только первые N символов, указанные в настройках, с учетом абзацев. По умолчанию обрезка новостей не производится.';

?>