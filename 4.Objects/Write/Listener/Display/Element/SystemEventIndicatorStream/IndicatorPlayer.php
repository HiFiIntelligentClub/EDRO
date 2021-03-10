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
class IndicatorPlayer
	{
	public $str;
	public function __construct()
		{
		//Новый год  🎄🎅
		//✰✰
		//★
		//🌠
		$this->str='
		<playerControlAlwaysVisible
			id	="playerControlAlwaysVisible"
			class	="left no-select ЕС3 BC3"
			style	="
				text-align	:left;
				width		:67%;
				height		:100%;
				margin-right	:1px;
				"
			>'.
			'
			<ifReady
				class	="abs V99 block cursor BC1 TC1 layer_2_2 select scrollerY Lx2"
				style	="
					text-align	:left;
					Width		:80vw;
					"
				>
				<Hfic_Samin
					class="block right"
					style="
						width		:40px;
						height		:100%;
						"
					>
					<image
						title="Hfic: Is there any hifi sound can i hear?" 
						src="cloudrepublic.ru/Hfic_Samin.jpg" 
						class="block" 
						style="
							height:100%;
							"
					/>'.ICQRType::strHTML(array(), '', '', array()).'
				</Hfic_Samin>
				<!--ReadyButtonStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
				</ReadyButtonStat-->
				<readyText
					class	="block scrollerY Lx2 BRJ"
					style	="
						height	:40px;
						width	:40px;
						"
					>
				</readyText>
			</ifReady>
			<ifOverload
				class	="abs line V99"
				style	="
					display		:none;
					left		:0px;
					width		:100vw;
					color		:#fff;
					background-color:red;
					"
				>
				<!--playerOverloadStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<loadingDuration
						class="block"
						>
						0
					</loadingDuration>
					<loadingErrors
						class="block"
						>
						0
					</loadingErrors>
				</playerOverloadStat-->
				<playerOverloadText
					class	="block scrollerY"
					style	="
						height		:100%;
						text-align	:left;
						"
					>
					<playerOverloadStationName
						
						id	="playerControlAlwaysVisibleOverloadStationName"
						>
					</playerOverloadStationName>
					<ifEN>
						<marquee>This station rejects playing. May be this station is overload or your internet connection is not enoght. Can\'t stay connected. You can try to listen another station</marquee>
					</ifEN>
					<ifRU>
						<marquee>Не получается подключиться к выбранной радиостанции. Возможно станция перегружена или интернет канал слишком мал, чтобы воспроизводить выбранную станцию. Вы можете попробовать выбрать другую радиостанцию.</marquee>
					</ifRU>
				</playerOverloadText>
			</ifOverload>
			<ifLoadingAudio
				id	="objLoadingAudioTopSmall"
				class	="brick left cursor TC1 no-select line"
				onclick	="objPlayer.stop();"
				style	="
					display		:none;
					width		:20px;
					text-align	:center;
					"
				>
				<playShader
					class	="fix block layer_2"
					style	="
						left		:0px;
						height		:20px;
						width		:20px;
						line-height	:20px;
						background-color:#f0ff00;
						"
					>
				</playShader>
				<loadIndicator
					class="fix brick layer_2_3  cursor no-select BLL BRJ TC3"
					onclick	="objPlayer.stop();"
					style	="
						left		:0px;
						font-size	:xx-small;
						width		:20px;
						line-height	:20px;
						text-align	:center;
						color		:#FFF;
						background-color:#ffeb00b8;
						"
					>
					<ifRU 
						title	="Для отмены загрузки радио станции нажмите."
						>
						☒
					</ifRU>
					<ifEN
						title	="To stop loading this audio stream just press."
						>
						☒
					</ifEN>
				</loadIndicator>
			</ifLoadingAudio>
			<ifLoadingAudio
				class	="fix V99 cursor TC3 layer_2_2 no-select doubleLine"
				style	="
					display		:none;
					left		:0px;
					width		:100vw;
					text-align	:left;
					"
				>
				<playerLoadingButton
					class	="block left BLJ TC3 BC3 doubleLine"
					id	="playerControlAlwaysVisibleLoading"
					onclick	="objPlayer.stop();"
					style	="
						text-align	:center;
						height		:100%;
						width		:40px
						"
					>
					<ifRU
						title="Нажмите чтобы отменить подключение"
						>
						☒
					</ifRU>
					<ifEN
						title="Press to stop connecting"
						>
						☒
					</ifEN>
				</playerLoadingButton>
				<!--playerLoadingStat
					id	="playerControlAlwaysVisibleLoadingStat"
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<loadingDuration
						class="block"
						>
						<header
							class="block left"
							>pl
						</header>
						<digit
							id	="playerControlAlwaysVisibleLoadingDuration"
							>
							0
						</digit>
						
					</loadingDuration>
					<loadingErrors
						class="block"
						>
						<header
							class="block left"
							>pe
						</header>
						<digit
							id	="playerControlAlwaysVisibleLoadingErrors"
							>
							0
						</digit>
					</loadingErrors>
				</playerLoadingStat-->
				<playerLoadingText
					id	="playerControlAlwaysVisibleLoadingText"
					class="block scrollerY TC1 BC1"
					style	="
						height		:100%;
						"
					>
					<marquee>
						<ifRU>
							Подключаюсь к радиостанции...
						</ifRU>
						<ifEN>
							Connecting to radiostation.... 
						</ifEN>
					</marquee>
					<playerLoadingStationName
						id	="playerControlAlwaysVisibleLoadingStationName"
						>
					</playerLoadingStationName>
				</playerLoadingText>
			</ifLoadingAudio>
			<ifPlaying
				id	="objPlayingAudioTopSmall"
				class	="block TC3 line"
				
				style	="
					display		:none;
					width		:100%;
					"
				>
				<playShader
					class	="fix block layer_2"
					style	="
						left		:0px;
						height		:20px;
						width		:20px;
						line-height	:20px;
						background-color:#062b88;
						"
					>
				</playShader>
				<playIndicator
					class="fix block left cursor no-select BLL BRJ TC3 layer_2_2"
					onclick	="objPlayer.stop();"
					style	="
						left		:0px;
						font-size	:xx-small;
						width		:20px;
						line-height	:20px;
						text-align	:center;
						color		:#FFF;
						background-color:#062b8824;
						"
					>
					<ifRU 
						title="Для остановки воспроизведения нажмите."
						>
						■
					</ifRU>
					<ifEN
						title="To stop plaing this audio stream just press."
						>
						■
					</ifEN>
				</playIndicator>
				<playIndicatorSongName
					id	="playerControlAlwaysVisiblePlaying"
					class	="block left scrollerY"
					style="
						margin-right	:20px;
						margin-left	:20px;
						height		:100%;
						max-width	:70%;
						font-size	:large;
						"
					>
					HiFiIntelligentClub
				</playIndicatorSongName>
			</ifPlaying>
			<ifPlaying
				class	="abs V99 cursor layer_2_2 select TC3 doubleLine"
				style	="
					display		:none;
					left		:0;
					width		:100vw;
					text-align	:left;
					background-color:#062b88;
					"
				>
				<playerPlayingButton
					class	="brick left BLL BRJ doubleLine"
					style	="
						    width	:40px;
						    "
					>
					<playerPlayingButton
						class	="brick left"
						onclick	="objPlayer.stop();"
						style="
							text-align	: center;
							width		: 40px;
							color		: #FFF;
							font-size	: small;
							background-color: #2d90f52b;/*Цвет Министерства Культуры Российской Федерации*/
							"
						>
						<ifRU 
							title="Для остановки воспроизведения нажмите."
							>
							Стоп
						</ifRU>
						<ifEN
							title="To stop plaing this audio stream just press."
							>
							Stop
						</ifEN>
					</playerPlayingButton>
				</playerPlayingButton>
				<playerPlayingLike
					id	="playerControlAlwaysVisiblePlayingLike"
					class	="block left BLL BRJ TC3 BC3 line"
					style	="
						font-size	:x-large;
						text-align	:center;
						width		:25px;
						margin-left	:5px;
						line-height	:13px;
						"
					onclick	="
						alert(\'coming soon!\');
						"
					>
					+
				</playerPlayingLike>
				<playerPlayingNews
					id	="playerControlAlwaysVisiblePlayingNews"
					class	="block right BLL BRJ TC3 BC3 line"
					style	="
						font-size	:large;
						text-align	:center;
						width		:95px;
						margin-left	:5px;
						margin-right	:85px;
					
						"
					onclick	="
						alert(\'coming soon!\');
						"
					>
					<ifRU>Новости</ifRU>
					<ifEN>News</ifEN>
				</playerPlayingNews>
				<!--a 
					class="block left"
					href		="/getNews"
					onClick		="
						return false;
						"
					>
					<ifRU>
						В избранные станции
					</ifRU>
					<ifEN>
						To selected stations
					</ifEN>
				</a-->
			</ifPlaying>
			<ifNoConnection
				class	="cursor layer_2_2 no-select TC3 BC3 doubleLine"
				onclick	="objPlayer.play();"
				style	="
					display		:none;
					color		:#000;
					text-align	:center;
					"
				>⚠
			</ifNoConnection>
			<ifNoConnection
				class	="abs V99 cursor layer_2_2 no-select BC1 TC1 doubleLine"
				onclick	="objPlayer.play();"
				style	="
					display		:none;
					width		:100vw;
					left		:0px;
					text-align	:center;
					"
				>
				<!--playerNoConnectionStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<NoConnectionDuration
						class="block"
						>
						0
					</NoConnectionDuration>
					<NoConnectionErrors
						class="block"
						>
						0
					</NoConnectionErrors>
				</playerNoConnectionStat-->
				<playerNoConnectionext
					class	="block scrollerY"
					style	="
						height		:100%;
						text-align	:left;
						"
					>
					<playerNoConnectionStationName
						
						id	="playerControlAlwaysVisibleNoConnectionStationName"
						>
					</playerNoConnectionStationName>
					<ifRU>
						<marquee>Радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. Попробуйте выбрать выбрать другую радиостанцию из списка.</marquee>
						
					</ifRU>
					<ifEN>
					[p	<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
					</ifEN>
				</playerNoConnectionext>
			</ifNoConnection>
			<ifStopped
				class	="fix block cursor layer_2_2 TC3 no-select line BRJ"
				onclick	="
					//objPlayer.objAudio.src				=objPlayerIndicatorMembrane.getAttribute(\'playerId\');
					objPlayer.play();
					"
				style	="
					display		: none;
					text-align	: center;
					background-color: #0000006e;
					width		: 40px;
					"
				>
				▷
			</ifStopped>
			<ifStopped
				class	="abs V99 cursor layer_2_2 BC1 select doubleLine"
				style	="
					display		:none;
					left		:0;
					width		:100vw;
					text-align	:center;
					color		:#777;
					"
				>
				<playerPlayButton
					class	="block left TC3 BC3 line"
					onclick	="
						//objPlayer.objAudio.src			=this.parentNode.getAttribute(\'playerId\');
						objPlayer.play();
						"
					style	="
						text-align	:center;
						width		:40px;
						"
					>
					<ifEN
						title="Play station"
						>Play
					</ifEN>
					<ifRU
						title="Нажмите чтобы начать слушать радио."
						>Воспр.
					</ifRU>
				</playerPlayButton>
				<playerNoConnectionStat
					class	="block right BLL TC3 BC3"
					style	="
						text-align	:left;
						height		:100%;
						width		:100px;
						line-height	:13px;
						"
					>
					<NoConnectionDuration
						class="block"
						>
						0
					</NoConnectionDuration>
					<NoConnectionErrors
						class="block"
						>
						0
					</NoConnectionErrors>
				</playerNoConnectionStat>
				<playerPlayText
					id	="playerControlAlwaysVisibleStopped"
					class	="block scrollerY"
					style	="
						height		:100%;
						"
					onClick	="
						objEvent.arrReality.strID=\'\';
						objEvent.arrReality.strName=\'\'; 
						objEvent.arrReality.strStyle=\'\';
						objEvent.arrReality.intBitrate=\'\';
						objEvent.arrReality.strCodec=\'\';
						objEvent._UpdateURLDyn(true);"
						"
					>
				</playerPlayText>
			</ifStopped>
		</playerControlAlwaysVisible>
		'.Player::strObjectInit();
		}
	public static function strHTML()
		{
		$objIndicatorPlayer	=new IndicatorPlayer();
		return $objIndicatorPlayer->str;
		}
	}
?>