<?php


namespace RKDigital\Orm\Entity;

use \Bitrix\Iblock\Elements\ElementPurchasesTable;

/**
 * Class Purchases
 * @package RKDigital\Orm\Entity
 */
final class Purchases extends Entity
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
            "NAME"

        ];

        $iblock_purchases = ElementPurchasesTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        return $iblock_purchases;
    }
}