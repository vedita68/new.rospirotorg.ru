<div class="addr_top">
    <?
    foreach ($_SESSION["SOTBIT_REGIONS"]["UF_CITY"] as $value){
        if($value != ""){
            print_r($value);
        }
    }
    ?>
</div>
<div class="addr_bot">
    <?print_r($_SESSION["SOTBIT_REGIONS"]["UF_ADDRESS"][0]);?>
</div>