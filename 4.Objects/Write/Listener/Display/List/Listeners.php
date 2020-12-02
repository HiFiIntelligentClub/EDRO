<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Listeners
	{
	public $strHTML;
	public function __construct($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
	
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$мСлушатели	=$_мСлушатели;
		$мСлушатели5Мин	=$_мСлушатели['мСлушателиЗаПятьМинут'];
		           unset($_мСлушатели);
		$this->strHTML='
			<activeListeners 
				class="fixed V3 block scrollerY scrollerGlide  layer_5 BC2 TC2" 
				style="
					left		:0px;
					Width		:100%;
					height		:20px;
					font-size	:small;
					"
				>
				<listenersAmount
					class	="block left"
					style	="font-size:xx-small;width:70px;"
					>
					
					<listeners5mins 
						class	="TC3 BC3 block right"
						title	="Listeners in past 5 minutes."
						>5m:'.
						$мСлушатели['чСлушателиЗаПятьМинут'].
					'<listeners5mins>'.
					'<listeners24hours 
						class	="TC3 BC3 block right"
						title	="Listeners in past 24 hours."
						>24h:'.
						$мСлушатели['чСлушателиЗа24Часа'].
					'</listeners24hours>'.
					'<listenersSome 
						class	="TC3 BC3 block left"
						title	="Listeners from the last o2o clearing."
						>/T:'.
						$мСлушатели['чСлушателиВсегоЗаписей'].
					'</listenersSome>'.
					':
				</listenersAmount>
				';
		foreach($мСлушатели5Мин as $чСлушательИД=>$мСлушательПараметры)
			{
			if(!empty($мСлушательПараметры['strStyle']))
				{
				$this->strHTML.='
					<activeListener 
						class="block left BRJ BRL BC1 TC1" 
						style="
							height:20px;
							"
						>
						';
						$this->strHTML	.=Tag::strHTML($objKIIM, $мСлушательПараметры['strStyle'], $_мПоиск, 'strStyle');
				$this->strHTML.='
					</activeListener>
					';
				}
			}
		$this->strHTML.='
			</activeListeners>
			';
		$this->strHTML;
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_мСлушатели, $_мПоиск)
		{
		$о	=new Listeners($_objKIIM, $_мСлушатели, $_мПоиск);
		return $о->strHTML;
		}
	}
?>