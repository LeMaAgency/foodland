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

use \WM\Common\Helper,
    \Bitrix\Main\Localization\Loc;

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

$i = 0;

?>
<div class="production-spinner container-fluid">
    <div class="back-img back-img__cheese"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-24">
                <div data-js-core-resize-after="spinet__resize"></div>
                <? foreach($data->items() as $item): ?>
                    <div data-spinner="content" data-index="<?=++$i;?>"<? if(1 === $i): ?> class="active"<? endif; ?> <?=$item->editId();?>>
                        <div class="title-big"><?=$item->propText('ADDITIONAL_HEADER');?></div>
                        <div class="title-mini"><?=$item->getName();?></div>
                        <div class="text">
                            <p>
                                <?=$item->previewText();?>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-none">
                                <div class="description">
                                    <p>
                                        <?=$item->detailText();?>
                                    </p>
                                </div>
                            </div>
                            <? if($item->propFilled('URL')): ?>
                                <div class="col-12 col-lg-24 col-lg-css-text-center">
                                    <a href="<?=$item->propValue('URL');?>" title="" class="button-cheese">
                                        <span>
                                            <?=Loc::getMessage('LEMA_SPINNER_MORE_TEXT');?>
                                        </span>
                                    </a>
                                </div>
                            <? endif; ?>
                        </div>
                    </div>
                <? endforeach; ?>

            </div>
            <div class="col-12 col-lg-24">
                <div data-js-core-resize="spinet__resize" data-js-core-resize-width='lg'>
                    <div id="spinner">
                        <div class="rotate-wrap" data-active="1">
                            <?php
                            $i = 0;
                            ?>
                            <? foreach($data->items() as $item): ?>
                                <div class="circle active" data-index="<?=++$i;?>">
                                    <h4><?=$item->getName();?></h4>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
