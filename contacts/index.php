<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши контакты");

\WM\Common\Asset::get()->addJs('/assets/js/libs/classie.js');
\WM\Common\Asset::get()->addJs('https://api-maps.yandex.ru/2.1/?lang=ru_RU');

$APPLICATION->AddViewContent('header_class', 'product-page-header');

?>
    <div class="background-page">
        <div class="container">
            <div class="element">
                <h1 class="h1 h1_mt-35"><? $APPLICATION->ShowTitle(false); ?></h1>
            </div>
        </div>
        <div class="route">
            <div class="container">
                <div class="row">
                    <div class="col-17 col-lg-24">
                        <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/map.php'); ?>
                    </div>
                    <div class="col-7 col-lg-24">
                        <div class="route__wrap">
                            <div class="route__by route__by_foot">
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/by_foot.php'); ?>
                            </div>
                            <div class="route__by route__by_car">
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/by_car.php'); ?>
                            </div>
                            <div class="route__by route__by_public active">
                                <? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/by_public.php'); ?>
                            </div>
                            <div class="route__metro route__metro_ts active">
                                <i><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/metro_ts.php'); ?></i>
                            </div>
                            <div class="route__metro route__metro_yz">
                                <i><? $APPLICATION->IncludeFile(SITE_DIR . 'include/contacts/metro_yz.php'); ?></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-7 col-xl-8 col-md-24">
                        <div class="contacts__item">
                            <h3 class="h3"><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/phone_title.php');?></h3>
                            <?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/phones.php');?>
                        </div>
                    </div>
                    <div class="col-5 col-xl-8 col-md-24">
                        <div class="contacts__item">
                            <h3 class="h3"><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/fax_title.php');?></h3>
                            <span><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/fax_phones.php');?></span>
                        </div>
                    </div>
                    <div class="col-6 col-xl-8 col-md-24">
                        <div class="contacts__item">
                            <h3 class="h3"><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/address_title.php');?></h3>
                            <p><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/address.php');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="container">
                <div class="row">
                    <div class="col-17 col-lg-24">
                        <div class="map__region" id="map"></div>
                    </div>
                    <div class="col-7 col-lg-24">
                        <ul class="map__tags">
                            <li class="map__tags__presence"><i><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/regions.php');?></i></li>
                            <li class="map__tags__factory"><i><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/factories.php');?></i></li>
                            <li class="map__tags__office"><i><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/office.php');?></i></li>
                            <li class="map__tags__branch"><i><?$APPLICATION->IncludeFile(SITE_DIR.'include/contacts/branches.php');?></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-page__butter_contact"></div>
        <div class="background-page__block-left-top_contact"></div>
        <div class="background-page__block-left-middle_contact"></div>
        <div class="background-page__tomat-right_contact"></div>
        <div class="background-page__block-right-top_contact"></div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>