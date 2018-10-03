<?php

/**
 * @version     CVS: 1.0.0
 * @package     com_armz_structure
 * @subpackage  mod_armz_structure
 * @author      Cristopher chong <cris_chong2@hotmail.com>
 * @copyright   2018 Cristopher Chong - nOne.ru
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::register('ModArmz_structureHelper', dirname(__FILE__) . '/helper.php');

$doc = JFactory::getDocument();

/* */
$doc->addStyleSheet(JURI::base() . '/media/mod_armz_structure/css/style.css');

/* */
$doc->addScript(JURI::base() . '/media/mod_armz_structure/js/script.js');

require JModuleHelper::getLayoutPath('mod_armz_structure', $params->get('content_type', 'blank'));
