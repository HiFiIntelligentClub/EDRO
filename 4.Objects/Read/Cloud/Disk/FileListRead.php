<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class FileListRead
	{
	public $arrList;
	public $strHTML;
	public function __construct($_objKIIM, $_strFullPath)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'$this->strEnterDir='.$this->strEnterDir));

		$this->arrList 	=array();
		$arrFile	=scandir($_strFullPath);
		if(empty($this->arrList))
			{
			//Report::_Error($objKIIM, array(
			//		'_strClass'	=>__CLASS__,
			//		'_strFunction'	=>__FUNCTION__,
			//		'_strMessage'	=>'Error: $this->arr is empty',
			//		) 
			//	);
			}
		foreach($arrFile as $intI=>$strFile)
			{
			if($strFile!='.'
			    &&$strFile!='..'
			    &&$strFile!='.about.php'
			    &&$strFile!='.about.json'
			    &&$strFile!='.Setup.json'
			    &&$strFile!='.setup.php'
			    &&$strFile!='.Setup.php')
				{
				//echo $_strFullPath.$strFile;
				//echo 'strFile:'.$strFile;
				//echo '<br/>';
				//echo '_strFullPath.strFile'.$_strFullPath.$strFile;
				//echo '<br/>';
				/*$arr[]=objEDRO('FileListConstruct', 'HTML', array(
								'_strFile'=>$strFile,
								'_strDir'=>$_strFullPath.'/'.$strFile
								));
				*/
				
				$arr[]=new FileConstruct($objKIIM, array(
								'_strFile'=>$strFile,
								'_strDir'=>$_strFullPath.'/'.$strFile
								));
				
				}
			}
		$this->arrList	=$arr;

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>'$this->strEnterDir='.$this->strEnterDir));
		}
	}

?>