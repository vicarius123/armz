<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_vacancies
 * @author     Cristopher Chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_armz_vacancies'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Armz_vacancies', JPATH_COMPONENT_ADMINISTRATOR);
JLoader::register('Armz_vacanciesHelper', JPATH_COMPONENT_ADMINISTRATOR . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'armz_vacancies.php');

$controller = JControllerLegacy::getInstance('Armz_vacancies');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
