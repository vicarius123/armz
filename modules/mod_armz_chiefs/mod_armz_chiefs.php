<?php

/**
 * @version     CVS: 1.0.0
 * @package     com_armz_chiefs
 * @subpackage  mod_armz_chiefs
 * @author      Cristopher Chong <cris_chong2@hotmail.com>
 * @copyright   2018 Cristopher Chong - nOne.ru
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::register('ModArmz_chiefsHelper', dirname(__FILE__) . '/helper.php');

$doc = JFactory::getDocument();

/* */
$doc->addStyleSheet(JURI::base() . '/media/mod_armz_chiefs/css/style.css');

/* */
$doc->addScript(JURI::base() . '/media/mod_armz_chiefs/js/script.js');

require JModuleHelper::getLayoutPath('mod_armz_chiefs', $params->get('content_type', 'blank'));
