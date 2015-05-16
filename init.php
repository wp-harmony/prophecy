<?php
/**
 * Prophecy - Routing
 *
 * Part of the Harmony Group 
 *
 * Plugin Name: Harmony Prophecy
 * Depends: Harmony Mana
 * 
 * @package Prophecy
 * @author  Simon Holloway <holloway.sy@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @version 2.0.0
 */

/**
 * Register Prophecy
 * 
 * @param Harmony\Mana\Container $app
 */
function prophecy_register($app)
{
	$app['autoloader']['Harmony\\Prophecy'] = __DIR__ . '/src';
	require('functions.php');
}

add_action('harmony_register', 'prophecy_register');


/**
 * Boot Prophecy
 * 
 * @param $app
 */
function prophecy_boot($app)
{

}

add_action('harmony_boot', 'prophecy_boot');
