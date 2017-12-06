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
<? foreach($data->items() as $item): ?>
    <div class="slider__item slick-list" style="background-image: url('<?=$item->previewPicture();?>');">
        <div class="container">
            <div class="row" <?=$item->editId();?>>
                <div class="col-12 col-lg-24 col-lg-css-center">
                    <div class="slider__item__text">
                        <span><?=$item->getName();?></span>
                        <p><?=$item->previewText();?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? endforeach; ?>