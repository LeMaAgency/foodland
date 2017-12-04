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
<div class="slider slider__carousel container-fluid">
    <? foreach($data->items() as $item): ?>
        <? if($item->propFilled('URL')): ?>
            <a href="<?=$item->propValue('URL');?>" class="slider__item" style="background-image: url('<?=$item->previewPicture();?>');">
                <div class="container">
                    <div class="row" <?=$item->editId();?>>
                        <div class="slider__item__images col-12 col-lg-24 css-text-right col-lg-css-text-center">
                            <? if($item->propFilled('LOGO_IMG')): ?>
                                <img src="<?=$item->prop('LOGO_IMG', 'VALUE_SRC');?>" alt="<?=$item->getName();?>"><br>
                            <? endif; ?>
                            <? if($item->propFilled('LOGO_TITLE_IMG')): ?>
                                <img src="<?=$item->prop('LOGO_TITLE_IMG', 'VALUE_SRC');?>" alt="<?=$item->getName();?>">
                            <? endif; ?>
                        </div>
                        <div class="col-12 col-lg-24 col-lg-css-center">
                            <div class="slider__item__text">
                                <span><?=htmlspecialcharsback($item->getName());?></span>
                                <p><?=$item->previewText();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        <? else: ?>
            <div class="slider__item" style="background-image: url('<?=$item->previewPicture();?>');">
                <div class="container">
                    <div class="row" <?=$item->editId();?>>
                        <div class="slider__item__images col-12 col-lg-24 css-text-right col-lg-css-text-center">
                            <? if($item->propFilled('LOGO_IMG')): ?>
                                <img src="<?=$item->prop('LOGO_IMG', 'VALUE_SRC');?>" alt="<?=$item->getName();?>"><br>
                            <? endif; ?>
                            <? if($item->propFilled('LOGO_TITLE_IMG')): ?>
                                <img src="<?=$item->prop('LOGO_TITLE_IMG', 'VALUE_SRC');?>" alt="<?=$item->getName();?>">
                            <? endif; ?>
                        </div>
                        <div class="col-12 col-lg-24 col-lg-css-center">
                            <div class="slider__item__text">
                                <span><?=htmlspecialcharsback($item->getName());?></span>
                                <p><?=$item->previewText();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endif; ?>
    <? endforeach; ?>
</div>