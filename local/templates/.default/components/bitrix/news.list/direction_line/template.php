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
<div class="direct-action">
    <div class="container">
        <div class="row">
            <? foreach($data->items() as $item): ?>
                <div class="col-8 col-sm-24" <?=$item->editId();?>>
                    <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>">
                        <div class="direct-action__img"><img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>"></div>
                    </a>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>