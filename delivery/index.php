<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить салют с доставкой в Москве, фейерверки с доставкой на дом в РосПироТорг");
$APPLICATION->SetPageProperty("description", "Условия оптовой продажи фейерверков и пиротехники в компании Рос Пиро Торг");
$APPLICATION->SetTitle("Доставка фейерверков");
?>
<?
if ($_SESSION["SOTBIT_REGIONS"]["UF_PREFERENTIAL_REGI"] == 1)
    require($_SERVER["DOCUMENT_ROOT"] . "/include_areas/delivery/preferential_region.php");
else
    require($_SERVER["DOCUMENT_ROOT"] . "/include_areas/delivery/region.php");
?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>