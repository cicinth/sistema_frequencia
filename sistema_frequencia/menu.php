<?php 
    $user = "Michael";
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Olá, <?php echo $user ?> </a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="lib/logout.php?logout=true"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="index.php"><i class="fa fa-home fa-fw"></i> Inicio</a>
                </li>
				<li>
                    <a href="#"><i class="fa fa-location-arrow"></i> Locais <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="novo-local.php"><i class="fa fa-plus fa-fw"></i>Cadastrar Novo Local</a>
						</li>
						<li>
							<a href="categorias.php"><i class="fa fa-th-list fa-fw"></i>Visualizar Locais</a>
						</li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa  fa-graduation-cap  "></i> Instrutores<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="novo-instrutor.php"><i class="fa fa-plus fa-fw"></i> Cadastrar Novo Instrutor</a>
						</li>
						<li>
							<a href="categoria-imagens.php"><i class="fa fa-th-list fa-fw"></i> Visualizar Instrutores</a>
						</li>
                    </ul>
                </li> 
				<li>
                    <a href="#"><i class="fa fa-book"></i>Oficinas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="nova-oficina.php"><i class="fa fa-plus fa-fw"></i>Cadastrar Nova Oficina</a>
						</li>
						<li>
							<a href="videos-home.php"><i class="fa fa-th-list fa-fw"></i>Visualizar Oficinas</a>
						</li>
                    </ul>
                </li>
				<li>
                    <a href="#"><i class="fa fa-group "></i> Turmas <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="nova-turma.php"><i class="fa fa-plus fa-fw"></i>Cadastrar Nova Turma</a>
						</li>
						<li>
							<a href="categoria-videos.php"><i class="fa fa-th-list fa-fw"></i> Visualizar Turmas</a>
						</li>
                    </ul>
                </li>
				<li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> Frequência <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="lanca-frequencia.php"><i class="fa fa-plus fa-fw"></i>Lançar Nova Frequência</a>
						</li>
						<li>
							<a href="relatorio-frequencia.php"><i class="fa fa-list-alt fa-fw"></i>Gerar relatório</a>
						</li>
                    </ul>
                </li>
				<li>
                    <a href="#"><i class="glyphicon glyphicon-fullscreen"></i> Vagas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
							<a href="nova-vaga.php"><i class="fa fa-plus fa-fw"></i>Disponibilizar Vagas</a>
						</li> 
                        <li>
							<a href="categoria-videos.php"><i class="fa fa-th-list fa-fw"></i> Visualizar Vagas</a>
						</li>
                    </ul>
                </li>
			
            </ul>
        </div>
    </div>
</nav>
