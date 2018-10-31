<!DOCTYPE html>
<html>
<?php 
ini_set("display_error", false);
error_reporting(0);
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$servidor = 'localhost';
$usuario = 'root';
$senha = 'vertrigo';
$banco = 'horta';
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
$con = mysql_pconnect($servidor, $usuario, $senha) or trigger_error(mysql_error(),E_USER_ERROR);
// Executa uma consulta que pega cinco notícias
$sql = "SELECT * FROM hortas where id = '{$id}'";
$query = $mysqli->query($sql);
$dados = $query->fetch_array();

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Horta #<?php echo $dados['id']; ?> | Horta Helper</title>
    <!-- Favicon-->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	
<?php
// A sessão precisa ser iniciada em cada página diferente
if(!isset($_SESSION)) session_start();
// Verifica se não há a variável da sessão que identifica o usuário
if(!isset($_SESSION['UsuarioID'])) {
  // Destrói a sessão por segurança
  session_destroy();
  // Redireciona o visitante de volta pro login
  header("Location: login.php"); exit;
}
?>
	
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <?php include('templates/pageloader.php');?>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <?php include('templates/topbar.php');?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
          <?php include('templates/menu.php');?>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BASE DE DADOS</h2>
            </div>
<?php include('DB.SEARCH.HORTADB.php');?>
            <!-- Multiple Items To Be Open -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <?php $buscaplanta = sprintf("SELECT * FROM plantas where id = '{$dados['idplanta']}'");
										          $dadosplantas = mysql_query($buscaplanta, $con) or die(mysql_error());
												  $linhap = mysql_fetch_assoc($dadosplantas);
												   echo $linhap['nome']?> - Regar a cada <b><?php echo $linhap['regagem'];?></b> dias | Última Rega: <?php echo date('d/m/Y H:i:s', strtotime($dados['regagem']));?>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
								<div class="media">
                                    <div class="media-left">
                                            <img class="media-object" src="images/plantas/<?php echo $linhap['nome']; ?>/1.jpg" width="222" height="222">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?php echo $linha['nome']; ?> - <?php echo $linha['nomec']; ?></h4>
                                        <h5>Comentários Sobre a Horta:</h5>
										<p>
                                            <?php echo $dados['notas']; ?>
                                        </p>
										<br>
										<br>
										<hr>
										<h5>Instruções de cultivo:</h5>
                                        <p>
                                            <?php echo $linha['instrucao']; ?>
                                        </p>
                                    </div>
                                </div>
								<h4>TEMPO ATÉ DAR FRUTOS <small>Tempo Estimado</small></h4>
<?php
$data_inicial = $dados['insercao'];
$data_final = date("Y/m/d");

// Calcula a diferença em segundos entre as datas
$diferenca = strtotime($data_final) - strtotime($data_inicial);

//Calcula a diferença em dias
$dias = floor($diferenca / (60 * 60 * 24));

$porcento = ($dias * 100) / $linha['tempofruto'];
?>
<p style="margin-left:96%;"><?php echo $dias?>/<?php echo $linha['tempofruto'];?></p>
								<div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $porcento;?>" aria-valuemin="1" aria-valuemax="100" style="width: <?php echo $porcento;?>%;">
                                    <span class="sr-only"><?php echo $porcento;?>% Completo</span>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multiple Items To Be Open -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>