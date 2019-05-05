<nav class="side-menu">
    <ul class="user-menu">
        <li class="has-dropdown">
            <a class="open-dropdown"><img src="images/default-user.jpg">{{ Auth::user()->name }}<i class="material-icons right">keyboard_arrow_down</i><i class="material-icons right disabled">keyboard_arrow_up</i></a>
            <ul class="sub-menu">
                <li><a href="#!">Editar</a></li>
                <li><a href="#!">Sair</a></li>
            </ul>
        </li>
    </ul>
    <ul class="menu">
        <li>
            <a href="#!"><i class="material-icons">home</i>Dashboard</a>
        </li>
        
        <li class="has-dropdown">
            <a class="open-dropdown" href="#!"><i class="material-icons">person</i>Usuários<i class="material-icons right">keyboard_arrow_down</i><i class="material-icons right disabled">keyboard_arrow_up</i></a>
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
        
        <li class="has-dropdown">
            <a class="open-dropdown" href="#!"><i class="material-icons">settings</i>Configurações<i class="material-icons right">keyboard_arrow_down</i><i class="material-icons right disabled">keyboard_arrow_up</i></a>
            <ul class="sub-menu">
                <li><a href="#!">Item 1</a></li>
                <li><a href="#!">Item 2</a></li>
            </ul>
        </li>
    </ul>
</nav>