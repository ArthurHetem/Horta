<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['UsuarioNome']; ?></div>
                    <div class="email"><?php if ($_SESSION['UsuarioNivel'] > 1) { echo "Administrador";} else{ echo "Usuário Comum";}  ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Perfil</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGAÇÃO</li>
                    <li class="active">
                        <a href="index1.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">spa</i>
                            <span>Minhas Hortas</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="ghortas.php">Gerenciar Hortas</a>
                            </li>
                            <li>
                                <a href="pages/ui/breadcrumbs.html">Notificações</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="database.php">
                            <i class="material-icons">dns</i>
                            <span>Base de Dados</span>
                        </a>
                    </li>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - <?php echo date("Y"); ?> <a href="javascript:void(0);">Horta Helper</a>.
                </div>
                <div class="version">
                    <b>Versão: </b> 0.5.0A
                </div>
            </div>
            <!-- #Footer -->
        </aside>