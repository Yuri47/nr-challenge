<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GetData extends Controller
{
    //


public function index() {
$arrayAux = [];
$arrayObject = [];
$qnt;
$url = "http://www.cnpq.br/web/guest/licitacoes";
$conteudourl = file_get_contents($url);
$arrayRetirar = array('<strong>', '</strong>', '<span>', '</span>' );

for ($i=1; $i < 10; $i++) { 
$conteudourl = str_replace($arrayRetirar, "", $conteudourl);
$inicio = explode( '<h4 class="titLicitacao">' , $conteudourl );
$fim = explode("</h4>" , $inicio[$i] );

$inicio2 = explode( '<div class="cont_licitacoes"><p>' , $conteudourl );
$fim2 = explode("</p></div>" , $inicio2[$i] );

$inicio3 = explode( '<div class="data_licitacao">' , $conteudourl );
$fim3 = explode("</div>" , $inicio3[$i] );
  

$qnt = count($inicio);
 
$arrayAux[$i] = $fim[0]."    ".$fim2[0].$fim3[0];
 
	# code...
/*
	echo "Views: ".$fim[0];
echo "<br> ".$fim2[0];
echo "<br>";
 
 
echo "<br>";
*/

}
 
//echo $inicio[1];
return view('showdata', [
	'tst'=>'func',
	'inicio' => $inicio,
	'arrayAux'=> $arrayAux,
	'arrayObject'=> $arrayObject
	]

	);


}
}