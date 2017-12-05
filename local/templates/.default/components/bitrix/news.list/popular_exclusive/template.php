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
<div class="popular popular_pb">
    <div class="container">
        <div class="title-big"><?=Loc::getMessage('LEMA_MOST_POPULAR_MAIN_TITLE');?></div>
        <div class="popular__carousel">
            <? foreach($data->items() as $item): ?>
                <a href="<?=str_replace('exclusive', 'catalog', $item->detailUrl());?>" title="<?=$item->getName();?>">
                    <div class="popular__item" <?=$item->editId();?>>
                        <div class="popular__item__image">
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                        </div>
                        <div class="popular__item__name"><b><?=$item->getName();?></b></div>
                        <div class="popular__item__text">
                            <span><?=$item->prop('BRAND', 'LINKED_NAME');?></span><br>
                            <? if($item->propFilled('FATNESS')): ?>
                                <span>
                                    <?=$item->propName('FATNESS');?>:
                                    <b><?=$item->propValue('FATNESS');?></b>
                                </span><br>
                            <? endif; ?>
                            <? if($item->propFilled('ARTICLE')): ?>
                                <span>
                                    <?=$item->propName('ARTICLE');?>:
                                    <b><?=$item->propValue('ARTICLE');?></b>
                                </span><br>
                            <? endif; ?>
                        </div>
                        <div class="popular__item__description">
                            <p><?=$item->previewText();?></p>
                        </div>
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>