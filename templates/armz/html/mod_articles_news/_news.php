<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$month = JText::_(date('F', strtotime($item->created)));
$day = date('d', strtotime($item->created));
$year = date('Y', strtotime($item->created));

$date = $day.' '.$month.' '.$year;

?>
<div class="news-list">
	<div class="news-date">
		<span><?=$date;?></span>
	</div>
	<div class="news-title">
		<a href="<?=$item->link;?>" target="_blank"><?=$item->title;?></a>
	</div>
</div>
