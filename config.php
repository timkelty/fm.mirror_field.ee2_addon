<?php

// Establish IS_AJAX constant
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

if (! defined('FM_MIRROR_NAME'))
{
	define('FM_MIRROR_NAME', 'Mirror Field');
	define('FM_MIRROR_NAME_MACHINE', 'fm_mirror_field'); // Should have no spaces in it
	define('FM_MIRROR_VER',  '1.0');
	define('FM_MIRROR_DESC', 'A fieldtype that mirror another field as you type.');
	define('FM_MIRROR_DOCS', 'https://github.com/timkelty/fm.mirror_field.ee2_addon');
	define('FM_MIRROR_AUTHOR', 'Fusionary');
	define('FM_MIRROR_URL', 'https://github.com/timkelty/fm.mirror_field.ee2_addon');
	
	define('FM_MIRROR_DB_SETTINGS', 'addon_settings');
}

$config['name']    = FM_MIRROR_NAME;
$config['version'] = FM_MIRROR_VER;
// $config['nsm_addon_updater']['versions_xml'] = '';
