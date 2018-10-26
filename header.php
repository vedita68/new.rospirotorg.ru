<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Loader;
use Bitrix\Main\Page\Asset;
use Yenisite\Core\Tools;

// @var $moduleId
// @var $moduleCode
// @var $settingsClass
include 'include/module_code.php';

if ($_POST['rz_ajax_no_header'] === 'y') {
	$APPLICATION->IncludeComponent("yenisite:settings.panel", "empty", array(
			"SOLUTION" => $moduleId,
			"SETTINGS_CLASS" => $settingsClass,
			"GLOBAL_VAR" => "rz_b2_options"
		),
		false
	);
	return;
}

?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?if ($APPLICATION->GetCurDir() == "/"):?>
		<meta name="yandex-verification" content="7678cf7d39be83c2" />
	<?endif;?>

	<title><?$APPLICATION->ShowTitle()?><?if(!empty($_GET['PAGEN_2'])){ echo " стр."; echo $_GET['PAGEN_2'];}?>
	</title>
	<?
	\Bitrix\Main\Localization\Loc::loadMessages(__FILE__);
	
	global $rz_b2_options;
	global $USER;
	
	$bMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
	$arDefIncludeParams = array(
		"AREA_FILE_SHOW" => "file",	
		"EDIT_TEMPLATE" => "include_areas_template.php"
	);
	
	if(!Loader::includeModule($moduleId)) die('Module ' . $moduleId . ' not installed!');
	if(!Loader::includeModule("yenisite.core")) die('Module yenisite.core not installed!');
	
	use Bitronic2\Mobile;
	Mobile::Init();
	
	$frame = new \Bitrix\Main\Page\FrameBuffered("rz_dynamic_full_mode_meta", false);
	?>
	<script type="text/javascript" data-skip-moving="true" id="rz_dynamic_full_mode_meta">/*
	<?
	$frame->begin('');
		if(Mobile::isMobile(false) && Mobile::isFullMode()):
		?>
		 	*/
			var viewPortTag = document.createElement('meta');
			viewPortTag.name = "viewport";
			viewPortTag.content = "";
			document.getElementsByTagName('head')[0].appendChild(viewPortTag);
		  /*
		<?endif;
	$frame->end();?>
	*/
	</script>
	<!-- fonts -->
	<?
	$APPLICATION->AddHeadString('<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700&amp;subset=cyrillic-ext,latin" rel="stylesheet" type="text/css">');
	?>

	<!-- styles -->
	<?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/slick.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/slick-theme.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/s.min.css");
	$APPLICATION->SetAdditionalCSS("/bitrix/js/socialservices/css/ss.css");
	?>
	

	<?ob_start();
	$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/settings.php")), false, array("HIDE_ICONS"=>"Y"));
	$panelSettings = ob_get_clean();
	?>

	<?
	// #### PROCESS transformers settings
	if($rz_b2_options['header-version'] == 'v3' || ($bMainPage && Mobile::isMobile()))
	{
		$bVerticalTopMenu = $rz_b2_options['header-version'] == 'v3';
		$rz_b2_options['catalog-placement'] = 'top';
	}

	if (Mobile::isMobile() && $rz_b2_options['top-line-position'] != 'fixed-bottom') {
		$rz_b2_options['top-line-position'] = 'fixed-top';
	}
	$rz_b2_options['pro_vbc_bonus'] = isset($rz_b2_options['pro_vbc_bonus']) && $rz_b2_options['pro_vbc_bonus'] == 'Y' && Loader::includeModule('vbcherepanov.bonus');
	?>
	<script type="text/javascript" data-skip-moving="true">
		<?
		$arSettings = array();
		foreach($rz_b2_options as $key => $value){
			$key = preg_replace("/[^a-z]+/i", " ", strtolower($key));
			$key = str_replace(' ', '',substr_replace($key, substr(ucwords($key), 1), 1));
			$arSettings[$key] = $value;
		}
		//correct settings names
		$arSettings['colorTheme'] = $arSettings['themeDemo'];
		$arSettings['photoViewType'] = $arSettings['detailGalleryType'];
		$arSettings['productInfoMode'] = $arSettings['detailInfoMode'];
		$arSettings['productInfoModeDefExpanded'] = ($arSettings['detailInfoFullExpanded'] === 'Y');
		$arSettings['stylingType'] = substr($arSettings['themeDemo'], -4);
		$arSettings['showStock'] = ($arSettings['showStock'] === 'Y');
		$arSettings['limitSliders'] = ($arSettings['limitSliders'] === 'Y');
		$arSettings['isFrontend'] = false;
		?>
		serverSettings = <?= CUtil::PhpToJSObject($arSettings)?><?unset($arSettings)?>;
		SITE_DIR = '<?=SITE_DIR?>';
		SITE_ID = '<?=SITE_ID?>';
		SITE_TEMPLATE_PATH = '<?=SITE_TEMPLATE_PATH?>';
		COOKIE_PREFIX = '<?=COption::GetOptionString("main", "cookie_name", "BITRIX_SM")?>';
	</script>
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.png">
<link rel="stylesheet" type="text/css" media="print" href="<?= SITE_TEMPLATE_PATH . "/css/print.css" ?>" />
<link rel="alternate stylesheet" type="text/css" media="screen,projection" href="<?= SITE_TEMPLATE_PATH . "/css/print.css" ?>" title="print" disabled="disabled" />

	<?
		$APPLICATION->ShowHead();/*
	?>
	<script>require([
			'libs/spin.min'
		], function(){
		});</script>
	<?*/
	// for instant switch from settings panel we use link, delete link and uncomment this on production
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/themes/theme_{$rz_b2_options['theme-demo']}.css");
	?>
	<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH . "/css/themes/theme_{$rz_b2_options['theme-demo']}.css" ?>" id="current-theme"
		  data-path="<?= SITE_TEMPLATE_PATH . '/css/themes/' ?>"/>

	<?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/templates_addon.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/template_styles.css");
	//set main theme color to use in JS
	//@var $color
	include_once 'include/js_colors.php';

	CJSCore::Init(array('jquery', 'window'));
	if (Loader::includeModule('currency')) {
		CJSCore::Init(array('currency'));
	}
	$asset = Asset::getInstance();
	//$asset->addJs(SITE_TEMPLATE_PATH."/js/js.js");

	// bitrix
	$asset->addJs("/bitrix/js/socialservices/ss.js");

	// basic js libraries
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/spin.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/modernizr.custom.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/bootstrap/transition.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/bootstrap/collapse.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/bootstrap/modal.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/requestAnimationFrame.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/velocity.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/velocity.ui.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/sly.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/wNumb.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.maskedinput.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.ikSelect.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/require.custom.js");

	//custom js scripts
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/utils/makeSwitch.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/utils/posPopup.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/UmMainMenu.js");

	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/initGlobals.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/settingsInitial.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/settingsHelpers.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/settingsRelated.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/initSettings.js");

	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/toggles/initToggles.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/popups/initModals.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/popups/initPopups.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/popups/initSearchPopup.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/forms/initSearch.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/forms/initSelects.js");

	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/initCommons.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/slick.min.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/ready.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/agrement.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/custom.js");

	CJSCore::RegisterExt('rz_b2_um_countdown', array(
		'js' => SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.countdown.2.0.2/jquery.countdown-ru.js",
		'lang' => SITE_TEMPLATE_PATH.'/lang/'.LANGUAGE_ID.'/countdown.php'
	));

	if ($bMainPage) {
		if ('Y' == $rz_b2_options['block_home-feedback']) {
			$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.mobile.just-touch.min.js");
		}
		if ('Y' == $rz_b2_options['wow-effect']) {
			$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/wow.min.js");
		}
		$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.countdown.2.0.2/jquery.plugin.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/jquery.countdown.2.0.2/jquery.countdown.min.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/initTimers.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/UmAccordeon.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/UmTabs.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/UmComboBlocks.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/sliders/initPhotoThumbs.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/sliders/initFeedbackCarousel.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/initCatalogHover.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/sliders/initSpecialBlocks.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/libs/UmSlider.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/sliders/initBigSlider.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/pages/initHomePage.js");
		CJSCore::Init(array('rz_b2_um_countdown'));
	}

	if (!$USER->IsAuthorized()) {
		$asset->addJs(SITE_TEMPLATE_PATH."/js/3rd-party-libs/progression.js");
		$asset->addJs(SITE_TEMPLATE_PATH."/js/custom-scripts/inits/modals/initModalRegistration.js");
	}
	if ($rz_b2_options['pro_vbc_bonus']) {
		$asset->addJS(SITE_TEMPLATE_PATH . "/js/back-end/bonus.js");
	}
	// back-end stuff
	$asset->addJs(SITE_TEMPLATE_PATH."/js/back-end/utils.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/back-end/visual/hits.js");
	$asset->addJs(SITE_TEMPLATE_PATH."/js/back-end/visual/commons.js");

	CJSCore::RegisterExt('rz_b2_um_validation', array(
		//'js' => SITE_TEMPLATE_PATH."/js/custom-scripts/utils/formValidation.js", LAZY LOAD
		'lang' => SITE_TEMPLATE_PATH.'/lang/'.LANGUAGE_ID.'/validation.php'
	));
	// AJAX
	CJSCore::RegisterExt('rz_b2_ajax_core', array(
		'js' => SITE_TEMPLATE_PATH."/js/back-end/ajax/core.js",
		'lang' => SITE_TEMPLATE_PATH.'/lang/'.LANGUAGE_ID.'/ajax.php',
		'rel' => array('core', 'currency')
	));
	CJSCore::RegisterExt('rz_b2_bx_catalog_item', array(
		'js' => SITE_TEMPLATE_PATH."/js/back-end/bx_catalog_item.js",
		'lang' => SITE_TEMPLATE_PATH.'/lang/'.LANGUAGE_ID.'/ajax.php',
	));

	CJSCore::Init(array('rz_b2_um_validation', 'rz_b2_ajax_core'));

	if ($rz_b2_options['block_main-menu-elem'] != 'N') {
		$asset->addJs(SITE_TEMPLATE_PATH."/js/back-end/visual/hits.js");
	}
	if ($rz_b2_options['addbasket_type'] === 'popup') {
		$asset->addJs(SITE_TEMPLATE_PATH.'/js/custom-scripts/inits/sliders/initHorizontalCarousels.js');
	}
	?>
	<meta name="theme-color" content="<?=$color?>">

	<meta name="google-site-verification" content="aX0ewhFYIY1mygiSXTW22ipqS-DbWjKsCRS7KRvApoY" />
	<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41678544 = new Ya.Metrika({ id:41678544, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true, ecommerce:"dataLayer" }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41678544" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	<script type="text/javascript">

(function ct_load_script() {

var ct = document.createElement('script'); ct.type = 'text/javascript';

ct.src = document.location.protocol+'//cc.calltracking.ru/phone.ea06c.5862.async.js?nc='+Math.floor(new Date().getTime()/300000);

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ct, s);

})();

</script>

<script type="text/javascript" src="https://keplerleads.com/init.js"></script>
<script type="text/javascript">
Kepler.init({id: 1151});
</script>

</head>


<body
		<? if (strpos($rz_b2_options['theme-demo'], '-flat') === false): ?>
			class="more_bold"
		<? endif ?>
	data-styling-type="<?= substr(strrchr($rz_b2_options['theme-demo'], '-'), 1) ?>"
	data-top-line-position="<?= $rz_b2_options['top-line-position'] ?>"
	<? //todo: additional price param ?>

	data-additional-prices-enabled="<?= $rz_b2_options['additional-prices-enabled'] ?>"
	data-catalog-placement="<?= $rz_b2_options['catalog-placement'] ?>"
	data-container-width="<?= $rz_b2_options['container-width'] ?>"
	data-filter-placement="<?= $rz_b2_options['filter-placement'] ?>"
	data-limit-sliders="<?= ($rz_b2_options['limit-sliders']==='Y' && $rz_b2_options['container-width']!== 'full_width' ? 'true' : 'false') ?>"
	data-table-units-col="<?= $rz_b2_options['table-units-col']?:'disabled'?>"
	data-stores="<?= $rz_b2_options['stores']?:'disabled'?>"
	data-show-stock="<?= ($rz_b2_options['show-stock']==='Y' ? 'true' : 'false') ?>"
	>
	<script>(function(w, d){ if (w.Giftd || typeof w.giftdAsync != 'undefined') { return; } w.giftdAsync = d.cookie.indexOf('giftd_s=') === -1; var rnd = (d.cookie.indexOf('giftd_nocache=') !== -1) ? ('&' + Date.now()) : ''; var vr = d.cookie.match(/giftd_v=([a-z0-9]+)+/i); var v = vr ? ('&v=' + vr[1]) : ''; var fc = String.fromCharCode; var html = fc(60) + 'script src=\'https://giftd.tech/widgets/js/giftd_v2?pid=rospirotorg.ru&9fd' + rnd + v + '\' id=\'giftd-script\' crossorigin=\'anonymous\' ' + (w.giftdAsync ? 'async=\'async\'' : '') + fc(62, 60) + '\/script' + fc(62); if (d.readyState == 'loading' && !document.querySelectorAll('script[src*=\'www.googletagmanager.com\']').length && !window.dataLayer) { d.write(html); } else { var s = d.createElement('script'); s.src = 'https://giftd.tech/widgets/js/giftd_v2?pid=rospirotorg.ru' + rnd + v; (d.body || d.querySelector('head')).appendChild(s); } })(window, document);</script> 
	<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter41678544 = new Ya.Metrika({ id:41678544, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/41678544" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
	
	<script>
	//PHP Magic starts here
	b2.s.hoverEffect = "<?=$rz_b2_options['product-hover-effect']?>";
	BX.message({
		'tooltip-last-price': "<?=GetMessage('BITRONIC2_TOOLTIP_LAST_PRICE')?>",
		'available-limit-msg': "<?=GetMessage('BITRONIC2_PRODUCT_AVAILABLE_LIMIT_MSG')?>",
		'b-rub': "<?=GetMessage('BITRONIC2_RUB_CHAR')?>"
	});
	</script>
	
	<div class="bitrix-admin-panel">
		<div class="b_panel"><?$APPLICATION->ShowPanel();?></div>
	</div>
	
	<?/*<button class="btn-main to-top">
		<i class="flaticon-key22"></i>
		<span class="text"><?=GetMessage('BITRONIC2_BUTTON_UP');?></span>
	</button>*/?>
    <div class="to-top totopper">
        Наверх
    </div>

	<div itemscope itemtype="http://schema.org/Store"><? // will be closed in footer.php ?>
	<?
	// Structured schema.org data
	if(method_exists('\Yenisite\Core\Catalog', 'getSiteInfo') && $arSiteInfo = \Yenisite\Core\Catalog::getSiteInfo()):
		?>
		<link itemprop="url" href="<?=(CMain::IsHTTPS() ? "https://" : "http://") . $arSiteInfo['SERVER_NAME']?>" />
		<meta itemprop="name" content="<?=str_replace('"',"'",$arSiteInfo['SITE_NAME'])?>" />
	<?endif?>
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="top-header__left">
<!--						<a href="javascript:void(0)" class="top-header__link">Специальные предложения</a>-->
						<a href="/catalog/" class="top-header__link">Каталог</a>
						<a href="/about/delivery/" class="top-header__link">Оплата</a>
						<a href="/about/contacts/" class="top-header__link">Контакты</a>
					</div>
				</div>
				<div class="col-md-8">
					<div class="top-header__right">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/header_socserv.php")), false, array("HIDE_ICONS"=>"N"));?>

						<?if(Loader::includeModule('yenisite.favorite')) $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/favorites.php")), false, array("HIDE_ICONS"=>"Y"));?>

						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/compare.php")), false, array("HIDE_ICONS"=>"Y"));?>

						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/basket.php")), false, array("HIDE_ICONS"=>"Y"));?>

						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/user_auth.php")), false, array("HIDE_ICONS"=>"Y"));?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="top-line">
		<div class="container">
			<div class="top-line-content clearfix">
				<?=$panelSettings;?>



				<?ob_start();
					global $GEOIP_IN_BUFFER; $GEOIP_IN_BUFFER = 1;
					$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/geoip.php")), false, array("HIDE_ICONS"=>"Y"));
				$_includeGeoip = ob_get_clean();
				ob_start();
					/*$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/switch_currency.php")), false, array("HIDE_ICONS"=>"Y"));*/
				$switch_currency = ob_get_clean();?>

			</div><!-- /top-line-content -->
			
			<?=$switch_currency;?>
			<?
			// TODO
			// $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/switch_lang.php")), false, array("HIDE_ICONS"=>"Y"));
			?>
		</div><!-- container -->
	</div><!-- top-line -->
	
	<header class="page-header" data-header-version="<?=$rz_b2_options['header-version']?>">
		<div class="container">
			<div class="row header-main-content clearfix">
				<div class="col-md-3 col-sm-6">
					<a href="<?=SITE_DIR?>">
						<div class="main-logo" itemprop="logo">
							<?
						$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/logo_icon.php")), false, array("HIDE_ICONS"=>"N"));
							?></div>
					</a>
				</div>
				<div class="col-md-5 col-sm-6">
					<div class="search__wrapper">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/search.php")), false, array("HIDE_ICONS"=>"Y"));?>
					</div>
				</div>

				<div class="col-md-4 col-sm-12 col-xs-12" id="city-and-time">
					<div class="contacts-content">
						<div class="phones" itemprop="telephone">
							<?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/phones.php", true);?>
						</div>
						<span class="free-call-text">
							<?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/phones_text.php", true);?>
						</span>
						<?/*div>
							<?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/email.php", true);?>
						</div*/?>
						<div class="modal-form">
							<?//$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/callme.php")), false, array("HIDE_ICONS"=>"Y"));?>
						</div>
					</div>

					<?/*div class="contacts-content">
						<div class="address-wrap" style="font-size: 12px;">
							<i class="flaticon-location4"></i>
							<?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/address.php", true);?>
						</div>
					</div*/?>
					<?=$_includeGeoip; unset($_includeGeoip)?><!-- do not delete
					--><?
					$pf = '';
					if ('Y' == $rz_b2_options['change_contacts']) {
						$pf = $rz_b2_options['GEOIP']['INCLUDE_POSTFIX'];
					}
					if ($rz_b2_options['block_worktime'] !== 'N') {
						Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/work_time.php", true, NULL, true);
					}
					?><!--
					do not delete
					-->
				

					<?/*div class="basket_line">
						<?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line","template",Array(
								"PATH_TO_BASKET" => "/personal/cart/",
								"PATH_TO_ORDER" => "/personal/order/",
								"SHOW_DELAY" => "Y",
								"SHOW_NOTAVAIL" => "Y",
								"SHOW_SUBSCRIBE" => "Y"
							)
						);?>
					</div*/?>
				</div><!-- city-and-time -->
				
			</div><!-- header-main-content.clearfix -->
		</div><!-- /container -->
		<div class="sitenav">
            <button type="button" class="btn-sitenav-toggle">
                <i class="flaticon-menu6"></i>
            </button>
			<nav class="container horizontal" id="sitenav">
				<div class="row">

						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/menu_top.php")), false, array("HIDE_ICONS"=>"Y"));?>

				</div>
			</nav><!-- sitenav.horizontal -->
		</div>
		<div class="<?=($bVerticalTopMenu) ? 'catalog-at-side minified container' : 'catalog-at-top'?>" id="catalog-at-top">
			<?
			if($rz_b2_options['catalog-placement'] == 'top' || $bVerticalTopMenu)
			{
				$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/menu_catalog.php")), false, array("HIDE_ICONS"=>"Y"));
			}
			?>
		</div>
	</header><!-- page-header v1/v2/v3/v4 -->
<?//$APPLICATION->IncludeComponent(
//    "bitrix:main.include",
//    "", array_merge($arDefIncludeParams,
//    array("PATH" => SITE_DIR."include_areas/header/menu_catalog_all_catalog.php")),
//    false,
//    array("HIDE_ICONS"=>"Y"));
//?>
	<?if(!$bMainPage):?>
	<div class="container bcrumbs-container">
		<nav class="breadcrumbs" data-backnav-enabled="<?= ($rz_b2_options['backnav_enabled'] == 'Y') ? 'true' : 'false' ?>">
<!--			--><?//Tools::showViewContent('left_menu');?>
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", array("START_FROM" => "1"),	false );?>
		</nav>
	</div>
    <?endif?>
<!--        --><?//Tools::showViewContent('left_menu');?>

