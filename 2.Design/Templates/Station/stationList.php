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
//$this->objEvent->arrRequest
/*echo'<pre>';
print_r($objEDRO);
echo'</pre>';*/
//exit(0);
//print_r($objEDRO->arrEvent['arrReality']);
//exit;

echo DynaScreen::strStart($objKIIM, $objEDRO, StationSearchBlock::strHTML($objKIIM, $objEDRO->arrEvent['arrReality'], $objEDRO->arrReality));
	echo StationList::strHTML($objKIIM, $objEDRO);
	?>
	<myName
		class="
			fixed V4 HR0 block layer_5_nav BC2 TC2
			"
		>
		<?php
		echo Tag::strHTML($objKIIM, $objEDRO->arrEvent['arrReality']['strName'], $objEDRO->arrEvent['arrReality'], 'strName', 11);
		?>
	</myName>
	<myStyle
		class="
			fixed V4 HL0 block layer_5_nav BC2 TC2
			"
		>
		<?php
		//echo $objEDRO->arrEvent['arrReality']['strGenre'];
		echo Tag::strHTML($objKIIM, $objEDRO->arrEvent['arrReality']['strGenre'], $objEDRO->arrEvent['arrReality'], 'strGenre', 11);
		?>
	</myStyle>
	<?php
	//print_r($objEDRO->arrEvent);
	echo '<market class="TC1 BC1 fixed V4 HR0 block layer_2" style="font-size:small;height:20px;line-height:19px;">';
	if(strtolower($objEDRO->arrEvent['arrReality']['strGenre'])=="trance"&&$objEDRO->arrEvent['arrReality']['strName']=='')
		{
		echo '<ifRU><marquee scrollamount="1">ХайФайИнтеллиджентКлаб частично воодушевлён Ферри Корстеном и Армином ван Бууреном. Самый главный вдохновитель - это Ferry Corsten, внезапно появляющийся в эфире и душевно завершающий бодрый трансовый викенд в дневных передачах в понедельник, на протяжении всего 2020 года.  В результате чего, я начал понимать, насколько красиво онлайн-радио, и насколько оно лучше безжизненного цифрового вещания. Очевидно что за интернет вещанием будущее. Внедряя интернет вещание в автомобиль, мы изменяем жизнь Санкт-Петербургских таксистов к лучшему, ибо им некуда деваться, приходится слушать одинаковые передачи всю неделю напрлёт, по 8-10 часов в день. Поэтому проект открытый. Для скорейшего и максимально качественного тестирования, для использования в интерфейсах средств повышенного внимания - такси. </marquee></ifRU>';
		echo '<ifEN><marquee scrollamount="1">HiFi Intelligent Club, partially inspired by Ferry Corsten & Armin van Buuren. Most of all - by Ferry Corsten, suddenly appears out of nowhere ON-AIR and ends up a  burning trance weekend  by the ending words every Sunday, throughout y2020.  As a result, I began to understand how beautiful on-line radio is, and how much better it is than lifeless digital broadcasting. By integrating Internet broadcasting in to the taxi cab, we are changing the lives of St. Petersburg taxi drivers for the better side, because they have nowhere to go, except they have to listen to the same programs all week long, for example, for 8-10 hours a day. Thats why the project is open. For the fastest and most high detailed- quality testing, for use in the interfaces of tools of increased attention-taxi.</marquee></ifEN>';
		}
	    else
		{
		//echo '<ifRU><marquee scrollamount="1" style="color:red;">ХайФайИнтеллиджентКлаб поздравляет Россиян с Днём Конституции!</marquee></ifRU>';
		//echo '<ifEN><marquee scrollamount="1" style="color:red;">HiFi Intelligent Club congratulates the Russians on Constitution Day</marquee></ifEN>';
		}
	echo '</market>';

	echo HiFiNavigation::strHTML($objKIIM, $objEDRO->arrObjects['мРасположение'], $objEDRO->arrEvent['arrReality']);
echo DynaScreen::strEnd($objEDRO->arrEvent['bIzDynamic']);
?>
<topTouchBuffer	
		class	="fix V2 block TC2 BC2 layer_5"
		style	="
			height		:10px;
			width		:100vw;
			font-size	:x-small;
			line-height	:9px;
			"
		>
	</topTouchBuffer>