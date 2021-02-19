<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?php foreach ($arResult as $arItem): ?>
    <img src="<?=$arItem["PREVIEW_PICTURE"]?>" alt="">
    <div class="caption-leaders">
        <h3><?=$arItem["NAME"]?></h3>
        <p><?=$arItem["PREVIEW_TEXT"]?></p>
    </div>
<? endforeach; ?>

