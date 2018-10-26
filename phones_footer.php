<?use Bitronic2\Mobile;
$method = (mobile::isMobile()) ? 'tel' : 'callto';?>
<div class="phone">
    <a itemprop="telephone"
       content="88002505782"
       href="<? echo $method ?>:88002505782"
       class="white phone-link tel"
       data-tooltip=""
       title="Заказать звонок"
       data-placement="right" >
		   <?if(!empty($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0])){print_r($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0]);}else{?> +8-800-250-57-82<?}?>
    </a>
    <div class="free">звонок бесплатный</div>
</div>