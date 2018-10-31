<?php
error_reporting(0);
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "horta";
$user = "root";
$pass = "vertrigo";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$plantas = sprintf("SELECT * FROM plantas");
$usuarios = sprintf("SELECT * FROM usuarios where nivel = 1");
$hortas = sprintf("SELECT * FROM hortas");
// executa a query
$dadosplantas = mysql_query($plantas, $con) or die(mysql_error());
$dadosusuarios = mysql_query($usuarios, $con) or die(mysql_error());
$dadoshortas = mysql_query($hortas, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dadosplantas);
// calcula quantos dados retornaram
$total = mysql_num_rows($dadosplantas);
$totalu = mysql_num_rows($dadosusuarios);
$totalh = mysql_num_rows($dadoshortas);
?>