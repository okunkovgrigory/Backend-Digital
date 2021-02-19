<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<ul class="services">
    <?php foreach ($arResult as $arItem): ?>
    <li>
        <a href="#"><?=$arItem["NAME"]?></a>
    </li>
    <? endforeach; ?>
</ul>

