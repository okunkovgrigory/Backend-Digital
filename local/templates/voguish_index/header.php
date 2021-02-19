<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<?php  ?>

<?php

use \Bitrix\Main\Page\Asset;
$APPLICATION->ShowHead();

?>

<!DOCTYPE HTML>
<html>
<head>
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php Asset::GetInstance()->AddCss(SITE_TEMPLATE_PATH . '/css/bootstrap.css') ?>
    <?php Asset::GetInstance()->AddCss(SITE_TEMPLATE_PATH . '/css/style.css') ?>

    <?php CJSCore::Init(['jquery'])?>
    <?php Asset::GetInstance()->AddJs(SITE_TEMPLATE_PATH . "/js/responsiveslides.min.js") ?>

    <?php Asset::GetInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">') ?>
    <?php Asset::GetInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">') ?>
    <?php Asset::GetInstance()->addString('<meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">') ?>
    <?php Asset::GetInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet'
          type='text/css'>") ?>
    <?php Asset::GetInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>") ?>
    <?php Asset::GetInstance()->addString('<link rel="icon" href="' .SITE_TEMPLATE_PATH . '/favicon.ico" type="x-icon">') ?>


    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>


    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>

</head>

<body>
<?php $APPLICATION->ShowPanel() ?>
<!-- header -->
<div class="header">
    <div class="container">

        <!-- Include Area Logo -->

        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/logo.php"
            )
        );?>

        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "main_menu",
            Array(
                "CHILD_MENU_TYPE" => "left",
                "MAX_LEVEL" => "1",
                "ROOT_MENU_TYPE" => "main_menu",
            )
        );?>

        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".head-nav ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- header -->
<div class="container">
    <div class="col-md-9 bann-right">