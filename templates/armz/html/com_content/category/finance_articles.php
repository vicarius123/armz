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
<div class="finance-list header-separation">
	<div class="row ">
	<?foreach($items as $item): $image = json_decode($item->images)->image_intro; $date = date('d.m.Y', strtotime($item->created));?>

		<div class="col-sm-4 finance-each">
			<div>
				<p class="date-finance"><?=$date;?></p>
				<h2><?=$item->title;?></h2>
				<a class="pdf_file" href="<?=$image;?>">
					<span>Загрузить</span><span>PDF <?=$model->FileSizeConvert(filesize($image));?></span>
				</a>
			</div>
		</div>

	<?endforeach;?>
	</div>
</div>
