<?php

$host = 'mysql:host=localhost;dbname=revict';
$username = 'laravel';
$password = 'root';
$options = [];

try{

	$connection = new PDO($host, $username, $password, $options);
	//echo'Conectado com Sucesso!!!';

}catch(PDOException $e){

	echo 'CONEXÃO RECUSADA ACIONE O SUPORTE'. $e;
}; 
