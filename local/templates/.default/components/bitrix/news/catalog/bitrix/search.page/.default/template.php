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
?>
<? if(isset($arResult["REQUEST"]["ORIGINAL_QUERY"])): ?>

    <div class="container">
    <div class="search-language-guess">
        <?
        echo GetMessage("CT_BSP_KEYBOARD_WARNING", array("#query#" => '<a href="' . $arResult["ORIGINAL_QUERY_URL"] . '">' . $arResult["REQUEST"]["ORIGINAL_QUERY"] . '</a>')) ?>
    </div>
    </div><?
endif; ?>

<? if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false): ?>
<? elseif($arResult["ERROR_CODE"] != 0): ?>
    <div class="container">
        <p><?=GetMessage("SEARCH_ERROR")?></p>
        <? ShowError($arResult["ERROR_TEXT"]); ?>
        <p><?=GetMessage("SEARCH_CORRECT_AND_CONTINUE")?></p>
        <br/><br/>
        <p><?=GetMessage("SEARCH_SINTAX")?><br/><b><?=GetMessage("SEARCH_LOGIC")?></b></p>
        <table border="0" cellpadding="5">
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_OPERATOR")?></td>
                <td valign="top"><?=GetMessage("SEARCH_SYNONIM")?></td>
                <td><?=GetMessage("SEARCH_DESCRIPTION")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_AND")?></td>
                <td valign="top">and, &amp;, +</td>
                <td><?=GetMessage("SEARCH_AND_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_OR")?></td>
                <td valign="top">or, |</td>
                <td><?=GetMessage("SEARCH_OR_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top"><?=GetMessage("SEARCH_NOT")?></td>
                <td valign="top">not, ~</td>
                <td><?=GetMessage("SEARCH_NOT_ALT")?></td>
            </tr>
            <tr>
                <td align="center" valign="top">( )</td>
                <td valign="top">&nbsp;</td>
                <td><?=GetMessage("SEARCH_BRACKETS_ALT")?></td>
            </tr>
        </table>
    </div>
<? elseif(count($arResult["SEARCH"]) > 0): ?>
    <?php
    global $searchFilter;
    foreach($arResult['SEARCH'] as $arItem)
        $searchFilter['=ID'][] = $arItem['ITEM_ID'];
    ?>
    <? $APPLICATION->IncludeComponent("bitrix:news.list", "catalog_search", Array(
	"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],	// Код информационного блока
		"NEWS_COUNT" => "10",	// Количество новостей на странице
		"SORT_BY1" => "NAME",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"FILTER_NAME" => "searchFilter",	// Фильтр
		"FIELD_CODE" => array(	// Поля
			0 => "DATE_CREATE",
		),
		"PROPERTY_CODE" => "",	// Свойства
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// Скрывать ссылку, если нет детального описания
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"PAGER_TITLE" => "Элементы",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "events",	// Шаблон постраничной навигации
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	),
	false
); ?>
<? else: ?>
    <div class="container">
        <? ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND")); ?>
    </div>
<? endif; ?>