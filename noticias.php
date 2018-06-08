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
$query = sprintf("SELECT id, titulo, imagem, descricao FROM noticias");
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
			<div class="panel panel-col-green">
                                            <div class="panel-heading" role="tab" id="heading<?=$linha['id']?>_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapse<?=$linha['id']?>_19" aria-expanded="true" aria-controls="collapse<?=$linha['id']?>_19">
		                                               <i class="material-icons">info</i><?=$linha['titulo']?>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse<?=$linha['id']?>_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?=$linha['id']?>_19">
                                                <div class="panel-body media">
												   <div class="media-left">
												      <img class="media-object" src="http://placehold.it/212x212" width="212" height="212">
												   </div>
												   <div class="media-body col-white">
                                                    <?=$linha['descricao']?>
													</div>
                                                </div>
                                            </div>
                                        </div>
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