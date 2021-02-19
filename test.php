<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Тестовая страница");

?><h4>Тестовая страница</h4>
<?$APPLICATION->IncludeComponent(
	"digital:news",
	"rk-digital",
	Array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "content",
		"SEF_FOLDER" => "/test/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_CODE#/")
	),
$component
);?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>