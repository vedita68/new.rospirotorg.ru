<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitronic2\Mobile;
use Yenisite\Core\Tools;
global $rz_b2_options;
//@var $arDefIncludeParams set in header.php
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="footer-top wow fadeIn">
	<div class="container">

		<div class="row">
			<div class="col-md-3 col-sm-6">
                <div class="footlogo" itemprop="logo">
                    <a href="<?=SITE_DIR?>">
                        <?
                        $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/logo_footer.php")), false, array("HIDE_ICONS"=>"N"));
                        ?>
                    </a>
                </div>
				<?/*$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/contact_info_title.php")), false, array("HIDE_ICONS"=>"N"));*/?>
				<div class="phones">
                    <?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/footer/phones_footer.php", true);?>
                </div>
				<?/*<div class="phones_text">
                    <?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/header/phones_text.php", true);?>
                </div>*/?>
                <div class="address">
                    <?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/footer/address_footer.php", true);?>
                </div>
				<div class="email">
                    <?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/footer/email.php", true);?>
                </div>
                <div class="feedback-wrap">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/feedback_text.php")), false, array("HIDE_ICONS"=>"Y"));?>
                </div>
			</div>
			<div class="col-md-6 hidden-sm hidden-xs">
				<div class="row">
					<div class="col-md-6">
						<nav class="sitenav vertical">
							<ul class="sitenav-menu">
								<li class="sitenav-menu-item">
									<a href="/about/"><span>О нас</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/catalog/"><span>Каталог</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/brands/"><span>Бренды</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/news/"><span>Новости</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/skidki/"><span>Акции и скидки</span></a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6">
						<nav class="sitenav vertical">
							<ul class="sitenav-menu">
								<li class="sitenav-menu-item">
									<a href="/about/delivery/"><span>Оплата и доставка</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/reviews/"><span>Безопасность</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/otzyvy/"><span>Отзывы</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/opt/"><span>Оптовым партнерам</span></a>
								</li>
								<li class="sitenav-menu-item">
									<a href="/about/contacts/"><span>Контакты</span></a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/socserv.php")), false, array("HIDE_ICONS"=>"N"));?>
                <div class="pricelist">
                    <?Tools::includePostfixArea($pf, SITE_DIR . "include_areas/footer/pricelist.php", true);?>
                </div>
                <div class="hidden-xs subscriber">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/subscribe.php")), false, array("HIDE_ICONS"=>"N"));?>
				</div>
			</div>
		</div><!-- /.row -->
		
		<?/*<div class="row">
			<div class="col-md-3 col-sm-6">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/feedback_text.php")), false, array("HIDE_ICONS"=>"Y"));?>
			</div>
			<div class="col-md-3 col-sm-6">
				<?Tools::IncludeArea('footer', 'pricelist', array(), true, $rz_b2_options['block_pricelist'])?>
			</div>
		</div><!-- /.row -->
		<div class="row politika_konfidentsialnosti">
            <div class="col-md-12">
                Используя сайт, вы соглашаетесь с <a href="/politika_konfidentsialnosti/">Положением о политике конфиденциальности</a>
            </div>
		</div>*/?>
		
	</div><!-- /.container -->
</div><!-- /.footer-top -->

<?/*<div class="footer-middle wow fadeIn" style="background: <?=$rz_b2_options['color-footer']?>; color: <?=$rz_b2_options['color-footer-font']?>"><?//COLOR?>
	<!--<div class="container">
		<div class="info-text">
			<?
			Tools::includePostfixArea($pf, SITE_DIR . "include_areas/footer/info_text.php", true);
			?>
		</div>
		<nav class="footer-nav">
			<?
			$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/links.php")), false, array("HIDE_ICONS"=>"N"));
			?>
		</nav>
		<div class="counters-and-logos">
			<?
			$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/counters.php")), false, array("HIDE_ICONS"=>"N"));
			?>
			<div id="bx-composite-banner">
			</div>
		</div>
	</div>-->
</div>*/?>

<div class="footer-bottom wow fadeIn" data-wow-offset="0">
	<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="copyright">
                    <?$frame = new \Bitrix\Main\Page\FrameBuffered("rz_dynamic_full_mode");
                    $frame->begin('');
                        if(mobile::isMobile(false)):?>
                            <div><a class="link" href="?<?=mobile::fullModeName?>=<?=mobile::isFullMode() ? 'N' : 'Y'?>"><?=mobile::isFullMode() ? GetMessage('BITRONIC2_FOOTER_MOBIL_MODE') : GetMessage('BITRONIC2_FOOTER_FULL_MODE')?></a></div>
                        <?endif;
                    $frame->end();?>
                    <div class="top">
                    <?
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/copyright.php")), false, array("HIDE_ICONS"=>"N"));
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/shop_name.php")), false, array("HIDE_ICONS"=>"N"));
                    $APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/ip.php")), false, array("HIDE_ICONS"=>"N"));
                    ?>
                    </div>
                    <div class="bottom">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/rights.php")), false, array("HIDE_ICONS"=>"N"));?>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div style="float:right;">
                    <!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=41678544&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/41678544/3_1_FFFFFFFF_EFEFEFFF_0_uniques" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="41678544" data-lang="ru" /></a> <!-- /Yandex.Metrika informer -->
                    <!-- Universal Analytics -->
                    <script>
                       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                        ga('create', 'UA-103186107-1', 'auto');
                        ga('send', 'pageview');
                    </script>
                </div>
            </div>
        </div>
		<?/*<div class="developed-by">
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/idea.php")), false, array("HIDE_ICONS"=>"N"));?>
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/romza.php")), false, array("HIDE_ICONS"=>"N"));?>
		</div>*/?>
	</div>
</div>

</div><!-- /big-wrap --><? // opened in header.php ?>

<!-- MODALS -->
<div class="modal modal_success" id="modal_success" role="dialog" tabindex="-1">
	<div class="alert success">
		<i class="flaticon-close47 btn-close" data-toggle="modal" data-target="#modal_success"></i>
		<div class="alert-header">
			<i class="flaticon-check14"></i>
			<?//title?>
		</div>
		<div class="alert-text">
			<?//text?>
		</div>
		<div class="line"></div>
		<button type="button" class="btn-main" data-toggle="modal" data-target="#modal_success"><?=GetMessage('BITRONIC2_MODAL_BUTTON_TEXT')?></button>
	</div>
</div>
<div class="modal modal_fail" id="modal_fail" role="dialog" tabindex="-1">
	<div class="alert fail">
		<i class="flaticon-close47 btn-close" data-toggle="modal" data-target="#modal_fail"></i>
		<div class="alert-header">
			<i class="flaticon-close47"></i>
			<span class="alert-title"><?//title?></span>
		</div>
		<div class="alert-text"><?//text?></div>
		<div class="line"></div>
		<button type="button" class="btn-main" data-toggle="modal" data-target="#modal_fail"><?=GetMessage('BITRONIC2_MODAL_BUTTON_TEXT')?></button>
	</div>
</div>
<div class="modal fade" id="modal_quick-view" tabindex="-1">
	<div class="modal-dialog modal_quick-view">
		<button class="btn-close" data-toggle="modal" data-target="#modal_quick-view">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="modal_quick-view_content">
			<?=GetMessage('BITRONIC2_LOADING')?>

		</div>
		<a href="#" class="flaticon-arrow133 arrow prev"></a>
		<a href="#" class="flaticon-right20 arrow next"></a>
	</div>
</div>
<div class="modal fade modal-form" id="modal_registration" tabindex="-1">
	<div class="modal-dialog">
		<button class="btn-close" data-toggle="modal" data-target="#modal_registration">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content">
		</div>
	</div>
</div>
<?
$APPLICATION->ShowViewContent('bitronic2_settings');
$APPLICATION->ShowViewContent('bitronic2_modal_login');
//$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/user_reg.php")), false, array("HIDE_ICONS"=>"Y"));
$APPLICATION->ShowViewContent('bitronic2_modal_callme');
$APPLICATION->ShowViewContent('bitronic2_modal_detail');
$APPLICATION->ShowViewContent('bitronic2_modal_license');
// SUBSCRIBE PRODUCT
\Yenisite\Core\Tools::IncludeArea('footer', 'modal_subscribe');

// ADD2BASKET_POPUP
if($rz_b2_options['addbasket_type'] == 'popup'):
?>
<div class="modal fade" id="modal_basket" tabindex="-1">
	<div class="modal-dialog modal_basket">
		<button class="btn-close" data-toggle="modal" data-target="#modal_basket">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content"></div>
	</div>
</div>
<? endif;

// ONE_CLICK
if (CModule::IncludeModule('yenisite.oneclick')):
?>
<div class="modal fade modal-form" id="modal_quick-buy" tabindex="-1">
	<div class="modal-dialog">
		<button class="btn-close" data-toggle="modal" data-target="#modal_quick-buy">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content"></div>
	</div>
</div>
<? endif;

// ### FORM CALL ME 
if(CModule::IncludeModule("yenisite.feedback")):?>
<div class="modal fade modal-form modal_callme" id="modal_callme" tabindex="-1">
	<div class="modal-dialog">
		<button class="btn-close" data-toggle="modal" data-target="#modal_callme">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content"></div>
	</div>
</div>
<?
// ### FORM FEEDBACK
?>
<div class="modal fade modal-form modal_feedback" id="modal_feedback" tabindex="-1">
	<div class="modal-dialog">
		<button class="btn-close" data-toggle="modal" data-target="#modal_feedback">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content"></div>
	</div>
</div>
<?
// ### FORM PRODUCT CONTACT
?>
<div class="modal fade modal-form modal_feedback" id="modal_contact_product">
	<div class="modal-dialog">
		<button class="btn-close" data-toggle="modal" data-target="#modal_contact_product">
			<span class="btn-text"><?=GetMessage('BITRONIC2_MODAL_CLOSE')?></span>
			<i class="flaticon-close47"></i>
		</button>
		<div class="content"></div>
	</div>
</div>
<?endif;

if (CRZBitronic2Settings::isPro($withGeoip = true)) {
	if ($APPLICATION->GetCurDir() == SITE_DIR) {
		CYSGeoIPStore::setMetaTags();
	}
}

// FOR SET PARAMS OF AJAX COMPONENTS
if ($USER->IsAdmin())
{ echo "<div style='display:none;'>";
	$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/callme.php", "EMPTY" => true)), false, array("HIDE_ICONS"=>"Y"));
	$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/footer/feedback.php", "EMPTY" => true)), false, array("HIDE_ICONS"=>"Y"));
	//$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/header/user_reg.php", "EMPTY" => true)), false, array("HIDE_ICONS"=>"Y"));
	$APPLICATION->IncludeComponent("bitrix:main.include", "", array_merge($arDefIncludeParams,array("PATH" => SITE_DIR."include_areas/catalog/one_click.php", "EMPTY" => true)), false, array("HIDE_ICONS"=>"Y"));
	echo "</div>";
}
?>
<?/* TODO
<? include '_/modals/modal_yourcity.html'; ?>
<? include '_/modals/modal_place-order.html'; ?>
<? include '_/modals/modal_inform-when-in-stock.html'; ?>
*/?>
<?$APPLICATION->ShowViewContent('modal_city_select');?>
<?$APPLICATION->ShowViewContent('modal_store_select');?>
<!-- END OF MODALS -->

<?$frame = new \Bitrix\Main\Page\FrameBuffered("rz_dynamic_flashmessage")?>
<?$frame->setAssetMode(\Bitrix\Main\Page\AssetMode::STANDARD) // YOU NEED IT TO PREVENT JS AND CSS FROM REWRITING COMPOSITE CACHE?>
<?$frame->begin('')?>
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", Array("AREA_FILE_SHOW" => "file",	"PATH" => SITE_DIR."include_areas/footer/flashmessage.php",	"EDIT_TEMPLATE" => "include_areas_template.php"	), false, array("HIDE_ICONS"=>"Y"));?>
<?$frame->end()?>
<?
$panelPath = $_SERVER['DOCUMENT_ROOT'] . SITE_DIR . '/rz_panel/index.php';
if (file_exists($panelPath) && $_REQUEST['no_statistic'] !== 'y') {
	include $panelPath;
}
?>
<?if(!empty($_GET['PAGEN_2'])){ $APPLICATION->AddChainItem("страница № ".$_GET['PAGEN_2']);}?>

<? 
/*seo*/
	require($_SERVER["DOCUMENT_ROOT"]."/include/seo/seo.php");
	
	if ($h1) { $APPLICATION->SetTitle(trim($h1)); }
	if($GLOBALS["product_title"]){$APPLICATION->SetPageProperty("title", trim($GLOBALS["product_title"]));
}else{
	if ($title) { $APPLICATION->SetPageProperty("title", trim($title)); }
}
	if ($description) { $APPLICATION->SetPageProperty("description", trim($description)); }
/*seo*/ 
?>

<!-- BEGIN JIVOSITE CODE {literal} -->
<!--<script type='text/javascript'>-->
<!--(function(){ var widget_id = 'wg3gtpoSaU';var d=document;var w=window;function l(){-->
<!--var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>-->
<!-- {/literal} END JIVOSITE CODE -->
	<!-- Respond.js - IE8 support of media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- selectivizr - IE8- support for css3 classes like :checked -->
	<!--[if lt IE 9]>
		<!--<script src="<?=SITE_TEMPLATE_PATH?>/js/3rd-party-libs/selectivizr-min.js"></script>-->
    	<!--<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->

<!--(начало)виджит БИТРИКС 24-->
<script data-skip-moving="true">
    (function(w,d,u){
        var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn.bitrix24.ru/b7205243/crm/site_button/loader_4_501o4d.js');
</script>
<!--(конец)виджит БИТРИКС 24-->
</body>
</html>
