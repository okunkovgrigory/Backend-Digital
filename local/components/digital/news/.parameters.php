<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!CModule::IncludeModule("iblock")) {
    return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = [];
$arOrder = [];
$arFilter = [
    "SITE_ID" => $_REQUEST["src_site"],
    "TYPE" => "content",
    "CODE" => "blog"

];

$db_iblock = CIBlock::GetList($arOrder, $arFilter);

while ($arRes = $db_iblock->Fetch()) {
    $arIBlocks[$arRes["ID"]] = $arRes["NAME"];
}

$arComponentParameters = [
    "GROUPS" => [
    ],
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => $arTypesEx,
        ],
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_LIST_ID"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
        ],

        "VARIABLE_ALIASES" => [
            "ELEMENT_CODE" => ["NAME" => GetMessage("NEWS_ELEMENT_ID_DESC")],
        ],
        "SEF_MODE" => [
            "detail" => [
                "NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS_DETAIL"),
                "DEFAULT" => "#ELEMENT_CODE#/",
                "VARIABLES" => ["ELEMENT_CODE"],
            ],
        ],

        "CACHE_TIME" => [
            "DEFAULT" => 36000000
        ],

    ],
];

?>