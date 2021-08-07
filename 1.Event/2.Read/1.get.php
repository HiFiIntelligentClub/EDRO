#!/usr/bin/php
<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
фЧитать('127.0.0.1');


function фЧитать($сРасположение)
	{
	$ф			= FALSE;
	$_strAddressFull	= '127.0.0.1';

	$lnSOCK			= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	$bIzSocket 		= socket_connect($lnSOCK, $_strAddressFull, 81);

	socket_write($lnSOCK, $сРасположение, strlen($сРасположение));
	echo(socket_read($lnSOCK, 512));

	if($lnSOCK)
		{
		echo 'socket_create: OK'."\n";
		$ф	= TRUE;
		}
	else
		{
		$ф	= FALSE;
		}
	if($bIzSocket)
		{
		echo 'socket_connect: OK'."\n";
		$ф	= TRUE;
		}
	else
		{
		$ф	= FALSE;
		}
	return $ф;
	}
?>