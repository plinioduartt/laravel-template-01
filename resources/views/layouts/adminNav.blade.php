<nav class="side-menu">
    <ul class="user-menu">
        <li>
            <a><img src="images/default-user.jpg">{{ Auth::user()->name }}<i class="material-icons">keyboard_arrow_down</i></a>
        </li>
    </ul>
    <ul class="menu">
        <li>
            <a href="#!"><i class="material-icons">home</i>Dashboard</a>
        </li>
        
        <li class="has-dropdown">
            <a class="open-dropdown" href="#!"><i class="material-icons">person</i>Usuários</a>
            <ul class="sub-menu">
                <li><a href="#!">Administradores</a></li>
                <li><a href="#!">Clientes</a></li>
            </ul>
        </li>

        <li>
            <a href="#!"><i class="material-icons">insert_chart</i>Relatórios</a>
        </li>

        <li>
            <a href="#!"><i class="material-icons">library_books</i>Tabelas</a>
        </li>
        
        <li>
            <a href="#!"><i class="material-icons">settings</i>Configurações</a>
        </li>
    </ul>
</nav>