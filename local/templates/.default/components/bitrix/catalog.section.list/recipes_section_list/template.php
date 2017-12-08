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
<div class="recipe-category">
    <div class="container">
        <div class="row">
            <? foreach($data->items() as $item): ?>
                <div class="recipe-category__item" <?=$item->editId();?>>
                    <a href="<?=$item->sectionUrl();?>" title="<?=$item->getName();?>">
                        <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>
