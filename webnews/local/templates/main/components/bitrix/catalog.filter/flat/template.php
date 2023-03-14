<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
?>



<?
if (!empty($_GET['year'])) { //проверяем есть ли у нас в строке GET переменная year
    global $arrFilter; //глобальная переменная фильтра

    $firstMonth = '01.01.'.$_GET['year']; //начало года
    $lastMonth = '31.12.'.$_GET['year']; //конец года

    $arrFilter = array(
        "LOGIC" => "AND",
        array(">=DATE_ACTIVE_FROM" => ConvertTimeStamp(strtotime($firstMonth),"FULL")),
        array("<=DATE_ACTIVE_FROM" => ConvertTimeStamp(strtotime($lastMonth),"FULL")),
    );

}
?>



<div class="filter-block">
    <ul>
        <li><a href="?day=all&clear_cache=Y" class="filter<?if($_GET['day'] == 'all'){?> filter-active<?}?> btn">Все</a><br></li>
        <li><a href="?year=2023&clear_cache=Y" class="filter<?if($_GET['year'] == 2023){?> filter-active<?}?> btn">2023</a><br></li>
        <li><a href="?year=2022&clear_cache=Y" class="filter<?if($_GET['year'] == 2022){?> filter-active<?}?> btn">2022</a><br></li>
        <li><a href="?year=2021&clear_cache=Y" class="filter<?if($_GET['year'] == 2021){?> filter-active<?}?> btn">2021</a><br></li>
        <li><a href="?year=2020&clear_cache=Y" class="filter<?if($_GET['year'] == 2020){?> filter-active<?}?> btn">2020</a></li>
    </ul>





</div>
