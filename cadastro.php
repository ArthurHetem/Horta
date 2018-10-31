<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastro | Horta Helper</title>
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

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="signup-page ls-closed" cz-shortcut-listen="true">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Horta<b>Helper</b></a>
            <small>O Ajudante virtual da sua Horta.</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" novalidate="novalidate" action="cadastra.php">
                    <div class="msg">Registrar novo usuário</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person_outline</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nome" placeholder="Nome e Sobrenome" required="" autofocus="" aria-required="true">
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário" required="" autofocus="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Endereço de Email" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="senha" minlength="6" placeholder="Senha" required="" aria-required="true">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirme a Senha" required="" aria-required="true">
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-green waves-effect" type="submit">CADASTRAR-SE</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="login.php">Você já possui uma conta?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>


</body>

</html>