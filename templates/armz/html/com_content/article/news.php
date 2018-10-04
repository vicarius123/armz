<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
require_once dirname(__FILE__) . '/helper.php';

$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);

$lang = JFactory::getLanguage();
$tag = $lang->getTag();


// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));
JHtml::_('behavior.caption');
$item = $this->item;
$date = $date = date('d', strtotime($item->created)).' '.JText::_(date('F', strtotime($item->created))).' '.date('Y', strtotime($item->created));
?>
<div class="item-page-text news-inner-page <?=($this->pageclass_sfx !='reserve')? 'header-separation':'reserve-separation';?> <?php echo $this->pageclass_sfx; ?>" itemscope itemtype="https://schema.org/Article">
	<meta itemprop="inLanguage" content="<?php echo ($this->item->language === '*') ? JFactory::getConfig()->get('language') : $this->item->language; ?>" />
	<div class="news-date"><span><?=$date;?></span></div>
	<h1><?=$item->title;?></h1>
  <br>
  <?=$item->text;?>
</div>
<pre>
<? getMore($tag, $item->id);?>	
</pre>
