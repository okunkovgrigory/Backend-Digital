<?php


namespace RKDigital\Orm\Entity;

use \Bitrix\Iblock\Elements\ElementServicesTable;


/**
 * Class Services
 * @package RKDigital\Orm\Entity
 */
final class Services extends Entity
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
            "PREVIEW_TEXT",
            "DETAIL_TEXT"

        ];

        $iblock_services = ElementServicesTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        foreach ($iblock_services as &$iblock_service) {
            $iblock_service["NAME"] = mb_strtoupper($iblock_service["NAME"]);

        }
        return $iblock_services;
    }
}