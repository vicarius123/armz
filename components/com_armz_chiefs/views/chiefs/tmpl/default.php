<?php
/**
* @version    CVS: 1.0.0
* @package    Com_Armz_chiefs
* @author     Cristopher Chong <cris_chong2@hotmail.com>
* @copyright  2018 Cristopher Chong - nOne.ru
* @license    GNU General Public License version 2 or later; see LICENSE.txt
*/
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$items =  $this->items;
$n = 0;
?>
<div class="item-page-text">
  <h1>Руководство</h1>
  <div class="chief-list">
    <div class="row">
      <?foreach($items as $item):?>
      <div class="col-sm-4">
        <div class="chief-ctn" data-id="<?=$item->id;?>">
          <div class="chief-pic">
            <img src="/images/chiefs/<?=$item->pic;?>">
            <div class="chief-info">
              <span><?=$item->lastname;?></span><br />
              <span><?=$item->name.' '.$item->name2;?></span>
            </div>
          </div>
          <div class="chief-position">
            <?=$item->charge;?>
          </div>
        </div>
      </div>
      <?endforeach;?>
    </div>
  </div>
  <div class="chiefs-ctn">
    <div id="chiefs-carousel" class="carousel slide" data-ride="false" data-interval="false">
      <div class="carousel-inner">
        <?foreach($items as $item): $n++;?>
        <div class="carousel-item item-ch-<?=$item->id;?>" >
          <div class="in-chief-pic">
            <img src="/images/chiefs/<?=$item->pic;?>">
          </div>
          <div class="in-car-ctn">
            <div class="in-chief-info">
              <span><?=$item->lastname;?></span><br />
              <span><?=$item->name.' '.$item->name2;?></span>
            </div>
            <div class="in-chief-position">
              <?=$item->charge;?>
            </div>
            <div class="in-chief-resume">
              <?=$item->resume;?>
            </div>
          </div>
        </div>
        <?endforeach;?>
      </div>
      <a class="car-prev" href="#chiefs-carousel" role="button" data-slide="prev">
        <span class="" aria-hidden="true"></span>
      </a>
      <a class="car-next" href="#chiefs-carousel" role="button" data-slide="next">
        <span class="" aria-hidden="true"></span>
      </a>
      <a href="#" class="close-panel"><img src="/images/close-pop.svg" /></a>
    </div>

  </div>

</div>
