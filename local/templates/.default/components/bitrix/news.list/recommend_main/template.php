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
<? if($data->get('SHOW_WRAPPER')): ?>
    <div class="recommendation__carousel__block">
    <div class="recommendation__list row">
<? endif; ?>

<? foreach($data->items() as $item): ?>
    <div class="col-8 col-xl-8 col-lg-8 col-md-12 col-sm-24" <?=$item->editId();?>>
        <? if($item->get('TWO_COLUMNS')): ?>
            <div class="row">
                <div class="recommendation__block recommendation__block_col-2"
                     style="background-image: url('<?=$item->previewPicture();?>')">
                    <? if($item->get('SHOW_LIKE')): ?>
                        <div class="icon">
                            <span class="icon__like"></span>
                        </div>
                    <? endif; ?>
                    <a href="<?=$item->propValue('URL');?>"
                       class="recommendation__block__title-mini recommendation__block__line <?=$item->get('ITEM_CLASS');?>">
                        <p><?=$item->getName();?></p>
                    </a>
                </div>
            </div>
        <? else: ?>
            <? if($item->get('TEXT_IN_TOP_BLOCK')): ?>
                <div class="row">
                    <div class="recommendation__block" style="background-image: url('<?=$item->previewPicture();?>')">
                        <? if($item->get('SHOW_LIKE')): ?>
                            <div class="icon">
                                <span class="icon__like"></span>
                            </div>
                        <? endif; ?>
                        <a href="<?=$item->propValue('URL');?>" class="recommendation__block__title-mini
                            recommendation__block__line <?=$item->get('ITEM_CLASS');?>">
                            <p><?=$item->getName();?></p>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <a href="<?=$item->propValue('URL_2');?>" class="recommendation__block"
                       style="background-image: url('<?=$item->detailPicture();?>')"></a>
                </div>
            <? else: ?>
                <div class="row">
                    <a href="<?=$item->propValue('URL');?>" class="recommendation__block"
                       style="background-image: url('<?=$item->previewPicture();?>')"></a>
                </div>
                <div class="row">
                    <div class="recommendation__block" style="background-image: url('<?=$item->detailPicture();?>')">
                        <a href="<?=$item->propValue('URL_2');?>"
                           class="recommendation__block__title-mini recommendation__block__line <?=$data->get('ITEM_CLASS');?>">
                            <p><?=$item->getName();?></p>
                        </a>
                    </div>
                </div>
            <? endif; ?>
        <? endif; ?>
    </div>
<? endforeach; ?>

<? if($data->get('SHOW_WRAPPER')): ?>
    </div>
    </div>
<? endif; ?>