<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="banner">
    <div class="header-slider">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php foreach ($arResult as $arItem): ?>
                    <li>
                        <img src="<?=$arItem["DETAIL_PICTURE"]?>" class="img-responsive" alt="">
                        <div class="caption">
                            <h3><?=$arItem["NAME"]?></h3>
                        </div>
                    </li>
                    <? endforeach; ?>
                </ul>
            <ul class="callbacks_tabs"></ul>
            </div>
        </div>
    </div>
</div>
