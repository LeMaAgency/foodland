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
<div class="clients clients_about">
    <div class="container">
        <h2 class="h2_about-company"><?=$data->getName();?></h2>
        <div class="clients__carousel clients__carousel_bg">
            <? foreach($data->items() as $item): ?>
                <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                    <div class="clients__carousel__item" <?=$item->editId();?>>
                        <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    </div>
                </a>
            <? endforeach; ?>
        </div>
    </div>
</div>