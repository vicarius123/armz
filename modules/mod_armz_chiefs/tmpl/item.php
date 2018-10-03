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
$element = ModArmz_chiefsHelper::getItem($params);
?>

<?php if (!empty($element)) : ?>
	<div>
		<?php $fields = get_object_vars($element); ?>
		<?php foreach ($fields as $field_name => $field_value) : ?>
			<?php if (ModArmz_chiefsHelper::shouldAppear($field_name)): ?>
				<div class="row">
					<div class="span4">
						<strong><?php echo ModArmz_chiefsHelper::renderTranslatableHeader($params, $field_name); ?></strong>
					</div>
					<div
						class="span8"><?php echo ModArmz_chiefsHelper::renderElement($params->get('item_table'), $field_name, $field_value); ?></div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif;
