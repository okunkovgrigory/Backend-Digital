<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use \Bitrix\Main\LoaderException;
use \Bitrix\Main\Localization\Loc;
use RKDigital\Orm\Factory;


/**
 * Class NewsListDigital
 */
class NewsListDigital extends CBitrixComponent
{
    private $_request;


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
        $this->_request = Application::getInstance()->getContext()->getRequest();

        if ($this->startResultCache(false, $this->_request["news"])) {

            $this->checkModules();

            $entity = Factory::getEntity($this->arParams["IBLOCK_ID"]);

            if (!$this->_request["news"]) {
                $this->arResult = $entity->getElements();
                $this->setResultCacheKeys($this->arResult);
                $this->includeComponentTemplate();
            } else {
                $componentPage = Factory::includeSefMode($this->arParams);
                $this->arResult = $entity->getElement($_REQUEST["news"]);
                $this->arResult = array_shift($this->arResult);
                $this->arResult["BACK_URL"] = $this->arParams["SEF_FOLDER"];
                $this->setResultCacheKeys($this->arResult);
                $this->includeComponentTemplate($componentPage);

            }

        }
    }

}