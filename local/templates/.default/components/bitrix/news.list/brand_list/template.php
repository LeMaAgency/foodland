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

if(empty($arResult['ITEMS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

?>
    <section class="trade-marks">
        <? foreach($data->items() as $item): ?>
            <div class="trade-marks__item" <?=$item->editId();?>>
                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                    <div class="trade-marks__item__card">
                        <div class="trade-marks__item__card__img">
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                        </div>
                        <div class="trade-marks__item__card__title"><?=$item->getName();?></div>
                    </div>
                </a>
            </div>

        <? endforeach; ?>
    </section>
<? if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'): ?>
    <?=$arResult['NAV_STRING'];?>
<? endif; ?>