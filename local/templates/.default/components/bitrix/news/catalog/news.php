<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$APPLICATION->AddViewContent('bg_block', '<div class="background-page__block-left-bottom_event"></div>');

?>

<? if($arParams["USE_SEARCH"] == "Y"): ?>
    <div class="container">
        <div class="element">
            <h1 class="element__title__h1"><? $APPLICATION->ShowTitle(false); ?></h1>
        </div>
        <? $APPLICATION->IncludeComponent(
            "bitrix:search.form",
            "flat",
            Array(
                "PAGE" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["search"],
            ),
            $component,
            array('HIDE_ICONS' => 'Y')
        ); ?>
    </div>
<? endif ?>

<div class="container">
    <div class="row">
        <? if($arParams["USE_FILTER"] == "Y"): ?>
            <? $APPLICATION->IncludeComponent(
                "lema:catalog.filter",
                "",
                Array(
                    "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                    "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                    "FILTER_NAME" => $arParams["FILTER_NAME"],
                    "FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
                    "PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
                    "CACHE_TYPE" => $arParams["CACHE_TYPE"],
                    "CACHE_TIME" => $arParams["CACHE_TIME"],
                    "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
                    "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
                ),
                $component
            );
            ?>
        <? endif ?>

        <? $APPLICATION->IncludeComponent('bitrix:catalog.section.list', 'catalog_section_list', array(
                'VIEW_MODE' => 'TEXT',
                'SHOW_PARENT_NAME' => 'Y',
                'IBLOCK_TYPE' => $arParams['IBLOCK_TYPE'],
                'IBLOCK_ID' => $arParams['IBLOCK_ID'],
                'SECTION_ID' => '',
                'SECTION_CODE' => '',
                'SECTION_URL' => '',
                'COUNT_ELEMENTS' => 'Y',
                'TOP_DEPTH' => '2',
                'SECTION_FIELDS' => array('PICTURE', 'DETAIL_PICTURE'),
                'SECTION_USER_FIELDS' => '',
                'ADD_SECTIONS_CHAIN' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => '36000000',
                'CACHE_NOTES' => '',
                'CACHE_GROUPS' => 'Y',
            )
        ); ?>
    </div>
</div>