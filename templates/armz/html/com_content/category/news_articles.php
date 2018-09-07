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
?>
<div class="news-list header-separation wrapper">
	<div class="row ">
	<?foreach($items as $item): $date = date('d.m.Y', strtotime($item->created));?>

		<div class="col-sm-4 news-each">
			<div>

				<h2><?=$item->title;?></h2>
				<p class="news-intro">
					<?=$item->introtext;?>
				</p>
				<div class="row">
					<div class="col-4">
						<?=$date;?>
					</div>
					<div class="col-8 text-right">
						<a href="<?=JRoute::_(ContentHelperRoute::getArticleRoute($item->slug, $item->catid, $item->language));?>" class="read-more">Подробнее</a>
					</div>
				</div>
			</div>
		</div>

	<?endforeach;?>
	</div>
</div>
