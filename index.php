<?php
/**
 * Created by PhpStorm.
 * User: progr
 * Date: 19.08.2018
 * Time: 11:15
 */

use CrmAccount\AddAcoount;
use CrmAccount\ArrIdAccount;
use CrmAccount\IdAccount;
use CrmAccount\CoreCrm;
use CrmAccount\GetAccount;
use CrmAccount\AddTask;
use CrmCompany\VseCompany;
use CrmCompany\GetCompany;
use CrmCompany\IdCompany;
use CrmLenta\CrmLenta;
use Debug\Debug;
if(!$_SERVER['DOCUMENT_ROOT'])
    $_SERVER['DOCUMENT_ROOT'] = '/home/v/vhost/webhooks.tmb.name/public_html';
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/Xml.php';
require_once __DIR__ . '/log.php';

//(CRM)массив со всеми счетами
$obj = new GetAccount();
$arrAccount = $obj->get()['result'];

//(CRM)массив со всеми id счетами 1c
$obj = new ArrIdAccount();
$arrIdAccount1C = $obj->arrId($arrAccount);

// проверяет, есть ли файл INN хотябы у одной компании
function presenceInnCompany($date){
    foreach ($date as $value){
        if(VseCompany::get($value["inn"]) != "false"){
            return "true"; break;
        }else{
            $result = "false";
        }
    }
    return $result;
}



//выполням если есть файл
if(file_exists("file/data.xml")){
    // если есть то возвращет строкое слово true, если нет false
    $presenceInn = presenceInnCompany($invoices["invoice"]);
    //Основной класс
    CoreCrm::control($invoices, $arrIdAccount1C, $arrAccount);
    CoreCrm::company($contragents);
    if($presenceInn != "false"){
        logi(1, $_SERVER['DOCUMENT_ROOT']);
    }else{
        logi(2, $_SERVER['DOCUMENT_ROOT']);
    }
    unlink("file/data.xml");
}else{
    $date = date("d.m.y").".xml";
    $filename = "{$_SERVER['DOCUMENT_ROOT']}/newlipetskprofil/logi/{$date}";
    $text = 'Сегодня файл не загружали на cервер';
    //зписываем текст в файл
    file_put_contents($filename, $text);
    echo "Сегодня файла нет";
}