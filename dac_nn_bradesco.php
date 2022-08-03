<?php
echo dv_nn_bradesco('2','123');
function dv_nn_bradesco($carteira,$nosso_numero){
$soma=0;	
$numero=str_pad($carteira,2,"0",STR_PAD_LEFT).str_pad($nosso_numero,11,"0",STR_PAD_LEFT);

$soma+=$numero[0]*2;
$soma+=$numero[1]*7;
$soma+=$numero[2]*6;
$soma+=$numero[3]*5;
$soma+=$numero[4]*4;
$soma+=$numero[5]*3;
$soma+=$numero[6]*2;
$soma+=$numero[7]*7;
$soma+=$numero[8]*6;
$soma+=$numero[9]*5;
$soma+=$numero[10]*4;
$soma+=$numero[11]*3;
$soma+=$numero[12]*2;
$dv=11-($soma-(floor($soma/11) * 11));
if($dv == 11){
$dv ='0';
}
if($dv == 10){
$dv ='P';
}
return $dv;
}
