<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StationSearchBlock  // feat Мира Стрельцова. 07.08.2020 Шеорше ля фам, господа конкуренты. Hfic.Samin
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_objKIIM, $_arrValues=array()) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//if(isset($_arrValues['name']))
		//	{
			$strSearchName		=$_arrValues['strName'];
		//	}
		//if(isset($_arrValues['style']))
		//	{
			$strSearchStyle		=$_arrValues['strStyle'];
		//	}
		//if(isset($_arrValues['bitrate']))
		//	{
			$strSearchBitrate	=($_arrValues['intBitrate']==0)?'':$_arrValues['intBitrate'];
		//	}
		//if(isset($_arrValues['codec']))
		//	{
			$strSearchCodec		=$_arrValues['strCodec'];
		//	}
			unset($_arrValues);

		$this->strHTML	='
			<hficMenu
				class="fix HR0 V99 layer_4 default BBV BTA"
				>
				<ifCutDown
					class="block right sensor TC1 BC1 no-select"
					onclick="
						this.parentNode.classList.remove(\'CutDown\');
						this.parentNode.className+=\' Expanded\';
						"
					style="
						text-align	:center;
						line-height	:36px;
						height		:38px;
						width		:60px;
						"
					>
					<ifRU>
						МЕНЮ
					</ifRU>
					<ifEN>
						MENU
					</ifEN>
				</ifCutDown>
				<ifExpanded
					class="fix block layer_4  HL0 HV99 TC1 BC1"

					style="
						height		:150px;
						width		:100vw;
						"
					>
					<menu
						class="block"
						style="
							width		:100%;
							height		:40px;
							padding		:0;
							margin		:0;
							"
						>
						<topTouchBuffer
							class	="block TC2 BC2"
							style	="
								height	:10px;
								width	:100%;
								font-size	:x-small;
								"
							>
							'.
							//$_SERVER['HTTP_X_FORWARDED_FOR'].
							'
						</topTouchBuffer>
						//Menu
						<closeButton
							class="sensor block right TC3 BC3"
							style="
								height		:20px;
								width		:60px;
								text-align	:center;
								line-height	:18px;
								"
							onclick="
								this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
								this.parentNode.parentNode.parentNode.className+=\' CutDown\';
								"
							>
							<ifRU>
								x
							</ifRU>
							<ifEN>
								x
							</ifEN>
						</closeButton>
						<bottomTouchBuffer
							class	="block TC2 BC2"
							style	="
								height		:10px;
								width		:100%;
								font-size	:x-small;
								"
							>
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer>
					</menu>
					<data
						class="block scrollerY TC1 BC1"
						style="
							width	:100%;
							height	:152px;
							"
						>
						<form 
							id		="formStationSearch"
							class		="block TC1 BC1"
							action		="/search"
							onsubmit	="return false;"
							style		="
									width		:100%;
									height		:152px;
									"
								    
							>'.
							//FormInput::strHtml($objKIIM, array('RU'=>'РФИд','EN'=>'RFId'), $strSearchId).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Название',
									'_EN'=>'Name'
								), array(
									'_strValue'	=>$strSearchName,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strName'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Стиль',
									'_EN'=>'Style'
								), array(
									'_strValue'	=>$strSearchStyle,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strStyle'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Ограничения',
									'_EN'=>'Limiting'
								), array(
									'_strValue'	=>$strSearchBitrate,
									'_strInputType'	=>'number',
									'_strInputName'	=>'intBitrate'
								), array(
									'bIzEq'		=>true,
									'_strInputName'	=>'strCodec',
									'_strValue'	=>$strSearchCodec,
								
								), array(
									'_strValue'	=>$strSearchBitrate,
									'_strInputType'	=>'number',
									'_strInputName'	=>'intBitrate'
									)
								).
							/*FormInput::strHtml($objKIIM, array(
									'_RU'=>'Кодек',
									'_EN'=>'Codec'
								), array(
									'_strValue'	=>$strSearchCodec,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strCodec'
								), array(
									'bIzEq'		=>false
								
								)).*/
							'</form>
						<questions
							class="block TC1 BC1 scrollerY"
							>
							<question class="block TC1 BC1">
								Are you robot?
							</question>
							<question class="block TC1 BC1">
								Are you assm programmer or coder?
							</question>
							<question class="block TC1 BC1">
								Are you Igor S Zirinskiy, our partner and entity participating in the profit of 51%?;
							</question>
							<question class="block TC1 BC1">
								Are you Kate Y Shapovalova, our partner and entity participating in the profit of 9%?;
							</question>
							<question class="block TC1 BC1">
								Are you Michael Teselkin, person entitled to buy 1% of shares?;
							</question>
							<question class="block TC1 BC1">
								Are you scientist?
							</question>
							<question class="block TC1 BC1">
								Are you dancer?
							</question>
							<question class="block TC1 BC1">
								Are you poet?
							</question>
							<question class="block TC1 BC1">
								Are you singer?
							</question>
							<question class="block TC1 BC1">
								Are you radioDj?
							</question>
							<question class="block TC1 BC1">
								Are you hardcore filarmonia virtuose?
							</question>
							<question class="block TC1 BC1">
								Are you hardcore conservatoria composer?
							</question>
							<question class="block TC1 BC1">
								Are you a DjFeel?
							</question>
							<question class="block TC1 BC1">
								Are you a Julia Pugo?
							</question>
							<question class="block TC1 BC1">
								Are you a Dj Миша Пуго?
							</question>
							<question class="block TC1 BC1">
								Are you a Paul Oakenfold?
							</question>
							<question class="block TC1 BC1">
								Are you Armin van Buuren?
							</question>
							<question class="block TC1 BC1">
								Are you Ferry Corsten?
							</question>
							<question class="block TC1 BC1">
								Are you Dj Михаил Тумблер?
							</question>
							<question class="block TC1 BC1">
								Are you Dj Мозг?
							</question>

							<question class="block TC1 BC1">
								Are you music shop getway Yaroslav Pomogaykin?
							</question>
							<question class="block TC1 BC1">
								Are you music shop getway2.0 Bogdanova Tatiana?
							</question>
							<question class="block TC1 BC1">
								Are you hockey player Ginger Red?
							</question>
							<question class="block TC1 BC1">
								Are you guitar virtuoz Alexey Popov?
							</question>
							<question class="block TC1 BC1">
								Are you Dj store underground Talhin Tagir?
							</question>
							<question class="block TC1 BC1">
								Are you Yamaha dealler Юрий Фоминенко?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Roman Messer?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Alex Byrka?
							</question>
							<question class="block TC1 BC1">
								Are you trance composer Ruslan Device?
							</question>
							<question class="block TC1 BC1">
								Are you drum`n`bass composer and Dj Konstatin Gvozd?
							</question>
							<question class="block TC1 BC1">
								Are you house Dj Harisov?
							</question>
							<question class="block TC1 BC1">
								Are you opera singer Anastasia Makimova?
							</question>
							<question class="block TC1 BC1">
								Are you studio owner I. Zirinskiy?
							</question>
							<question class="block TC1 BC1">
								Are you chanson music composer Н.Мясников?
							</question>
							<question class="block TC1 BC1">
								Are you electro live player Dj Пришелец?
							</question>
							<question class="block TC1 BC1">
								Are you trance cmposer Alex Shevchenko?
							</question>
							<question class="block TC1 BC1">
								Are you from Trance.kG/Radio?
							</question>
							<question class="block TC1 BC1">
								Are you from any radio station listed?
							</question>
							<question class="block TC1 BC1">
								Are you dark longhair person?
							</question>
							<question class="block TC1 BC1">
								Dou you want to see gay stations?
							</question>
							<question class="block TC1 BC1">
								Dou you want to see getero stations?
							</question>
							<question class="block TC1 BC1">
								Are you grass smoker?
							</question>
							<question class="block TC1 BC1">
								FM Mode.
							</question>
							<question class="block TC1 BC1">
								Save your setup.
							</question>
							<question class="block TC1 BC1">
								Hfic selection.
							</question>
							<question class="block TC1 BC1">
								DjMode Experimental (+vl)
							</question>
							<question class="block TC1 BC1">
								Receiver mode
							</question>
							<question class="block TC1 BC1">
								Black Mode
							</question>
							<question class="block TC1 BC1">
								Are you John Mcraven from pleasure beats?
							</question>
							<ifRU class="block left" > 
						<Notice class="block" style="font-size:60px">Альбомная ориентация</Notice>
						<WeDeclareOurPowerVectorDirection style="font-size:small">
						ХайФайИнтеллиджентКлаб.<br/> 
						Для безопасного использования.<br/> 
						Чтобы не исчезнуть, внезапно, мы стартовали наше приложение в сети onion. http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion<br/><br/>
						Тестируем периодически уже сейчас. Скоро запустим в стабильную работу.<br/><br/>
						Там мы будем доступны в любом случае. Сейчас по этому адресу, тестируемая мной версия следующего релиза.<br/><br/>
						 Onion сервер - это более защищённая версия сайта и приложения, <br/><br/>
						Доступ к ресурсу возможен только через ТОР браузер. https://www.torproject.org/.<br/>
						<br/>
						Сегодня 19.сентября.2020, мы полностью отказались от использования сервиса "Музыка в Контакте",
						тк. прграммисты, вк не справились с задачей, и  весь раздел музыка, работает из рук вон плохо, а самый главный
						минус, отвратительный, очень плохой звук. Я загружаю свой трек в ВК, и меня от него начинает тошнить!
						<br/><br/>
						Мы попробовали помочь сервису измениться, потратили на бескорыстную помощь около 3х месяцев, за свой счёт.
						Взаимопонимания достичь не удалось. К сожалению. Мы продолжаем развивать нашу систему хранения музыки.
						Система автономного хранения СОТА, позволит музыканту самостоятельно хранить свои музыкальные файлы, в качестве, которое он выбирает сам,
						Мы же предоставляем ему только доступ к кеширующему сокету, который делает доступным материал музыканта, по всему миру, без задержек, тормозов и сбоев.
						<br/><br/>
						Единственное, чего мы хотели добиться - не терять возможность забрать свои треки с ресурса, по своему желанию, без труда и унижения.<br/><br/>
						Возможность контролировать и отвечать за свой звук САМОСТОЯТЕЛЬНО. Своими ушами, своей репутацией, своим умом.<br/><br/>
						Мы не хотели противостоять гигантам монополистам и целый год терпели отвратительный звук, 
						а три месяца терпели ответы из поддержки: "Переустановите браузер и приложение".<br/><br/>
						Мы утратили все наши музыкальные треки, написанные в течении 16 лет, на студии, распроданной 10 лет назад. <br/><br/>
						Мы попросили возможность забрать наши треки, хотя-бы не пережатые 3 раза из ВК.
						Нам отказали. Наши 16 лет жизни -незначительная проблема для гигантов.(Assminog & ZzzuzzZ)<br/>
						<br/>
						Терпеть это унижение больше нет сил. Иван встал c печи и намерен идти до конца.<br/><br/>
						Наши мечты подкреплены математическим диффиренциальным рассчётом, позволившим нам сделать этот первый диффиренциальный скачёк.<br/><br/>
						Каждый следующий скачёк, будет увеличивать нашу производительность в несколько раз.<br/><br/>
						Да здравствует диффиренциальное исчисление, интегральное исчисление, матрицы, определители, факторинг, теория графов, ООП и замкнутый граф kG.<br/><br/>
						<br/>
						Хорошего дня, всем кто, как и мы, любит хороший звук и не готов мириться с его порчей невнимательными разработчиками, засевшими в глобальных ресурсах-монополистах. Hfic.Samin <br/>
						</WeDeclareOurPowerVectorDirection>


🚅    [RU] Всем привет!<br/><br/>
 🚃Сетевой аудио плеер HiFiIntelligentClub - самый высококачественный и производительный плеер в мире. 🚃<br/><br/>

Подходит для использования в автомобиле, мобильном телефоне, планшете, автомагнитоле, стационарном компьютере. 🚣<br/><br/>

Плеер сделан используя технологии, написанных нами с нуля. <br/><br/>

(🚲Мы пошли по этому пути, благодаря не решенной до сих пор проблеме, известной во всём мире как проблема "Нет денег 2000" и 
"Плати и владей 2020". <br/><br/>

🚃В деньги мы не упёрлись, всё сделали сами. ☕Спасибо университету ИТМО, за то что, когда я  был студентом, 
нас драли как сидровых коз. Толк в этом есть. И знания языка Ассемблер помогли в том числе, экономить миллоны рублей ежегодно. <br/><br/>

🚃Для нас миллион рублей - было не преодолимым препятствием для старта, а Ассемблер, взял и сэкономил этот миллион. И всё получилось). <br/><br/>
💡Вот наши технологии: <br/>
"Семафор[Сёма4]" (Сёма4 выбран за основу, тк в интернете очень много если и бардака, стандартов несколько а в 
процессе багрепортинга можно сильно загрустить, а у поездов семафор - это Бог, поэтому цвета плеера как у семофоров: 
Белый, жёлтый, голубой, красный. <br/>
🚃 Дебаггер "Вектор КИМа" (Философия: Отладь или умри, вне зависимости от того, сыт ты и есть ли у тебя 
хотя бы рубль в кармане) и <br/>
🚢 технологии синтеза исходного кода "ЕДРО" (Если Действие Реальность Объект). <br/><br/>
🚑Мы немного задерживаемся с 
апдейтом универсального интерфейса (Поиск, сервер баз данных итд.), очень много технических нюансов. <br/><br/>
🚃Ресурс в настоящий момент работает и возможно отвечает не всегда корректно на поисковые запросы  🚃. <br/><br/>
Дождитесь пожалуйста обновления, оно исправит положение дел. 
Спасибо что выбрали нас. Мы стараемся быть качественными. <br/><br/>
🚃Мы хотим быть качественными и прилагаем для этого все имеющиеся силы. <br/><br/>
🚑Исходные коды технологий проекта
(Обновляются не всегда вовремя, приношу извинения, но разработчик всего один. Это я. Исходники со временем будут все.): 
https://github.com/tubmulur	<br/><br/>
Разработчик приложения, реквизиты:<br/>
Индивидульный Предприниматель Чекмарёв А.А.<br/>
 19005, Россия, Санкт-Петербург, Троицкий пр. 16/22;<br/>
 ОГРНИП:309784721100325;<br/>
 ИНН: 782608611060<br/>
 Р/с:  40802810501006100214<br/>
 Филиал "Петровский" ОАО Банк "ОТКРЫТИЕ" г. Санкт-Петербурге<br/>
 К/с: 30101810400000000766<br/>
 БИК: 044030766<br/>

 
[Метро Технологический институт, Адмиралтейский р-н, "Адмиралтейский Пэрэдайз Дистрикт" (Что-то вроде силиконовой долины)] ]; 
</ifRU>
							<ifEN class="block left"                                > 
🚅    [EN] Hello everyboody! <br/><br/>
🚃You are on the HiFiIntelligentClub network audio player page. <br/><br/>
For today, HiFiIntelligentClub player is most universal and stable player of audiostream in the world. <br/><br/>
🚃It supports stable playing in the background and on top, in carsaudio, mobile devices, laptops. <br/><br/>
🚣Player was created using technologies, created by ourself (🚲Because of not solved yet "No money 2000" problem).<br/><br/>
 💡Here they are: Semafor[Sema4](Its train based filosophy, wnen semaphor signal is the God of the movement logics, so our colors are: 
Red, Blue, Yellow and white), <br/><br/>
debugger: VectorKIIM (Radical Javascript debugger. Debug or die filosophy), <br/><br/>
and 🚢code syntesis technology EDRO. <br/><br/>
🚃Player is working, but we are on high difficulty update of enduser interface, database server and search engine. <br/><br/>
🚃Sorry, that we 
cant fix any finded misstakes right now. <br/><br/>
🚑Project has only one developer at all. <br/><br/>
Sorry for the navigation misstakes, guess we fix it. <br/><br/>
Please wait for update. <br/><br/>
 Source codes https://github.com/tubmulur: <br/><br/>
App developer: <br/>
Individual Entrepreneur: Checkmarev A.A. <br/>
Registration certificate of Individual Entrepreneur: 309784721100325<br/>
Individual Taxpayer Number: 782608611060<br/>
Bank account: 40802810501006100214<br/>
BIC: 044030766<br/>
Address: 19005, Russia, Saint-Petersbourg, Troitskiy pr. 16/22,  <br/>
Metro Institute of Technology, Admiralteyskiy dc, <br/>
"Admiralteyskiy Paradise District" some kind of the high tech area
]; 
</ifEN>
							';
							$this->strHTML	.='<hr/>';
							foreach($_SERVER as $strName => $strValue)
								{
								$this->strHTML	.='<srv class="block">'.$strName.' - '.$strValue.'</srv>';
								}
							$this->strHTML	.='<hr/>';
						$this->strHTML	.='
						</questions>';

						$this->strHTML	.='
						<bottomTouchBuffer
						class	="block TC1 BC1"
							style	="
							height	:200px;
							width	:100%;
								"
							>
						</bottomTouchBuffer>
					</data>
				</ifExpanded>
				'.
				$this->strObjectInit();

				$this->strHTML	.=
			'</hficMenu>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('Search');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Object.SearchForm: Declare');
		class Search //Init in  StationSearchBlock.php
			{
			constructor()
				{
				console.log('[Vv]EDRO.Object.SearchForm: Construct');
				this.objStationSearch		=document.getElementById('formStationSearch');
				this.objValueInputstrName	=document.getElementById('SearchBystrName');
				this.strValueInputstrName	=this.objValueInputstrName.value;
				this.objValueInputstrStyle	=document.getElementById('SearchBystrStyle');
				this.strValueInputstrStyle	=this.objValueInputstrStyle.value;
				this.objValueInputintBitrate	=document.getElementById('SearchByintBitrate');
				this.strValueInputintBitrate	=this.objValueInputintBitrate.value;
				//this.objValueInputstrCodec	=document.getElementById('SearchBystrCodec');
				//this.strValueInputstrCodec	=this.objValueInputstrCodec.value;
				this.bIzHistory			=true;
				console.log('[..]EDRO.Object.SearchForm: Construct');
				}
			}
		console.log('[.]EDRO.Object.SearchForm: Declare');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objKIIM, $_arrValues=array())
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_objKIIM, $_arrValues);
		return $obj->strHTML;
		}
	}
?>