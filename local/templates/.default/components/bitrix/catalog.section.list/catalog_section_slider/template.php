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

if(empty($arResult['SECTIONS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

?>
<div class="category-carousel">
    <? foreach($data->items() as $item): ?>
        <a href="<?=$item->sectionUrl();?>" title="<?=$item->getName();?>" class="category-carousel__item">
            <div class="category-carousel__item__images">
                <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>" class="category-carousel__item__images_hover">
            </div>
        </a>
    <? endforeach; ?>
</div>