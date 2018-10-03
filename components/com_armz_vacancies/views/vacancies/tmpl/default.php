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

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

$items = $this->items;
?>
<div class="item-page-text " itemscope itemtype="https://schema.org/Article">
<h1>Вакансии</h1>

<div class="vacancies-list">
  <div class="row">
  <? foreach($items as $item): $desc = explode('<hr id="system-readmore" />', $item->desc); $companies = explode(', ', $item->company);?>
    <div class="col-sm-4">
      <a href="<?php echo JRoute::_('index.php?option=com_armz_vacancies&view=vacancy&id='.(int) $item->id); ?>">
        <div class="vacancy-ctn">
          <div class="vacancy-title">
            <h2><?=$item->title;?></h2>
          </div>
          <div class="vacancy-desc">
            <p>
              <?=$desc[0];?>
            </p>
          </div>
          <div class="vacancy-logo">
            <div class="row">
              <? foreach($companies as $company):?>
              <div class="col">
                <img src="/images/company/<?=$company;?>"/>
              </div>
              <?endforeach;?>
            </div>
          </div>
        </div>
      </a>

    </div>
  <? endforeach;?>
  </div>
</div>
</div>
