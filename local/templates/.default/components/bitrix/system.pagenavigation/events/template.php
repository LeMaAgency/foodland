<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="container">
    <div class="product-pagination product-pagination_padding">
        <div class="container-fluid">
            <div class="row">
                <? if($arResult["NavPageCount"] > 1)
                {
                    ?>
                    <div class="col-19 col-xl-17 col-lg-24 ">
                        <ul class="product-pagination__pagination product-pagination__pagination_right">
                            <?
                            if($arResult["bDescPageNumbering"] === true):
                                $bFirst = true;
                                if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
                                    /*if($arResult["bSavePage"]):

                                        ?>
                                        <li><a class="blog-page-previous"
                                               href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] + 1)?>"><?=GetMessage("nav_prev")?></a>
                                        </li>
                                        <?
                                    else:
                                        if($arResult["NavPageCount"] == ($arResult["NavPageNomer"] + 1)):
                                            ?>
                                            <li><a class="blog-page-previous"
                                                   href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a></li>
                                            <?
                                        else:
                                            ?>
                                            <li><a class="blog-page-previous"
                                                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] + 1)?>"><?=GetMessage("nav_prev")?></a>
                                            </li>
                                            <?
                                        endif;
                                    endif;*/
                                    ?>
                                    <?

                                    if($arResult["nStartPage"] < $arResult["NavPageCount"]):
                                        $bFirst = false;
                                        /*if($arResult["bSavePage"]):
                                            ?>
                                            <li><a class="blog-page-first"
                                                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">1</a>
                                            </li>
                                            <?
                                        else:
                                            ?>
                                            <li><a class="blog-page-first" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                                            <?
                                        endif;*/
                                        ?>
                                        <?
                                        if($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)):
                                            ?>
                                            <li><span class="product-pagination__pagination__elem-deactive">...</span></li>
                                            <?
                                        endif;
                                    endif;
                                endif;
                                do
                                {
                                    $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;

                                    if($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                                        ?>
                                        <li><a href="#" title=""
                                               class="product-pagination__pagination__elem-active"><?=$arResult['NavPageNomer'];?></a></li>
                                        <?
                                    elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
                                        ?>
                                        <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                                               class="<?=($bFirst ? "blog-page-first" : "")?>"><?=$NavRecordGroupPrint?></a></li>
                                        <?
                                    else:
                                        ?>
                                        <li>
                                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
                                            ?> class="<?=($bFirst ? "blog-page-first" : "")?>"><?=$NavRecordGroupPrint?></a></li>

                                        <?
                                    endif;
                                    ?>
                                    <?

                                    $arResult["nStartPage"]--;
                                    $bFirst = false;
                                } while($arResult["nStartPage"] >= $arResult["nEndPage"]);

                                if($arResult["NavPageNomer"] > 1):
                                    if($arResult["nEndPage"] > 1):
                                        if($arResult["nEndPage"] > 2):
                                            ?>
                                            <li><a href="" title="" class="product-pagination__pagination__elem-deactive">...</a></li>
                                            <?
                                        endif;
                                        ?>
                                        <li>
                                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=$arResult["NavPageCount"]?></a>
                                        </li>
                                        <?
                                    endif;

                                    /*
                                    ?>
                                    <li><a class="blog-page-next"
                                           href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>"><?=GetMessage("nav_next")?></a>
                                    </li>
                                    <?*/
                                endif;

                            else:
                                $bFirst = true;

                                if($arResult["NavPageNomer"] > 1):
                                    /*if($arResult["bSavePage"]):
                                        ?>
                                        <li><a class="blog-page-previous"
                                               href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>"><?=GetMessage("nav_prev")?></a>
                                        </li>
                                        <?
                                    else:
                                        if($arResult["NavPageNomer"] > 2):
                                            ?>
                                            <li><a class="blog-page-previous"
                                                   href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] - 1)?>"><?=GetMessage("nav_prev")?></a>
                                            </li>
                                            <?
                                        else:
                                            ?>
                                            <li><a class="blog-page-previous"
                                                   href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a></li>
                                            <?
                                        endif;

                                    endif;*/
                                    ?>
                                    <?

                                    if($arResult["nStartPage"] > 1):
                                        $bFirst = false;
                                        if($arResult["bSavePage"]):
                                            ?>
                                            <li><a class="blog-page-first"
                                                   href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a>
                                            </li>
                                            <?
                                        else:
                                            ?>
                                            <li><a class="blog-page-first" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">1</a></li>
                                            <?
                                        endif;
                                        ?>
                                        <?
                                        if($arResult["nStartPage"] > 2):
                                            ?>
                                            <li><span class="product-pagination__pagination__elem-deactive">...</span></li>
                                            <?
                                        endif;
                                    endif;
                                endif;

                                do
                                {
                                    if($arResult["nStartPage"] == $arResult["NavPageNomer"]):
                                        ?>
                                        <li><a href="" title=""
                                               class="product-pagination__pagination__elem-active"><?=$arResult['nStartPage'];?></a></li>
                                        <?
                                    elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
                                        ?>
                                        <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"
                                               class="<?=($bFirst ? "blog-page-first" : "")?>"><?=$arResult["nStartPage"]?></a></li>
                                        <?
                                    else:
                                        ?>
                                        <li>
                                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"<?
                                            ?> class="<?=($bFirst ? "blog-page-first" : "")?>"><?=$arResult["nStartPage"]?></a></li>
                                        <?
                                    endif;
                                    ?>
                                    <?
                                    $arResult["nStartPage"]++;
                                    $bFirst = false;
                                } while($arResult["nStartPage"] <= $arResult["nEndPage"]);

                                if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
                                    if($arResult["nEndPage"] < $arResult["NavPageCount"]):
                                        if($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
                                            ?>
                                            <li><span class="product-pagination__pagination__elem-deactive">...</span></li>
                                            <?
                                        endif;
                                        ?>
                                        <li>
                                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>">
                                                <?=$arResult["NavPageCount"]?>
                                            </a>
                                        </li>
                                        <?
                                    endif;

                                    ?>
                                    <li><a class="blog-page-next"
                                           href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"] + 1)?>"><?=GetMessage("nav_next")?></a>
                                    </li>
                                    <?
                                endif;
                            endif;
                            ?>
                        </ul>
                    </div>
                    <?
                }
                ?>
                <div class="col-5 col-xl-7 col-lg-24 css-right">
                    <div class="product-pagination__button">
                        <?
                        if($arResult["NavShowAll"]):?>
                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" title=""
                               class="button-cheese"><span><?=Loc::getMessage('nav_paged');?></span></a>
                        <? else: ?>
                            <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" title=""
                               class="button-cheese"><span><?=Loc::getMessage('nav_all');?></span></a>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>