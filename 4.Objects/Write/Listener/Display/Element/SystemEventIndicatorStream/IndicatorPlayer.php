<?php
class IndicatorPlayer
	{
	pubilic function __construct()
		{
		//Новый год  🎄🎅
		//✰✰
		//★
		//🌠
		$str='
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
				class	="abs V99 block cursor BC1 TC1 layer_2_2 select scrollerY doubleLine"
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
						src="/Hfic_Samin.jpg" 
						class="block" 
						style="
							height:100%;
							"
					/>
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
					class	="block scrollerY"
					style	="
						height:40px;
						"
					>
					<ifRU>
						<marquee direction="up" scrollamount="1" style="font-size:small"><paragraph></paragraph>Приветствуем вас в HiFI Intelligent Club.<br/><br/><br/>
						Дорогие Бродкастеры. В настоящий момент, мы не поддерживаем станции с длиной названия более 256 символов. По техническим причинам.<br/><br/>
						<br/><br/><br/><br/>
						Эйчфик Самин.<br/><br/>
						Президент <br/><br/>
						<pr style="font-size:xx-large;color:#000;font-family: serif;">
						HiFi<br/><br/><br/><br/>
						Intelligent<br/><br/><br/>
						Club
						</pr>
						</marquee>
					</ifRU>
					<ifEN>
						<marquee direction="up" scrollamount="1" style="font-size:small">
						<paragraph></paragraph>Hello<br/><br/>
						<paragraph></paragraph>at <br/><br/>
						<paragraph></paragraph>HiFiIntelligentClub.<br/><br/><br/>
						Dear broadcasters, by the technical reasons station names with more than 256 symbols length, are not supported now.<br/><br/>
						We are focusing on this problem now. <br/><br/>
						<br/><br/><br/><br/>
									
						<pr style="font-size:хx-large;color:#000;font-family: serif;">
						HiFi<br/><br/><br/>
						Intelligent<br/><br/><br/>
						Club
						</pr><br/><br/><br/>
						President <br/><br/><br/>
						<b>Hfic Samin</pr>.<br/><br/>
						</marquee>
					</ifEN>
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
				class	="block cursor TC1 layer_2_2 no-select line"
				onclick	="objPlayer.stop();"
				style	="
					display		:none;
					width		:20px;
					text-align	:center;
					background-color:yellow;
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
			</ifLoadingAudio>
			<ifLoadingAudio

				class	="abs V99 cursor TC3 layer_2_2 no-select doubleLine"
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
				<playIndicator
					class="block left cursor no-select BLL BRJ TC3"
					onclick	="objPlayer.stop();"
					style	="
						font-size	:xx-small;
						width		:20px;
						line-height	:20px;
						text-align	:center;
						color		:#FFF;
						background-color:#062b88;
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
						height		:100%;
						/*width		:270px;*/
						max-width	:70%;
						font-size	:large;
						/*margin-left	:30px;*/
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
							background-color: #6fb6ff9c;
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
						<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
					</ifEN>

				</playerNoConnectionext>
			</ifNoConnection>
			<ifStopped
				class	="block cursor layer_2_2 TC3 no-select line"
				onclick	="
					/*objPlayer.objAudio.src				=objPlayerIndicatorMembrane.getAttribute(\'playerId\');*/
					objPlayer.play();
					"
				style	="
					display		:none;
					text-align	:center;
					"
				>'.
				//PlayerEventIndicator::strHTML(). Osciloscope - disabled temporary
				'
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
						/*objPlayer.objAudio.src			=this.parentNode.getAttribute(\'playerId\');
						objPlayer.objAudio.play();*/
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
		';
		$str.=Player::strObjectInit();
		return $str;
		}
	}
?>