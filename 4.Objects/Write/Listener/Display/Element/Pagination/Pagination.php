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
class Pagination
	{
	public $arr	=array();
	public function __construct($_objKIIM, $objEDRO)
		{
		/*echo '<pre>';
		print_r($objEDRO->arrEvent);
		echo '</pre>';*/
		//exit;
		//$objEDRO->arrEvent['arrParams']['int0PlayingStationNum'];
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		/*echo*/$int0PlayingStationNum		=$objEDRO->arrEvent['arrParams']['int0PlayingStationNum'];
		/*echo*/$int1PlayingStationNum		=($int0PlayingStationNum+1);
		/*echo*/$int0Page	=($objEDRO->arrEvent['arrParams']['int0Page']); //0,1,xxx
		/*echo*/$int1OnPage	=$objEDRO->arrEvent['arrParams']['int1OnPage']; //1-> 8 = 8
		/*echo*/$int0Start	=0+($int0Page*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
		/*echo*/$int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
		/*echo*/$int0Untill	=($int1Untill-1);
			if($objEDRO->arrObjects['ч0РасположениеTotal'])
				{
		/*echo*/	if($objEDRO->arrObjects['ч0РасположениеTotal']===0)
					{
					$int1Total	=1; //Channge in par
					$int0Total	=0;
					}
				else
					{
					$int1Total	=($objEDRO->arrObjects['ч0РасположениеTotal']+1); //Channge in par
					$int0Total	=($int1Total-1);
					}
				}
			else
				{
				$objTotal	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположениеTotal']); //0-lastone
				if($objTotal===0)
					{
					$int1Total	=1; //Channge in par
					$int0Total	=0;
					}
				else
					{
		/*echo*/		$int1Total	=($objTotal->total+1); //Channge in par
					$int0Total	=($int1Total-1);
					}    
				}

		unset($objTotal);
		/*echo*/$int1Pages	=intRoundUp(($int1Total)/$int1OnPage);//totall is not from 0, to find we need to convert ;
		$int0Pages		=($int1Pages-1);
		if($int0Page>$int0Pages)
			{
			$objEDRO->arrEvent['arrParams']['int0Page']	=$int0Pages;
			$int0Page					=$int0Pages;
			/*echo*/ $int0Start	=0+($int0Pages*$int1OnPage);//From 0 to 7 intStart=8 ->15 intStart=16;
			/*echo*/ $int1Untill	=($int0Start+$int1OnPage);//From 0 to 7 including 7 = 8
			}
		else
			{
			//$int0Page					=($int1Page-1);
			}
		if($int0Total<$int0Untill)
			{
			$int0Untill=$int0Total;
			}
		else
			{
			//$int0Untill=($int1Untill-1);
			}
		if($int0Total<$int0Start)
			{
			$int0Start	=($int1OnPage*$int0Page);
			}
		/*if($int0PlayingStationNum>=0)
			{
			$int0Page	=round(($int1PlayingStationNum/$int1OnPage), 0);
			}
		else
			{
			$int0Page	=round((($int0Start+1)/$int1OnPage), 0);
			}*/
		$arrReturn['int0Start']		=$int0Start;
		$arrReturn['int0Page']		=$int0Page;
		$arrReturn['int0Pages']		=$int0Pages;
		$arrReturn['int1OnPage']	=$int1OnPage;
		$arrReturn['int0Untill']	=$int0Untill;
		$arrReturn['int0Total']		=($int1Total-1);

		$this->arr			=$arrReturn;
		}

	public static function arr($_objKIIM, $objEDRO)
		{
		$objPagination		=new Pagination($_objKIIM, $objEDRO);
		return $objPagination->arr;
		}
	}
?>