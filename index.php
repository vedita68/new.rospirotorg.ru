<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты - интернет магазин Рос Пиро Торг");
$APPLICATION->SetPageProperty("description", "Контактные данные компании Рос Пиро Торг - телефон, адрес, электронная почта");
$APPLICATION->SetTitle("Контакты");
?><main class="about-page">
<? /*<h1><?$APPLICATION->ShowTitle(false)?></h1>

<a target="_blank" href="<?=htmlspecialchars($APPLICATION->GetCurUri("print=Y"));?>" title="Версия для печати" rel="nofollow">Версия для печати</a>
*/ ?>
<div class="vcard">
	<div class="container">
		<div class="vcard row">
			<div style="display:none">
 <span class="fn org">РосПироТорг</span> <span class="url"><span class="value-title" title="https://rospirotorg.ru"></span></span>
			</div>
			<div class="col-md-12">
				<h2><?if(!empty($_SESSION["SOTBIT_REGIONS"]["NAME"])){print_r($_SESSION["SOTBIT_REGIONS"]["NAME"]);}else{ echo "Москва";}?></h2>
			</div>

			<div class="col-md-8">
				<div class="map">#SOTBIT_REGIONS_MAP_YANDEX#
					<?/*$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(0=>"ZOOM",1=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.62297879048253;s:10:\"yandex_lon\";d:37.7184989470825;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.719518186508;s:3:\"LAT\";d:55.623874238517;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);*/?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="adr">
                    <div>
                        <h1>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include_areas/contakts/titleAdress.php"
                                )
                            );?>
                        </h1>
                    </div>
					<div class="ap_worktime">
						 Время работы: <span class="workhours">с 9:00 до 21:00 без выходных</span><br>
					</div>
					<div class="ap_phones">
						<span>тел. <span class="tel ya-phone"><?if(!empty($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0])){print_r($_SESSION["SOTBIT_REGIONS"]["UF_NOMER"][0]);}else{?>8-495-924-23-35<?}?></span></span><br>
 <span>тел. <span class="tel">8-800-250-57-82</span><br>
 <span class="freecall">звонок по России бесплатный</span></span><br>
 <span>тел. <span class="tel">8-915-790-44-00</span> интернет заказ</span>
					</div>
					<div class="ap_email">
						 e-mail: <a href="mailto:admin@rospirotorg.ru">admin@rospirotorg.ru</a><br>
					</div>
					 ЦЕНТРАЛЬНЫЙ ОФИС:
					<div class="ap_address">
						 Aдрес: <span class="locality">г. Москва</span>, <span class="street-address">Борисовский проезд д.8 корпус 2<br>
 </span>
						Как пройти: <span class="locality">От метро Домодедовская по улице Генерала Белова в сторону центра. Возле магазина "Дикси"&nbsp;во двор&nbsp;направо.<br>
 </span> <span class="f9b865"></span>
					</div>
					<div class="ap_additional">
 <span class="info">Продажа товаров в офисе не производится</span>
					</div>
				</div>
			</div>
 <br>
		</div>
		<div class="row">
			<div class="vcard col-md-6">
				<div style="display:none">
 <span class="fn org">РосПироТорг</span> <span class="url"> <span class="value-title" title="https://rospirotorg.ru"></span> </span>
				</div>
				<h2>Александров</h2>
				<div class="map ap_bottom">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(0=>"ZOOM",1=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:56.39770020054501;s:10:\"yandex_lon\";d:38.71541722684475;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:38.71645255952453;s:3:\"LAT\";d:56.39779391076448;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_HEIGHT" => "300",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
				</div>
				<div class="adr">
					<div class="ap_worktime">
						 Время работы: <span class="workhours">с 9:00 до 21:00</span><br>
					</div>
					<div class="ap_phones">
 <span>тел. <span class="tel">8-800-250-57-82</span> звонок по России бесплатный</span><br>
 <span>тел. <span class="tel">8-915-790-44-00</span> интернет заказ</span><br>
 <span>тел. <span class="tel">8-919-016-11-33</span> розничный магазин</span>
					</div>
					<div class="ap_email">
						 e-mail: <a href="mailto:admin@rospirotorg.ru">admin@rospirotorg.ru</a>
					</div>
					<div class="ap_address">
						 Адрес: <span class="locality">Владимирская обл., г. Александров</span>, <span class="street-address">ул. Ленина, д.13, стр.4а</span>
					</div>
				</div>
			</div>
			<div class="vcard col-md-6">
				<div style="display:none">
 <span class="fn org">РосПироТорг</span> <span class="url"> <span class="value-title" title="https://rospirotorg.ru"></span> </span>
				</div>
				<h2>Киржач</h2>
				<div class="map ap_bottom">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTROLS" => array(0=>"ZOOM",1=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:56.160250994672396;s:10:\"yandex_lon\";d:38.865851201049786;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:38.86694554232786;s:3:\"LAT\";d:56.159978581805184;s:4:\"TEXT\";s:0:\"\";}}}",
		"MAP_HEIGHT" => "300",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
				</div>
				<div class="adr">
					<div class="ap_phones">
 <span>тел. <span class="tel">8-800-250-57-82</span> звонок по России бесплатный</span><br>
 <span>тел. <span class="tel">8-915-790-44-00</span> интернет заказ</span><br>
 <span>тел. <span class="tel">8-910-675-40-20</span> розничный магазин</span><br>
					</div>
					<div class="ap_email">
						 e-mail: <a href="mailto:admin@rospirotorg.ru">admin@rospirotorg.ru</a><br>
					</div>
					<div class="ap_address">
						 Адрес: <span class="locality">Владимирская обл., г. Киржач</span>, <span class="street-address">ул. Гагарина, 15а</span>
					</div>
				</div>
			</div>
		</div>
		<h2>Пункты самовывоза</h2>
		<div class="punkts">
			<div class="info">
				 !!! ВНИМАНИЕ!!! В пунктах самовывоза только получение интернет-заказа. Розничной продажи нет!!!
			</div>
			<table class="ap_punkts" border="1" cellpadding="0" cellspacing="0">
			<thead>
			<tr>
				<td>
					 Город
				</td>
				<td>
					 Адрес&nbsp;
				</td>
				<td>
					 Телефон&nbsp;
				</td>
				<td style="width:150px">
					 &nbsp;до пункта выдачи (руб.)&nbsp;
				</td>
				<td style="width:150px">
					 Время доставки (дней)
				</td>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td style="height:20px">
					 Калуга
				</td>
				<td>
 <a href="/about/contacts/#калуга">Грабцевское ш.,107</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Липецк
				</td>
				<td>
 <a href="/about/contacts/#липецк"> Трубный проезд, 17б</a>
				</td>
				<td>
					 8 (4742) 24-19-92
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Ижевск
				</td>
				<td>
 <a href="/about/contacts/#ижевск"> ул. Пойма, 19Б</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Рязань
				</td>
				<td>
 <a href="/about/contacts/#рязань"> Окружная дорога, 185 км, стр. 6а</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Ульяновск
				</td>
				<td>
 <a href="/about/contacts/#ульяновск">ул. Ефремова, 52</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Вологда
				</td>
				<td>
 <a href="/about/contacts/#вологда"> Северная ул., 27</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Саранск
				</td>
				<td>
 <a href="/about/contacts/#саранск">Строительная ул., 12</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Энгельс
				</td>
				<td>
 <a href="/about/contacts/#энгельс">Лесокомбинатская ул., 30</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Сыктывкар
				</td>
				<td>
 <a href="/about/contacts/#сывтывкар">Сысольское ш., 33</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Петрозаводск
				</td>
				<td>
 <a href="/about/contacts/#петрозаводск">Коммунистов ул., 50</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Череповец
				</td>
				<td>
 <a href="/about/contacts/#череповец">Промышленная ул., 7, стр. 4</a>
				</td>
				<td>
					 8 (8202) 20-71-92
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Тюмень
				</td>
				<td>
 <a href="/about/contacts/#тюмень"> ул. Коммунистическая, 47</a>
				</td>
				<td>
					 8 (345) 221-28-92
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Красноярск
				</td>
				<td>
 <a href="/about/contacts/#красноярск">Северное ш., 17Б</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Пенза
				</td>
				<td>
 <a href="/about/contacts/#пенза">Совхозная ул., 15з</a>
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Самара
				</td>
				<td>
					 Механиков ул., 2
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Нижний Новгород
				</td>
				<td>
 <a href="/about/contacts/#нижний_новгород"> Московское ш., 52</a>
				</td>
				<td>
					 8 (831) 261-35-22
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Саратов
				</td>
				<td>
					 Московское шоссе, 14А/3
				</td>
				<td>
					 8-800-250-57-82
				</td>
				<td>
					 450
				</td>
				<td>
					 2
				</td>
			</tr>
			<tr>
				<td style="height:20px">
					 Казань
				</td>
				<td>
 <a href="/about/contacts/#казань"> Восстания ул., 100</a>
				</td>
				<td>
					 8 (843) 208-50-92
				</td>
				<td>
					 550
				</td>
				<td>
					 5
				</td>
			</tr>
			</tbody>
			</table>
		</div>
	</div>
	<div class="quality_wrapper">
		<div class="container">
			<div class="quality">
				<div class="title">
					 Качество работы, претензии и замечания Вы можете сообщить лично руководителю компании: тел. 8(915) 790-44-00&nbsp;Генеральный директор РосПироТорг
				</div>
				<div>
					<p>
						 Наименование: <span>
						Индивидуальный предприниматель<br>
						 Толстов Александр Павлович&nbsp;</span>
					</p>
					<p>
						 ИНН: 504507424777&nbsp;
					</p>
					<p>
						 ОГРИП: 316332800105953 Инспекция Федеральной налоговой службы по Октябрьскому району г.&nbsp;Владимир 28.11.2016 <br>
						 ОКВЭД: 47.78.9 47.91.2 47.19 46.90 <br>
						 Телефоны: <span>
						Толстов Александр Павлович - директор<br>
						 8 (915) 790-44-00<br>
						 Уткина Светлана Ивановна - бухгалтер<br>
						 8 (49273) 2-59-23 </span> <br>
						 E-mail в офисе: <span> <a class="black" href="mailto:tolstov.a.p@mail.ru">tolstov.a.p@mail.ru</a> </span>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="regions">
			<div class="row">
				<div class="col-md-12">
					<h2>Региональные представительства</h2>
				</div>
			</div>
			<div class="row">
				<div id="казань" class="col-md-6">
					<p>
						 Казань, Восстания ул., 100. Тел: 8 (843) 208-50-92
					</p>
					<div class="map">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5772454f1d69c59f1dc7a4edb112bead078310da8523073787d388e67dc585f5&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="калуга" class="col-md-6">
					<p>
						 Калуга, Грабцевское ш.,107. Тел: 8-800-250-57-82
					</p>
					<div class="map">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8728da596262ec39af4b5c291aeaf22263e891c332e93416f4dfbcc745fdd630&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="липецк" class="col-md-6">
					<p>
						 Липецк, Трубный проезд, 17б. Тел: 8 (4742) 24-19-92
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3c80e1e3b2eca9e1b60d57cf56580db4ae3fd8e0ff007a9e50a2f7778de99997&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
 <br>
				<div id="ижевск" class="col-md-6">
					<p>
						 Ижевск, ул. Пойма, 19Б. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2a445e01a0d1dbc910e274628ae1b5513ada3c2f40056ce68c6fd00da43ce5c9&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="рязань" class="col-md-6">
					<p>
						 Рязань, Окружная дорога, 185 км, стр. 6а. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2f4c42fa8d4f4ba83bab9cb3b9c01649be87eb2adb808cab91b1d69b2e1582fc&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="ульяновск" class="col-md-6">
					<p>
						 Ульяновск, ул. Ефремова, 52. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7b4fcd017a197057bae1b6c7dc1ff039ff23e4c0132f2c5f25a35737ec80d27f&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="вологда" class="col-md-6">
					<p>
						 Вологда, Северная ул., 27. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad60b9e587583c0c87afd82d72c4f9f381799379e28ab6b8f81918f010304d42f&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="саранск" class="col-md-6">
					<p>
						 Саранск, Строительная ул., 12. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A370c8e521c4020e8a7332750bc9e51f0bccd47eda4cacbe0e54ce2a4a499ae6a&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="энгельс" class="col-md-6">
					<p>
						 Энгельс, Лесокомбинатская ул., 30. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4aa157e767d5210c12b54d76dbf15c3c6c98a3f1f3d164a54d5ca6f5a166b2d4&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="сывтывкар" class="col-md-6">
					<p>
						 Сыктывкар, Сысольское ш., 33. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7d4a48eaed4be78ade039ff92e4877990a814c6e3bfc58e95987d490ad0cfbb1&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="петрозаводск" class="col-md-6">
					<p>
						 Петрозаводск, Коммунистов ул., 50. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4c37672a94407c35557bec3451840f7051664b0f31123659dc6e7e3771d28f5a&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="череповец" class="col-md-6">
					<p>
						 Череповец, Промышленная ул., 7, стр. 4. Тел: 8 (8202) 20-71-92
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8602a91430504179d83db6facba6c71c85a50e99818c1343ba0a87faa4bbac63&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="тюмень" class="col-md-6">
					<p>
						 Тюмень, ул. Коммунистическая, 47. Тел: 8 (345) 221-28-92
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A322720d031f501cc52368a00f2191b15f13385df9b6b432b079a893708bf880c&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="красноярск" class="col-md-6">
					<p>
						 Красноярск, Северное ш., 17Б. Тел: 8-800-250-57-82
					</p>
					<div class="map ap_bottom">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5f26b356fe8cc0d7930897b6225d68ac205a757f2449b7d834de2033f7a8f498&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="пенза" class="col-md-6">
					<p>
						 Пенза, Совхозная ул., 15з. Тел: 8-800-250-57-82
					</p>
					<div class="map">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A695b99a379c18cedb6379f890d807093e32fb50cc888615559aece08bdcbb55e&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
				<div id="нижний_новгород" class="col-md-6">
					<p>
						 Нижний Новгород, Московское ш., 52. Тел: 8 (831) 261-35-22
					</p>
					<div class="map">
						 <script data-skip-moving="true" type="text/javascript" charset="utf-8" async
                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A95522466256fe901917e57b0d02a3c4e220dfab1f1e9c2b34aa81b568250e021&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 </main><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php") ?>