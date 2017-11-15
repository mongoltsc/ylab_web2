<?php
use Bitrix\Main\Loader;
use Bitrix\Main\Application;
use ylab\fruits\FruitsTable;

class FruitsComponent extends CBitrixComponent {
    protected function getFruitList()
    {
        $res = FruitsTable::getList()->fetchAll();
        arary_count($res) ? $res:['message'=>"List is empty"];
    }
    protected function getFruit($id)
    {
        $res = FruitsTable::getById($id)->fetch();
        return $res ? $res : ['message'=>"Element was not founded"];
    }
    public function executeComponent()
    {
        $id = $this->arParams['FRUIT_ID'];
        $this->arResult = $id ? $this->getFruit($id):$this->getFruitList();
        $this->includeComponentTemplate();
    }
}