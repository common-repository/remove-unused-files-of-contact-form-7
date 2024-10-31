<?php
/*
   Plugin Name: Rufo Remove Unused Files of Contact Form 7
   Requires Plugins: contact-form-7
   Plugin URI: https://www.globaliser.com/rufo/
   description: Automatically remove style (css) and javascript (js) files from pages which Contact Form 7 is not used.
   Version: 1.0.0
   Author: Globaliser, Inc.
   Author URI: https://www.globaliser.com
   License: GPL2
   Text Domain: rufo-remove-unused-files-of-cf7
   Domain Path: /languages
   License: GPL3 
   */

namespace RufoCF7;

// If this file is called directly, abort. //
if (!defined('WPINC')) die;

// RUFO_PATH CONSTANT USED THROUGH THE WHOLE PLUGIN FOR RELATIVE PATHS
define('RufoCF7\RUFO_PATH', __DIR__);

// RUFO PLUGIN NAME
define('RufoCF7\RUFO_NAME', plugin_basename(__FILE__));

// LOAD ATA BASE PLUGIN
require_once RUFO_PATH . '/vendor/ata/ata.php';

// INCLUDES
require_once RUFO_PATH . '/inc/default.php';

// DON'T CHANGE OR REMOVE LINES BETWEEN BEGIN AND END
// BEGIN
ATA\ATAConfig::$plugin_namespace = Plugin::NAMESPACE;
ATA\ATAConfig::$plugin_path = RUFO_PATH;
ATA\ATAConfig::$plugin_folder = Plugin::FOLDER;
ATA\ATAConfig::$view_path = RUFO_PATH . '/app/views/';
// END

$rufo_plugin = new RufoController();

// Activate Plugin
register_activation_hook(__FILE__, [$rufo_plugin, 'activate']);

// Deactivate Plugin
register_deactivation_hook(__FILE__, [$rufo_plugin, 'deactivate']);
