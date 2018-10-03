<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Armz_structure
 * @author     Cristopher chong <cris_chong2@hotmail.com>
 * @copyright  2018 Cristopher Chong - nOne.ru
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$item = $this->items;

$active = JFactory::getApplication()->getMenu()->getActive();
$menuname = $active->params->get('page_heading');

?>
<div class="item-page-text armz_structure" itemscope itemtype="https://schema.org/Article">
<h1><?=$active->title;?></h1>
  <svg width="863px" height="598px" viewBox="0 0 863 598" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <!-- Generator: Sketch 51.3 (57544) - http://www.bohemiancoding.com/sketch -->
      <title>Group 3</title>
      <desc>Created with Sketch.</desc>
      <defs></defs>
      <g id="Компания" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Корпоративная-структура" transform="translate(-511.000000, -314.000000)">
              <g id="Group-3" transform="translate(511.000000, 314.000000)">
                  <g id="paths-copy" transform="translate(193.000000, 26.000000)" fill-rule="nonzero" stroke="#979797">
                      <polyline id="Path-3" points="58.2866861 0 16 0 16 461.821485"></polyline>
                      <polyline id="Path-3" transform="translate(439.143343, 230.910742) scale(-1, 1) translate(-439.143343, -230.910742) " points="460.286686 0 418 0 418 461.821485"></polyline>
                      <path d="M238.151851,11.4540764 L238.151851,571.5" id="Path-4"></path>
                      <path d="M31.469054,53.25 L16,53.25" id="Path-5"></path>
                      <path d="M254.469054,53.25 L239,53.25" id="Path-5"></path>
                      <path d="M476.469054,53.25 L461,53.25" id="Path-5"></path>
                      <path d="M238.469054,130 L223,130" id="Path-5"></path>
                      <path d="M460.469054,130 L445,130" id="Path-5"></path>
                      <path d="M15.469054,241.25 L0,241.25" id="Path-5"></path>
                      <path d="M31.469054,163.25 L16,163.25" id="Path-5"></path>
                      <path d="M254.469054,163.25 L239,163.25" id="Path-5"></path>
                      <path d="M476.469054,163.25 L461,163.25" id="Path-5"></path>
                      <path d="M238.469054,241.25 L223,241.25" id="Path-5"></path>
                      <path d="M460.469054,241.25 L445,241.25" id="Path-5"></path>
                      <path d="M15.469054,351.25 L0,351.25" id="Path-5"></path>
                      <path d="M31.469054,272.25 L16,272.25" id="Path-5"></path>
                      <path d="M254.469054,273.25 L239,273.25" id="Path-5"></path>
                      <path d="M476.469054,273.25 L461,273.25" id="Path-5"></path>
                      <path d="M238.469054,351.25 L223,351.25" id="Path-5"></path>
                      <path d="M460.469054,351.25 L445,351.25" id="Path-5"></path>
                      <path d="M15.469054,461.25 L0,461.25" id="Path-5"></path>
                      <path d="M31.469054,383.25 L16,383.25" id="Path-5"></path>
                      <path d="M254.469054,383.25 L239,383.25" id="Path-5"></path>
                      <path d="M254.469054,493.25 L239,493.25" id="Path-5"></path>
                      <path d="M238.469054,461.25 L223,461.25" id="Path-5"></path>
                      <path d="M238.469054,571.25 L223,571.25" id="Path-5"></path>
                      <path d="M460.469054,461.25 L445,461.25" id="Path-5"></path>
                  </g>
                  <g id="Group-Copy" transform="translate(224.000000, 0.000000)">
                      <rect id="Rectangle-6" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="416" height="48"></rect>
                      <text id="АО-«Атомредметзолото" font-family="Geometria-Bold, Geometria" font-size="17" font-weight="bold" line-spacing="20" fill="#FFFFFF">
                          <tspan x="100" y="23">АО «Атомредметзолото»</tspan>
                      </text>
                  </g>
                  <g id="structure_item" transform="translate(0.000000, 78.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="53.344" y="16"><?=$item[0]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="31.478" y="13"><?=$item[0]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(0.000000, 188.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="60.124" y="16"><?=$item[4]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="29.774" y="13"><?=$item[4]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(0.000000, 298.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="57.556" y="16"><?=$item[8]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[8]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(0.000000, 408.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="39.79" y="16"><?=$item[12]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[8]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(223.000000, 78.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="10.138" y="16"><?=$item[1]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[1]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(223.000000, 188.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="56.98" y="16"><?=$item[5]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="29.846" y="13"><?=$item[5]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(223.000000, 298.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="19.318" y="16">АО «Первая горнорудная </tspan>
                          <tspan x="64.21" y="36">компания»</tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="31.178" y="13"><?=$item[9]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(223.000000, 408.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="44.452" y="16"><?=$item[13]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[13]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(223.000000, 518.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="29.188" y="16"><?=$item[15]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[15]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(446.000000, 78.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="7.132" y="16"><?=$item[2]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.81" y="13"><?=$item[2]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(446.000000, 188.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="27.91" y="16"><?=$item[6]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="34.004" y="13"><?=$item[6]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(446.000000, 298.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="30.652" y="16">ООО «Объединенные </tspan>
                          <tspan x="22.438" y="36">урановые предприятия»</tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="38.714" y="13"><?=$item[10]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(446.000000, 408.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="12.226" y="16">АО «Корпорация равзвития </tspan>
                          <tspan x="48.22" y="36">Южной Якутии»</tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="35.936" y="13"><?=$item[14]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(446.000000, 518.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="36.526" y="16"><?=$item[16]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="28.808" y="13"><?=$item[16]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(669.000000, 78.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <?$ii = explode('.',$item[3]->title);?>
                          <tspan x="18.088" y="16"><?=$ii[0];?>.</tspan>
                          <tspan x="57.682" y="36"><?=$ii[1];?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="29.456" y="13"><?=$item[3]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(669.000000, 188.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="12.262" y="16">Vostok Power Resources Ltd. </tspan>
                          <tspan x="41.71" y="36">(Великобритания)</tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="32.012" y="13"><?=$item[7]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <g id="structure_item" transform="translate(669.000000, 298.000000)">
                      <rect id="Rectangle-6" fill="#ECECEC" fill-rule="nonzero" x="0" y="0" width="194" height="80"></rect>
                      <text id="АО-«ВНИПИпромтехнлог" font-family="Geometria-Medium, Geometria" font-size="12" font-weight="400" line-spacing="20" fill="#000000">
                          <tspan x="22.138" y="16"><?=$item[11]->title;?></tspan>
                      </text>
                      <g id="плашка" transform="translate(92.000000, 60.000000)">
                          <rect id="Rectangle" fill="#439BDE" fill-rule="nonzero" x="0" y="0" width="102" height="20"></rect>
                          <text id="27-августа-2018" font-family="Geometria" font-size="12" font-weight="normal" fill="#FFFFFF">
                              <tspan x="32.54" y="13"><?=$item[11]->number;?></tspan>
                          </text>
                      </g>
                  </g>
                  <path d="M193.992801,157.521437 L208.505137,157.521437" id="Path-7-Copy" stroke="#979797" fill-rule="nonzero"></path>
              </g>
          </g>
      </g>
  </svg>
</div>
