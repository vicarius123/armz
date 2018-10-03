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
$elements = ModArmz_chiefsHelper::getList($params);
?>

<?php if (!empty($elements)) : ?>
	<table class="table">
		<?php foreach ($elements as $element) : ?>
			<tr>
				<th><?php echo ModArmz_chiefsHelper::renderTranslatableHeader($params, $params->get('field')); ?></th>
				<td><?php echo ModArmz_chiefsHelper::renderElement(
						$params->get('table'), $params->get('field'), $element->{$params->get('field')}
					); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif;
