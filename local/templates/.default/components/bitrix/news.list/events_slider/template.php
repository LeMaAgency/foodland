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
<div class="product-use-carousel product-use-carousel_m-0-50">
    <div class="container">
        <div class="row">
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <? foreach($data->items() as $item):
                        if(!$item->previewPicture())
                            continue;
                        ?>
                        <div class="product-use-carousel__carousel__item" <?=$item->editId();?>>
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                            <div class="product-use-carousel__carousel__item__name"><?=$item->getName();?></div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>"><span>Подробней</span></a>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <? foreach($data->items() as $item):
                        if(!$item->previewPicture())
                            continue;
                        ?>
                        <div class="product-use-carousel__carousel__item" <?=$item->editId();?>>
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                            <div class="product-use-carousel__carousel__item__name"><?=$item->getName();?></div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>"><span>Подробней</span></a>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <? foreach($data->items() as $item):
                        if(!$item->previewPicture())
                            continue;
                        ?>
                        <div class="product-use-carousel__carousel__item" <?=$item->editId();?>>
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                            <div class="product-use-carousel__carousel__item__name"><?=$item->getName();?></div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>"><span>Подробней</span></a>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
            <div class="product-use-carousel__wrap">
                <div class="product-use-carousel__carousel">
                    <? foreach($data->items() as $item):
                        if(!$item->previewPicture())
                            continue;
                        ?>
                        <div class="product-use-carousel__carousel__item" <?=$item->editId();?>>
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                            <div class="product-use-carousel__carousel__item__name"><?=$item->getName();?></div>
                            <div class="product-use-carousel__carousel__item__block-link">
                                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>"><span>Подробней</span></a>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>