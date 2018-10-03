<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_structure
 * @author     Cristopher chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/**
 * Structures list controller class.
 *
 * @since  1.6
 */
class Armz_structureControllerStructures extends Armz_structureController
{
	/**
	 * Proxy for getModel.
	 *
	 * @param   string  $name    The model name. Optional.
	 * @param   string  $prefix  The class prefix. Optional
	 * @param   array   $config  Configuration array for model. Optional
	 *
	 * @return object	The model
	 *
	 * @since	1.6
	 */
	public function &getModel($name = 'Structures', $prefix = 'Armz_structureModel', $config = array())
	{
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));

		return $model;
	}
}
