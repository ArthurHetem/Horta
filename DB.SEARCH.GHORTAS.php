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
$hortas = sprintf("SELECT * FROM hortas where iddono = '{$_SESSION['UsuarioID']}' ");
// executa a query
$dadoshortas = mysql_query($hortas, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dadoshortas);
// calcula quantos dados retornaram
$total = mysql_num_rows($dadoshortas);
?>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
										<tr>
                                        <td><?php $buscaplanta = sprintf("SELECT * FROM plantas where id = '{$linha['idplanta']}'");
										          $dadosplantas = mysql_query($buscaplanta, $con) or die(mysql_error());
												  $linhap = mysql_fetch_assoc($dadosplantas);
												   echo $linhap['nome']?></td>
                                        <td><?php echo date('d/m/Y H:i:s', strtotime($linha['regagem']));?></td>
                                        <td><a href="horta.php?id=<?php echo $linha['id']?>" class="btn bg-green waves-effect">VER &raquo;</a></td>
                                    </tr>
										
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>