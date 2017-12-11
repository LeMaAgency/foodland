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
<div class="analog-carousel">
    <div class="analog-carousel__title"><span><?=Loc::getMessage('LEMA_ANALOGS_TITLE');?></span></div>
    <div class="analog-carousel__carousel">
        <? foreach($data->items() as $item): ?>
            <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                <div class="analog-carousel__carousel__item" <?=$item->editId();?>>
                    <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    <div class="analog-carousel__carousel__item__name"><?=$item->getName();?></div>
                </div>
            </a>
        <? endforeach; ?>
    </div>
</div>