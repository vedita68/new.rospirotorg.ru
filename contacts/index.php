<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты - интернет магазин Рос Пиро Торг");
$APPLICATION->SetPageProperty("description", "Контактные данные компании Рос Пиро Торг - телефон, адрес, электронная почта");
$APPLICATION->SetTitle("Контакты");
?>
<?
if ($_SESSION["SOTBIT_REGIONS"]["UF_PREFERENTIAL_REGI"] == 1)
    require($_SERVER["DOCUMENT_ROOT"] . "/include_areas/contakts/preferential_region.php");
else
    require($_SERVER["DOCUMENT_ROOT"] . "/include_areas/contakts/region.php");
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>