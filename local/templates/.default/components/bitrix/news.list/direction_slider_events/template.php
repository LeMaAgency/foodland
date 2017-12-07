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

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$this->setFrameMode(true);

if(empty($arResult['ITEMS']))
    return;

$data = new \WM\Template\TemplateHelper($this);

?>
<div class="random random_about container">
    <div class="row">
        <div class="col-24">
            <div class="random_about__wrap">
                <div class="random__carousel">
                    <? foreach($data->items() as $item): ?>
                        <div class="random__block" style="background-image: url('<?=$item->previewPicture()?>')">
                            <? if($item->propFilled('LOGO_IMG')): ?>
                                <div class="random__logo"><img src="<?=$item->prop('LOGO_IMG', 'VALUE_SRC');?>" alt="<?=$item->getName();?>"></div>
                            <? endif; ?>
                            <div class="random__body random__body_about" <?=$item->editId();?>>
                                <div class="random__title">
                                    <?=$item->getName();?>
                                </div>
                                <div class="random__text">
                                    <p><?=$item->previewText();?></p>
                                </div>
                                <div class="random__button-mini">
                                    <a href="<?=$item->propValue('URL');?>" title="<?=$item->getName();?>">
                                        <?=Loc::getMessage('LEMA_EVENTS_MORE_TEXT');?>
                                    </a>
                                </div>
                                <div class="random__button">
                                    <a href="<?=$item->listUrl();?>" title="" class="button-orange">
                            <span>
                                <?=Loc::getMessage('LEMA_ALL_EVENTS_TEXT');?>
                            </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>