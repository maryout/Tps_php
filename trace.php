<?php

function trace($quoi)
{
	$f=fopen("../trace.log","a+");
$qui="Maryam";
$quand=date('Y-m-D H:i:s');
$ou=$_SERVER['REMOTE_ADDR']; // ici on récupère l'address ip 
$ch=$qui.'|'.$quoi.'|'.$quand.'|'.$ou;
fputs($f,$ch);
fputs($f,"\r\n");
fclose($f);
}
?>