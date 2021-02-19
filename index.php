<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<?php $APPLICATION->SetTitle('Мода'); ?>

<!-- banner -->
<?$APPLICATION->IncludeComponent(
    "digital:slider",
    "rk-digital",
    Array(
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "IBLOCK_ID" => "18",
        "IBLOCK_TYPE" => "slider",
        "NEWS_COUNT" => "5"
    )
);?>
<!-- banner -->
<!-- nam-matis -->
<div class="nam-matis">
    <div class="nam-matis-top">
        <div class="col-md-6 nam-matis-1">
            <a href="single.html"><img src="<?=SITE_TEMPLATE_PATH ?>/images/5.jpg" class="img-responsive" alt=""></a>
            <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
            <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
        </div>
        <div class="col-md-6 nam-matis-1">
            <a href=""><img src="<?=SITE_TEMPLATE_PATH ?>/images/6.jpg" class="img-responsive" alt=""></a>
            <h3><a href="">Suspendisse a pellentesque dui</a></h3>
            <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="nam-matis-top">
        <div class="col-md-6 nam-matis-1">
            <a href="single.html"><img src="<?=SITE_TEMPLATE_PATH ?>/images/4.jpg" class="img-responsive" alt=""></a>
            <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
            <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
        </div>
        <div class="col-md-6 nam-matis-1">
            <a href="single.html"><img src="<?=SITE_TEMPLATE_PATH ?>/images/1.jpg" class="img-responsive" alt=""></a>
            <h3><a href="single.html">Suspendisse a pellentesque dui</a></h3>
            <p>Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- nam-matis -->

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>