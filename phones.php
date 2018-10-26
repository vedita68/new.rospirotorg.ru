<?use Bitronic2\Mobile;
$method = (mobile::isMobile()) ? 'tel' : 'callto';?>
<div class="phone-wrap">
	<div class="phone-wrap__left">
		<a itemprop="telephone"
		   content="88002505782"
		   href="<? echo $method ?>:88002505782"
		   class="phone-link tel"
		   data-tooltip=""
		   title="Заказать звонок"
		   data-placement="right" >
            +8 (800) <span class="bold_mod">250-57-82</span>
		</a>
		<span class="orange">Звонок бесплатный</span>
	</div>
	<div class="phone-wrap__right">
		<a itemprop="telephone"
		   content="84959242335"
		   href="<? echo $method ?>:88002505782"
		   class="phone-link tel ya-phone-hf"
		   data-tooltip=""
		   title="Заказать звонок"
		   data-placement="right">
			   <?
               if(!empty($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0]))
               {
                   print_r($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0]);
               }else{?>
                  <?/* +8 (495) <span class="bold_mod">924-23-35</span>*/?>
               <?}?>
		</a><?


$APPLICATION->IncludeComponent(
   "sotbit:regions.choose",
   ".default",
   Array(
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => 36000000,
   )
);
?>
		<!--<a class="phone-wrap__geo" href="">
			Москва и область
			<img src="<?=SITE_TEMPLATE_PATH?>/img/arrow-geo.png" alt="">
		</a>-->
	</div>
</div>
&nbsp; &nbsp;