<?php     















етр
/*                       /
N    ->NSzKv ->  ZIIФ: / /
 Sо  ->NSzKv    vKIIM	->
   оKv->NSzKv   КИЛИМ	->
		
/*
© Hfic Samin (Andrey Chekmaryov) 2020
0  function фПослеОткрФигСкоб()
	{
	1 function фПослеКавычки()			 
	|	{					 
	|	2 function фПослеКавычки()		 				КИЛИМ	->
	|		{				 				vKIIM	->
	|		3 function фПослеДвоеточия()	                //|  		| ||{|| || |            
	|		|	{                                       //|| 		|n||s||"|| |            
	|		|	4 function фПослеЧисла()                //||?		|n||s||"|| |  ("||!")   
	|		|	|    	{                               //||?		|n||s|| || |
	|		|	|	5 function фПослеЗапятой()      //||?		|n|| || || |"
	|		|	|	|	{                       //||?		,s||s|| || ||| ||!")
 	|		|	|	|	1....                   //||?		|,|  ||"||: S
	|		|	| 	|	}                       //||?		| ||,|| || |||
	|		|	|	}                               //||?		| || || || |n
	|		|	|	6 functionПослеЗакрФигСкоб()    //||?		| || || || |
	|		|	|		{                       //||?		| || || || |
	|		|	|		}	                //||?		| ||,|| || |
	|		|	1 function фПослеКавычки()              //||?		| || || || |
	|		|	{	                                //||?		| || || ||" |
	|		|	}                                       //||?		| || || ||:^|(\")?=Парам
	|		5 function фПослеЗапятой()                      //||?		| || || || |
	|			{                                       //||?		| || || || |		
 	|			}                                       //   		| ||}|| || |		
	|		
	|	
	4 function фПослеЧисла()
	|    	{
	|	}
	6 functionПослеЗакрФигСкоб()
		{
		}
[0]
[1-2]3
[1-2]3[4]
[1-2]3[4][5]
[1-2]5[1][6]
[1-2]5[1]
[1-2]5
[4-5]
[6]
*/

function фПослеОткрФигСкоб() 1
	{
	}
function фПослеКавычки() 2
	{
	}
function фПослеДвоеточия() 3
	{
	}
function фПослеЧисла() 4
	{
	}
function фПослеЗапятой() 5
	{
	}
functionПослеЗакрФигСкоб() 6
	{
	}
$strJSON		=(string)'{"i0D":"7238","strParent":"/Stations/unordered", "server_name":"Life Radio Tirol Christmas","server_type":"audio/mpeg","bitrate":"128","samplerate":"0","channels":"0","listen_url":"https://liferadiotirol.apa.at:8000/christmas","current_song":"","genre":"Christmas","intBitrate":"128","strServer_type":"mpeg","strServer_name":"lifeо27оradioо27оtirolо27оchristmas","strListen_url":"httpsо32оо28оо28оliferadiotirol.apa.atо32о8000о28оchristmas", "strConnect_RU":"НетСоед: 03-12-2020_21:39:42", "strConnect_EN":"NoConnect: 2020-12-03_21:39:42"}';
MyJSON::arr($strJSOM);
array(
	array(x:y),
);
class MyJSON
	{
	public	$м	=array();
	public function __construct($strJSON)
		{
		$м			=array();
		$фОткрКавычка		=false;
		$фЗакрКавычка		=false;
		$фДвоеточие		=false;
		$фДоЗапятой		=true;

		$int1Length		=strlen($strJSON);
		for($int0I=0;$int0I<$int1Length;$int0I++)
/*	vKI IM	*/	{
	/*0\"*/		if(($strJSON[$int0I]=='"')&&(!$фКавычкаОткрыта&&!$фКавычкаЗакрыта)) //ЕСЛИ откр кавычка,  и нет незакрытой кавычки
	/*1 П*/			{
	/*2 А*/			$фСтрокаОткрыта		=true;
				$фСтрокаЗакрыта		=false;
				$фПослеДвоеточия	=false;
	/*3 Р*/			}
	/*4 А*/		else
	/*5 М*/			{
				$с	.=$strJSON[$int0I]; 
	/*6 Е*/			}
	/*7 Т*/		
	/*8 Р*/			
	/*9\"*/		if(($strJSON[$int0I]=='"')&&($фКавычкаОткрытаа&&!$фКавычкаЗакрыта)) //2ЕСЛИ закрывается кавычка, после открывабющейся.
	/*10:*/			{
				$фКавычкаОткрыта		=false;
				$фКавычкаЗакрыта		=true; //Межкавычье vvvv
				$ч0ТекущийШагЗакрытияКавычки	=$int0I;
				$фПослеДвоеточия		=false;
				}
			else
				{
				// Пропускаем внешнее межкавычье.
				}

			if(($strJSON[$int0I]==':')&&(!$фКавычкаОткрыта&&$фКавычкаЗакрыта)) //Определяем, параметр или значение
				{
				//Если параметр в кавычках ^^^^^^^^ trim запрещён. Кавычки = Exact!
				$фПослеДвоеточия		=false;
				$ч0Двоеточие			=$int0I;

				$сИндекс			=$c;
				$м[$сИндекс];			='';
				$с				='';
				}
			else
				{
				//
				}
			if($фПослеДвоеточия)
				{
				}


			/*	
			if(($strJSON[$int0I]!=':')&&(!$фКавычкаОткрыта&&$фКавычкаЗакрыта)) //После закр. кавычки и двоеточия
				{
				$с	.=$strJSON[$int0I]; 
				if($strJSON[$int0I]!=':')
					{
					}
				($strJSON[$int0I]=='"')
				$м[$сИндекс]	=trim($с);
				$this->м[]	=$м;
				$с		='';
				$м		=array();
				}
			*/
			/*if($this->intFromQuote) 			//Reality:[открытая кавычка->Записываем буквы в строку,
									//	закрытая ковычка, просто двигаемся дальше по тексту ]
				{
				$this->int0TagOpen	=0;
				$bTagIn			=true;
				$bTagOut		=false;
				}*/
			/*if($this->int0TagClose==$arrClose['len'])
				{
			[1;5DTagString					=substr($strIn,1,(-$arrClose['len']+1));
				if($strTagOpen=='entry')
					{
					}
				else
					{
					$arrTag[$strTagOpen]['str']			=$strTagString;
					}
				//$arrTag[$strTagOpen]['str']			=substr($strIn,1,(-$arrClose['len']+1));
				$arrTags					=$this->arrTagName($strTagString);
				if(!empty($arrTags))
					{
					foreach($arrTags as $strTag)
						{
						$arrTag[$strTagOpen][$strTag]	=MyJSON::arr($strTagString, $strTag)[0]['str'];
						}
					}
				//$arrTag[$strTagOpen]['server_name']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_name');
				//$arrTag[$strTagOpen]['server_type']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_type');
				//$arrTag[$strTagOpen][$intTag]['bitrate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'bitrate');
				//$arrTag[$strTagOpen][$intTag]['samplerate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'samplerate');
				//$arrTag[$strTagOpen][$intTag]['channels']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'channels');
				//$arrTag[$strTagOpen][$intTag]['listen_url']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'listen_url');
				//$arrTag[$strTagOpen][$intTag]['current_song']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'current_song');
				//$arrTag[$strTagOpen][$intTag]['genre']		=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'genre');
				$this->arrTag[]					=$arrTag[$strTagOpen];
				$intTag++;
				$strIn			='';
				$this->int0TagClose	=0;
				$bTagIn			=false;
				$bTagOut		=true;
				}
			if($bTagIn)
				{
				$strIn	.=$strXML[$int0I];
				}
			else
				{
				}
			//echo $strIn;
			}*/
		}
	public static function arr($strXML, $strTagOpen)
		{
		$objTag	= new MyJSON($strXML, $strTagOpen);
		return $objTag->arrTag;
		}
	}
?>