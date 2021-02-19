<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>


<div class="nam-matis">
    <div class="nam-matis-top">
            <div class="col-md-12 nam-matis-1">
                <div class="date"><?= $arResult['ACTIVE_FROM'] ?></div>
                <h3><?= $arResult["NAME"] ?></h3>
                <p><?= $arResult["PREVIEW_TEXT"] ?></p>
                <img src="<?= $arResult["DETAIL_PICTURE"] ?>" class="img-responsive" alt="">
                <div class="detail_text">
                    <p><?= $arResult["DETAIL_TEXT"] ?></p>
                </div>
                <a href="<?= $arResult["BACK_URL"] ?>">Вернуться к новостям</a>
            </div>
        <div class="clearfix"></div>
    </div>
</div>
