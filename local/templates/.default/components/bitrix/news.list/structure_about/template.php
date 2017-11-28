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

$strEditLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_EDIT');
$strDeleteLink = \CIBlock::GetArrayByID($arParams['IBLOCK_ID'], 'ELEMENT_DELETE');
$confirmDelete = array('CONFIRM' => \GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'));

$data = new \WM\Template\TemplateHelper($this);


?>
<div class="structure-company">
    <div class="container">
        <div class="row">
            <div class="col-24">
                <h2 class="h2_about-company h2_about-company_center"><?=$data->getName();?></h2>
                <? foreach($data->items() as $item): ?>
                    <div class="col-8 col-lg-24" <?=$item->editId();?>>
                        <div class="structure-company__wrap <?=$item->get('ITEM_CLASS');?>">
                            <h3 class="h3_about-company h3_about-company_center"><?=$item->getName();?></h3>
                            <div class="structure-company__img">
                                <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                            </div>
                            <p>
                                <?=$item->previewText();?>
                            </p>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>