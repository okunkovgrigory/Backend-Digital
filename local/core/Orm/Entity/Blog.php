<?php


namespace RKDigital\Orm\Entity;

use \Bitrix\Iblock\Elements\ElementBlogTable;

/**
 * Class Blog
 * @package RKDigital\Orm\Entity
 */
final class Blog extends Entity
{

    /**
     * @return array
     */
    public function getElements():array
    {
        $arOrder = [
            "ID" => "ASC"
        ];

        $arSelect = [
            "NAME",
            "PREVIEW_TEXT",
            "PREVIEW_PICTURE",
            "ACTIVE_FROM",
            "DETAIL_TEXT",
            "DETAIL_PICTURE",
            "CODE"
        ];

        $iblock_blogs = ElementBlogTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        foreach ($iblock_blogs as &$iblock_blog) {
            $iblock_blog["PREVIEW_PICTURE"] = \CFile::GetPath($iblock_blog["PREVIEW_PICTURE"]);
            $iblock_blog["DETAIL_PICTURE"] = \CFile::GetPath($iblock_blog["DETAIL_PICTURE"]);
            $iblock_blog["ACTIVE_FROM"] = mb_strtoupper(FormatDateFromDB($iblock_blog["ACTIVE_FROM"],
                "d F Y, HH:MI"));
        }

        return $iblock_blogs;
    }

    public function getElement(string $code):array
    {
        $arOrder = [
            "ID" => "ASC"
        ];

        $arSelect = [
            "NAME",
            "PREVIEW_TEXT",
            "PREVIEW_PICTURE",
            "ACTIVE_FROM",
            "DETAIL_TEXT",
            "DETAIL_PICTURE",
            "CODE"
        ];

        $arFilter = [
            "CODE" => $code
        ];

        $iblock_blogs = ElementBlogTable::getList([
            "select" => $arSelect,
            "order" => $arOrder,
            "filter" => $arFilter,
            "cache" => ["ttl" => 3600],
        ])->fetchAll();

        foreach ($iblock_blogs as &$iblock_blog) {
            $iblock_blog["PREVIEW_PICTURE"] = \CFile::GetPath($iblock_blog["PREVIEW_PICTURE"]);
            $iblock_blog["DETAIL_PICTURE"] = \CFile::GetPath($iblock_blog["DETAIL_PICTURE"]);
            $iblock_blog["ACTIVE_FROM"] = mb_strtoupper(FormatDateFromDB($iblock_blog["ACTIVE_FROM"],
                "d F Y, HH:MI"));
        }

        return $iblock_blogs;
    }
}