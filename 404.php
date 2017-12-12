<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$siteName = 'FoodLand';

$title = $siteName . ' - 404 ошибка';
defined('ERROR_404') or define('ERROR_404', 'Y');
\CHTTP::SetStatus('404 Not Found');
$APPLICATION->SetTitle($title);
$APPLICATION->SetPageProperty('title', $title);
$APPLICATION->SetPageProperty('description', $title);
$APPLICATION->AddViewContent('header_class', 'product-page-header');

?>
<div class="container">
    <div class="page404">
        <div class="page404__title"><?=$title;?></div>
        <div class="page404__text">
            Запрашиваемая страница не найдена.
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . '/bitrix/footer.php'); ?>
