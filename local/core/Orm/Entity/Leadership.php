<?php


namespace RKDigital\Orm\Entity;

use \Bitrix\Iblock\Elements\ElementLeadershipTable;

/**
 * Class Leadership
 * @package RKDigital\Orm\Entity
 */
final class Leadership extends Entity
{

    /**
     * @param string $name
     * @return string
     */
    public function upperSurname(string $name): string
    {
        $arName = explode(' ', $name);
        if (!empty($arName)) {
            $arName[0] = mb_strtoupper($arName[0]);
            return implode(' ', $arName);
        }
    }

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
            "PREVIEW_PICTURE",
            "PREVIEW_TEXT",
            "DETAIL_PICTURE",
            "DETAIL_TEXT"

        ];

        $iblock_leaders = ElementLeadershipTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        foreach ($iblock_leaders as &$iblock_leader) {
            $iblock_leader["PREVIEW_PICTURE"] = \CFile::GetPath($iblock_leader["PREVIEW_PICTURE"]);
            $iblock_leader["DETAIL_PICTURE"] = \CFile::GetPath($iblock_leader["DETAIL_PICTURE"]);
            $iblock_leader["NAME"] = $this->upperSurname($iblock_leader["NAME"]);

        }
        return $iblock_leaders;
    }
}