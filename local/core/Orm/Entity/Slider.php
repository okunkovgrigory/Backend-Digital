<?php


namespace RKDigital\Orm\Entity;

use \Bitrix\Iblock\Elements\ElementSliderTable;

/**
 * Class Slider
 * @package RKDigital\Orm\Entity
 */
final class Slider extends Entity
{

    /**
     * @return mixed
     */
    public function getElements()
    {
        $arOrder = [
            "ID" => "ASC"
        ];

        $arSelect = [
            "NAME",
            "DETAIL_PICTURE"
        ];

        $iblock_slides = ElementSliderTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        foreach ($iblock_slides as &$iblock_slide) {
            $iblock_slide["DETAIL_PICTURE"] = \CFile::GetPath($iblock_slide["DETAIL_PICTURE"]);
        }
        return $iblock_slides;
    }
}