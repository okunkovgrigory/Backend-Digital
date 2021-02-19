<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use \Bitrix\Main\LoaderException;
use \Bitrix\Main\Localization\Loc;
use RKDigital\Orm\Factory;


/**
 * Class NewsListDigital
 */
class SliderDigital extends CBitrixComponent
{
    /**
     * @throws LoaderException
     */
    protected function checkModules()
    {
        if (!Loader::includeModule("iblock")) {
            $this->abortResultCache();
            throw new LoaderException(Loc::getMessage("IBLOCK_MODULE_NOT_INSTALLED"));
        }

    }

    /**
     * @return mixed|void
     * @throws LoaderException
     */
    public function executeComponent()
    {
        $this->checkModules();

        $entity = Factory::getEntity(intval($this->arParams['IBLOCK_ID']));

        $this->arResult = $entity->getElements();

        $this->includeComponentTemplate();
    }

}
