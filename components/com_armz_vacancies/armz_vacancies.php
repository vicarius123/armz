<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_vacancies
 * @author     Cristopher Chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Armz_vacancies', JPATH_COMPONENT);
JLoader::register('Armz_vacanciesController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Armz_vacancies');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
