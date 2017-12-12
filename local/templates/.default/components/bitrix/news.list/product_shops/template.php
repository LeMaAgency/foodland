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

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

?>
<div class="clients clients-page-product">
    <h3 class="clients__title"><?=Loc::getMessage('LEMA_PRODUCT_DETAIL_SHOPS_TITLE');?></h3>
    <div class="clients__carousel">
        <? foreach($data->items() as $item): ?>
            <div>
                <div class="clients__carousel__item" <?=$item->editId();?>>
                    <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>