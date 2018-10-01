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


?>

<div class="item_fields">

	<table class="table">
		

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_TITLE'); ?></th>
			<td><?php echo $this->item->title; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_ALIAS'); ?></th>
			<td><?php echo $this->item->alias; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_TITLE_ENG'); ?></th>
			<td><?php echo $this->item->title_eng; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_COMPANY'); ?></th>
			<td><?php echo $this->item->company; ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_DESC'); ?></th>
			<td><?php echo nl2br($this->item->desc); ?></td>
		</tr>

		<tr>
			<th><?php echo JText::_('COM_ARMZ_VACANCIES_FORM_LBL_VACANCY_DESC_ENG'); ?></th>
			<td><?php echo nl2br($this->item->desc_eng); ?></td>
		</tr>

	</table>

</div>

