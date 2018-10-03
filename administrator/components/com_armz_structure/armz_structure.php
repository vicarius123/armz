<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_structure
 * @author     Cristopher chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_armz_structure'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Armz_structure', JPATH_COMPONENT_ADMINISTRATOR);
JLoader::register('Armz_structureHelper', JPATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'armz_structure.php');

$controller = JControllerLegacy::getInstance('Armz_structure');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
