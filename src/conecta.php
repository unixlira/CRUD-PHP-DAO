<?php

$host = 'mysql:host=localhost;dbname=revict';
$username = 'laravel';
$password = '1q2w3e';
$options = [];

try{

	$connection = new PDO($host, $username, $password, $options);
	//echo'Conectado com Sucesso!!!';

}catch(PDOException $e){

	echo 'CONEXÃO RECUSADA ACIONE O SUPORTE'. $e;
}; 