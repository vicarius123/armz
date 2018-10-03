<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

// Create some shortcuts.
$params    = &$this->item->params;
$n         = count($this->items);
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn  = $this->escape($this->state->get('list.direction'));
$items = $this->items;
$model = $this->getModel();

$active = JFactory::getApplication()->getMenu()->getActive();
$menuname = $active->params->get('page_heading');

$years = [];
foreach($items as $item){
	$years[] = date('Y', strtotime($item->created));
}
$years = array_unique($years);
rsort($years);

?>
<h1><?=$active->title;?></h1><br />
<div  class="news-filter">
	<select id="news-year" name="news-year" class="new-select">
	<?foreach($years as $k=>$year):?>
		<option <?=($k==0)?'selected':'';?> ><?=$year;?></option>
	<?endforeach;?>
	</select>
	<select id="news-month" name="news-month" class="new-select">
		<option value="0">Все месяцы</option>
		<option><?=JText::_('JANUARY');?></option>
		<option><?=JText::_('FEBRUARY');?></option>
		<option><?=JText::_('MARCH');?></option>
		<option><?=JText::_('APRIL');?></option>
		<option><?=JText::_('MAY');?></option>
		<option><?=JText::_('JUNE');?></option>
		<option><?=JText::_('JULY');?></option>
		<option><?=JText::_('AUGUST');?></option>
		<option><?=JText::_('SEPTEMBER');?></option>
		<option><?=JText::_('OCTOBER');?></option>
		<option><?=JText::_('NOVEMBER');?></option>
		<option><?=JText::_('DECEMBER');?></option>

	</select>
</div>
<div class="news-list all-news header-separation ">

	<?foreach($items as $item): $date = date('d', strtotime($item->created)).' '.JText::_(date('F', strtotime($item->created))).' '.date('Y', strtotime($item->created));?>

		<div class="news-each">
			<div>
				<div class="news-date">
					<span><?=$date;?></span>
				</div>
				<a href="<?=JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language));?>" class="read-more"><h2><?=$item->title;?></h2></a>

			</div>
		</div>

	<?endforeach;?>

</div>
