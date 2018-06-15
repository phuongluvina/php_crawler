<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * NOTICE:
 *
 * If you need to make modifications to the default configuration, copy
 * this file to your app/config folder, and make them in there.
 *
 * This will allow you to upgrade fuel without losing your custom config.
 */

return array(

	/*
	 * Which version of the schema should be considered "current"
	 *
	 * Default: 0
	 */
	'version' => array(
		'app' => array(
			'default' => 0,
		),
		'module' => array(),
		'package' => array(),
	),

	/*
	 * Folder name where migrations are stored relative to App, Module and Package Paths?
	 *
	 * Default: 'migrations/'
	 */
	'folder' => 'migrations/',

	/*
	 * Table name
	 *
	 * Default: 'migration'
	 */
	'table' => 'migration',

	/**
	 * Flush all cache after running migrations
	 *
	 * Default: false
	 */
	 'flush_cache' => false,

);
