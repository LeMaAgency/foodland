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

$class = isset($arParams['H2_CLASS']) ? $arParams['H2_CLASS'] : 'h2_about-company';

?>
<div class="col-24">
    <h2 class="<?=$class;?>"><?=$data->getName();?></h2>
    <? foreach($data->items() as $item): ?>
        <div class="col-8 col-lg-24" <?=$item->editId();?>>
            <div class="structure-company__wrap <?=$item->get('ITEM_CLASS');?> structure-company__wrap_no-elem">
                <a href="<?=$item->detailUrl();?>">
                    <div class="structure-company__img structure-company__img_size">
                            <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>" class="structure-company__img_over">
                            <img src="<?=$item->detailPicture();?>" alt="<?=$item->getName();?>" class="structure-company__img_hover">
                    </div>
                </a>
                <p class="structure-company_direct__p-mb">
                    <?=$item->previewText();?>
                </p>
            </div>
        </div>
    <? endforeach; ?>
</div>