<?php
/**
 * @package		Jshopping Last Order - Module for Joomla!
 * @author		Makas - http://www.makas.it
 * @copyright	Copyright (c) 2013 Makas
 * @license		GNU/GPL license: http://www.gnu.org/licenses/gpl-2.0.html
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once( dirname(__FILE__).DS.'helper.php' );

$order = modJshopLastOrder::getLastOrder($params);

require( JModuleHelper::getLayoutPath( 'mod_jshoplastorder' ) );
?>