<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_structure
 * @author     Cristopher chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Armz_structure', JPATH_COMPONENT);
JLoader::register('Armz_structureController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Armz_structure');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
