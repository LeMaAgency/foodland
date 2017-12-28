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
<div class="clients ">
    <div class="back-img back-img__petro back-img__petro_left"></div>
    <div class="back-img back-img__petro back-img__petro_right"></div>
    <div class="container">
        <h3 class="clients__title">
            <?=$data->getName();?>
        </h3>
        <div class="clients__carousel">
            <? foreach($data->items() as $item): ?>
                <span title="<?=$item->getName();?>">
                    <div class="clients__carousel__item" <?=$item->editId();?>>
                        <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    </div>
                </span>
            <? endforeach; ?>
        </div>
    </div>
</div>