<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("404");
$APPLICATION->AddViewContent('header_class', 'product-page-header');
?>
<div class="container">
    <div class="page404">
        <div class="page404__title">Ошибка 404</div>
        <div class="page404__text">
            Запрашиваемая страница не найдена.
        </div>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>