<?php

/**
 * Site Configuration File
 *
 * This file overrides properties defined in main configuration
 * file for Caracal located in `units/config.php`.
 */

use Core\Cache\Type as CacheType;

// document standard
define('_STANDARD', 'html5');
define('_TIMEZONE', 'America/New_York');

define('DEBUG', 1);
// define('SQL_DEBUG', 1);

// site language configuration
$available_languages = array('he');
$default_language = 'he';

// default session options
$session_type = Session::TYPE_BROWSER;

// database
$db_use = true;
$db_type = DatabaseType::MYSQL;
$db_config = array(
		'host' => 'localhost',
		'user' => 'flagman',
		'pass' => 'wNhp03@3',
		'name' => 'flagman'
	);

// configure code generation
$cache_method = CacheType::NONE;
$optimize_code = true;
$url_rewrite = true;

?>
