<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_chiefs
 * @author     Cristopher Chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_armz_chiefs'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Armz_chiefs', JPATH_COMPONENT_ADMINISTRATOR);
JLoader::register('Armz_chiefsHelper', JPATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'armz_chiefs.php');

$controller = JControllerLegacy::getInstance('Armz_chiefs');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
