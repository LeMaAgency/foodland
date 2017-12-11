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

$data = new \WM\Template\TemplateHelper($this);

$item = $data->item();
?>
<article class="text-brand">
    <p>
        <?=$item->detailText();?>
    </p>
    <? if($item->propFilled('URL')): ?>
        <div class="text-brand__link">
            <?=Loc::getMessage('LEMA_BRAND_DETAIL_SITE_LINK');?>
            <a href="<?=$item->propValue('URL');?>" title="<?=$item->getName();?>"><?=$item->prop('URL', 'DESCRIPTION');?></a>
        </div>
    <? endif; ?>
</article>
<?php
$this->SetViewTarget('brand_logo_detail');?><img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>"><?$this->EndViewTarget();