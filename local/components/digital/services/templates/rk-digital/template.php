<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<ul class="services">
    <?php foreach ($arResult as $arItem): ?>
    <li>
        <h1><?=$arItem["NAME"]?></h1>
        <h3><?=$arItem["PREVIEW_TEXT"]?></h3>
        <p><?=$arItem["DETAIL_TEXT"]?></p>
    </li>
    <? endforeach; ?>
</ul>

