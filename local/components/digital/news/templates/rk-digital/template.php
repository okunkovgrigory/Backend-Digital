<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="nam-matis">
    <div class="nam-matis-top">
        <?php foreach ($arResult as $arItem): ?>
        <div class="col-md-6 nam-matis-1">
            <img src="<?= $arItem["PREVIEW_PICTURE"]?>" class="img-responsive" alt="">
            <h3><?= $arItem["NAME"] ?></h3>
            <p><?= $arItem["PREVIEW_TEXT"] ?></p>
            <div class="date"><?=$arItem['ACTIVE_FROM']?></div>
            <a href="/test/<?=$arItem["CODE"]?>/">Подробнее</a>
        </div>
        <?php endforeach; ?>
        <div class="clearfix"></div>
    </div>
</div>
