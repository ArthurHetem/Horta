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
$query = sprintf("SELECT * FROM plantas");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
										<tr>
                                        <td><?=$linha['nome']?></td>
                                        <td><?=$linha['tipo']?></td>
                                        <td><img class="media-object" src="images/plantas/<?=$linha['nome']?>/1.jpg" width="111" height="111"></td>
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