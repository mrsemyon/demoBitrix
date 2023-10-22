<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?foreach($arResult["ITEMS"] as $item):?>
<li
              class="t524__col t-col t-col_4 t-list__item t-align_center t524__col-mobstyle"
            >
              <div class="t524__itemwrapper t524__itemwrapper_3">
                <div
                  class="t524__imgwrapper t-margin_auto"
                  itemscope
                  itemtype="http://schema.org/ImageObject"
                >
                  <meta
                    itemprop="image"
                    content="images/tild3061-6162-4137-a639-633032363531____.png"
                  />
                  <div
                    class="t524__bgimg t524__img_circle t-margin_auto t-bgimg"
                    data-original="images/tild3061-6162-4137-a639-633032363531____.png"
                    bgimgfield="li_img__1477996247186"
                    style="background-image: url('<?=($item['DETAIL_PICTURE']['SRC']) ? $item['DETAIL_PICTURE']['SRC'] : NO_IMAGE_PATH;?>')"
                  ></div>
                </div>
                <div class="t524__wrappercenter">
                  <div
                    class="t524__persname t-name t-name_lg t524__bottommargin_sm"
                    style="color: #121212; font-size: 24px; font-weight: 400"
                    field="li_persname__1477996247186"
                  >
                    <?=$item['PREVIEW_TEXT']?>
                  </div>
                  <div
                    class="t524__persdescr t-descr t-descr_xxs"
                    style="color: #8f8f8f; font-size: 16px; line-height: 1.2"
                    field="li_persdescr__1477996247186"
                  >
                    <?=$item['DETAIL_TEXT']?>
                  </div>
                  <div
                    class="t-persons-social-links"
                    data-social-links="mailto:sdm@recifra.ru, https://recifra.ru/"
                  >
                    <div
                      class="t-persons-social-links__wrapper t-persons-social-links__wrapper_round"
                      data-social-color="#2e2d2c"
                    ></div>
                  </div>
                </div>
              </div>
            </li>
<?endforeach;?>