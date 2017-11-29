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
<section class="events">
    <div class="container">
        <? foreach($data->items() as $item): ?>

            <article class="events__event" <?=$item->editId();?>>
                <div class="events__event__img">
                    <img src="<?=$item->previewPicture();?>" alt="<?=$item->getName();?>">
                </div>
                <div class="events__event__content">
                    <h3 class="h3"><?=$item->getName();?></h3>
                    <p class="p">
                        <?=$item->previewText();?>
                    </p>
                    <div class="events__event__content__time-more">
                        <time><?=$item->get('DATE_CREATE_FORMATTED');?></time>
                        <a href="<?=$item->detailUrl();?>" title="<?=$item->getName();?>" class="css-right"><span>Подробней</span></a>
                    </div>
                </div>
            </article>
        <? endforeach; ?>
    </div>
</section>
<?if($arParams['DISPLAY_BOTTOM_PAGER'] == 'Y'):?>
    <?=$arResult['NAV_STRING'];?>
<?endif;?>
