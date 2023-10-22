<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?foreach($arResult["ITEMS"] as $item):?>
<div class="t-col t-card__col t-card__col_withoutbtn t594__item t594__item_4-in-row">
  <a href="<?=$item['DETAIL_TEXT']?>" class="t-card__link" target="_blank">
  <img
      class="t594__img t-img"
      src="<?=($item['DETAIL_PICTURE']['SRC']) ? $item['DETAIL_PICTURE']['SRC'] : NO_IMAGE_PATH;?>"
      imgfield="li_img__1697033097888"
      style="max-width: 400px"
      alt="<?=$item['DETAIL_TEXT']?>"
  /></a>
</div>
<?endforeach;?>
</div>
