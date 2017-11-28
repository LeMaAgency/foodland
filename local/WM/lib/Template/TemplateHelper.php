<?php

namespace WM\Template;

/**
 * Class TemplateHelper
 * @package WM\Template
 */
class TemplateHelper
{
    /**
     * @var \CBitrixComponentTemplate|null
     */
    protected $data = null;
    protected $component = null;
    protected $arResult = array();
    protected $arParams = array();
    protected $singleRecord = false;

    protected $editLinks = array();

    /**
     * TemplateHelper constructor.
     * @param \CBitrixComponentTemplate $data
     */
    public function __construct(\CBitrixComponentTemplate $data)
    {
        $this->data = $data;
        $this->component = $data->getComponent();

        $this->arParams = $this->component->arParams;
        $this->arResult = $this->component->arResult;

        if(!isset($this->arResult['ITEMS']))
            $this->arResult = new Item($this->arResult);
        else
        {
            $this->arResult['OBJ_ITEMS'] = array();
            $this->editLinks = array(
                'edit' => \CIBlock::GetArrayByID($this->arParams['IBLOCK_ID'], 'ELEMENT_EDIT'),
                'delete' => \CIBlock::GetArrayByID($this->arParams['IBLOCK_ID'], 'ELEMENT_DELETE'),
                'confirm' => array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')),
            );

            foreach($this->arResult['ITEMS'] as $k => $item)
            {
                //add edit actions
                $this->data->AddEditAction($item['ID'], $item['EDIT_LINK'], $this->editLinks['edit']);
                $this->data->AddDeleteAction($item['ID'], $item['DELETE_LINK'], $this->editLinks['delete'], $this->editLinks['confirm']);

                $this->arResult['OBJ_ITEMS'][$k] = new Item($item, $this->data->GetEditAreaId($item['ID']));
            }
        }
    }

    /**
     * @param bool $objectData
     * @return mixed
     */
    public function items($objectData = true)
    {
        return $objectData ? $this->arResult['OBJ_ITEMS'] : $this->arResult['ITEMS'];
    }

    /**
     * @return int
     */
    public function itemCount()
    {
        return count($this->arResult['ITEMS']);
    }

    /**
     * @param $name
     * @return mixed|null
     */
    public function get($name)
    {
        return isset($this->arResult[$name]) ? $this->arResult[$name] : null;
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->get('ID');
    }

    /**
     * @return mixed|null
     */
    public function getName()
    {
        return $this->get('NAME');
    }

}