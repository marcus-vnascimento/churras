<?php 
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="dashboard.php">Churras</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="<?= ($activePage == 'dashboard') ? 'active':''; ?>"><a href="dashboard.php">Dashboard</a></li>
            <li class="<?= ($activePage == 'company') ? 'active':''; ?>"><a href="company.php">Empresas</a></li>
            <li class="<?= ($activePage == 'new-order') ? 'active':''; ?>"><a href="new-order.php">Novo Pedido</a></li>
            <li class="<?= ($activePage == 'my-account') ? 'active':''; ?>"><a href="my-account.php">Minha Conta</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </div>
</nav>