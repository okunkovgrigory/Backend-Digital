<?php

namespace RKDigital\Orm;

use Bitrix\Main\Application;
use CComponentEngine;
use CIBlock;
use CModule;

/**
 * Class Factory
 * @package RKDigital\Orm
 */
final class Factory
{
    const PREFIX_NAMESPACE = __NAMESPACE__ . "\\Entity\\";

    /**
     * @param int $id
     * @return object
     */
    public static function getEntity(int $id): object
    {
        $api_code = self::getApiCode($id);

        $entity = self::PREFIX_NAMESPACE . $api_code;

        if (class_exists($entity)) {
            return new $entity;
        }
    }


    /**
     * @param array $arParams
     * @return string
     */
    public static function includeSefMode(array &$arParams): string
    {
        $arDefaultUrlTemplates404 = [
            "detail" => "#ELEMENT_CODE#/"
        ];

        $arDefaultVariableAliases404 = [];

        $arDefaultVariableAliases = [];


        $arComponentVariables = [
            "ELEMENT_CODE"
        ];

        $arVariables = [];

        $arUrlTemplates = CComponentEngine::makeComponentUrlTemplates(
            $arDefaultUrlTemplates404,
            $arParams["SEF_URL_TEMPLATES"]
        );

        $arVariableAliases = CComponentEngine::makeComponentVariableAliases(
            $arDefaultVariableAliases404,
            $arParams["VARIABLE_ALIASES"]
        );

        $componentPage = CComponentEngine::parseComponentPath(
            $arParams["SEF_FOLDER"],
            $arUrlTemplates,
            $arVariables
        );

        CComponentEngine::initComponentVariables(
            $componentPage,
            $arComponentVariables,
            $arDefaultVariableAliases,
            $arVariables
        );

        return $componentPage;

    }

    /**
     * @param int $id
     * @return string
     */
    private static function getApiCode(int $id): string
    {
        $iblock_db = CIBlock::GetList([], [
            'ID' => $id
        ])->Fetch();

        return $iblock_db['API_CODE'];
    }
}