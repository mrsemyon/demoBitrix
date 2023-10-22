<?php
if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<?php foreach ($arResult as $item) { ?>
<li class="t228__list_item" style="padding: 0 15px 0 0">
  <a
    class="t-menu__link-item"
    href="<?=$item['LINK']?>"
    <?php if ($item['LINK'] == "https://recifra.ru/") { ?>
        target="_blank"
    <?php } else { ?>
        target="_self"
    <?php } ?>
    data-menu-submenu-hook=""
    style="color: #ffffff; font-size: 15px; font-weight: 600"
    ><?=$item['TEXT']?></a
  >
</li>
<?php } ?>