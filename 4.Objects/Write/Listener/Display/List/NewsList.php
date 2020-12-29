<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Design/Destination/Doing
 //     Jl   	[R] Reality/Role
////// 2020	[O] Objects
/*array(
	CopyrightSign'=>array(
		'strType'=>'dir/',
	);
);*/

// Usage:
//	$objFileList=new FileList($objKIIM, array('_strEnterDir'=>'/home/...','_strSort'=>'type/name'));
//
class NewsList extends Reality
	{
	// $public	$strHtml;
	//public		$arr		=array();

	public $strName;
	public $strDir;
	public $strFullPath;
	public $strSort;
	public $strSetupFile;
	//private $bIsUpperDir=false;

	public function __construct($_objKIIM, $_strAction='default', $_arrData=array())
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>$this, '_intShowTempo'=>'1000' ));

		global $arrTypes;
		print_r($arrTypes);
		
		// 1.CreateProcessPath;
		// 2.GetProcessSetup ->  2FilterProcessSetupInEDRO
		// 		ProcessSetup=EventDesignReality
		// 3.BuildObject
		//
		//
		/////////////////////////////////////////////////////////////////
		$this->strDir		=$_arrData['_strDir'];
		$this->strName		=$_arrData['_strName'];
		$this->strSort		=$_arrData['_strSort'];

		parent::__construct($objKIIM);

		//$objFileListRead=new FileListRead($objKIIM, $this->strFullPath);
		//print_r($objFileListRead);

	//	print_r($this);

	//	exit(0);
		//$objInfo	=new ReadFileInfo($_objKIIM, 'default', $_arrData);
		//print_r($objInfo);
		//print_r($objInfo->arr);
		/*
		exit(0);
		$this['arrReality']=$objInfo->arr;
		print_r($this);
		parent::__construct($objKIIM, $_arrData);


		$this->strDir 		=$_arrData['_strDir'];


		$this->strSort		=$_arrData['_strSort'];



		$this->bIsUpperDir	=false;

		if(empty($this->strEnterDir))
			{
			$this->strEnterDir	=$this->strBaseDir;
			$this->bIsUpperDir	=true;
			}


		foreach($this->arr as $strFile)
			{
			$arrFile['_strDir']	=$this->strEnterDir;
			$arrFile['_strName']	=$strFile;
			$objFile		=EDRO('File', $arrFile['_strName'], $arrFile);
			}

		$this->_GetFolder($objKIIM);
		$this->_Sort($objKIIM);
		$this->_ProcessElements($objKIIM);
		//$this->strHTML;
		*/
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	/*
	public static function _Html($_objKIIM, $_arr=array('_strEnterDir'=> '', '_strSort'=>'Type'))
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$objFileList=new FileList($objKIIM, $_arr);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	*/
	}
?>