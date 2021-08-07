<?php                /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
class оПрочитать
	{
	private $E	= array(
				
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',
				'strPort'		=> 81,
				'intReadBlockSize'	=> 512,
				'сРасположение'		=> '',
			);
	private $R	= array(
				'lnSOCK'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'strReadedBlock'	=> '',
			);
	public $O	= array(
			);
	public function __construct($_D=array())
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->D['сРасположение'] 	= $_D['сРасположение'];
					$this->_memoryPrepare();
					$this->_connectRemote();
					$this->_writeRemote();
					$this->_readRemoteReport();
					$this->_processObjects();
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		print_r($this);
		}
	private function _memoryPrepare()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['lnSOCK']		= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _connectRemote()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['bIzSocket'] 		= socket_connect($this->R['lnSOCK'], $this->D['strAddr'], $this->D['intPort']);
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _writeRemote()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['intWritedBytes']	= socket_write($this->R['lnSOCK'], $this->O['сРасположение'], strlen($this->O['сРасположение']));
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _readRemoteReport()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['strReadedBlock']    	= socket_read($this->R['lnSOCK'], $this->D['intReadBlockSize']);
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _processObjects()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->O		= array();
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	}
?>