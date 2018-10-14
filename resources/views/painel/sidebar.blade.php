<div class="container-fluid page-body-wrapper">
    
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <a href="#" class="nav-link">
                    <div class="nav-profile-image">
                        <img src="{{ url('assets/dashboard/images/faces/face29.jpg') }}" alt="profile">
                        <span class="login-status online"></span> <!--change to offline or busy as needed-->              
                    </div>
                    <div class="nav-profile-text d-flex flex-column">
                        <span class="font-weight-bold mb-2">Leandro Tavares</span>
                        <span class="text-secondary text-small">Administrador</span>
                    </div>
                    <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/painel') }}">
                    <span class="menu-title">Meu painel</span>
                    <i class="mdi mdi-bulletin-board menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/painel/alunos/') }}">
                    <span class="menu-title">Alunos</span>
                    <i class="mdi mdi-run menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title">Planilhas de treino</span>
                    <i class="mdi mdi-table-large menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title">Calendário de corridas</span>
                    <i class="mdi mdi-calendar-clock menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span class="menu-title">Pagamentos</span>
                    <i class="mdi mdi-cash-usd menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-title">Cadastros</span>
                    <!-- <i class="menu-arrow"></i> -->
                    <i class="mdi mdi-table-edit menu-icon"></i>
                </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/painel/cadastro/aluno') }}">Cadastrar aluno</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ url('/painel/cadastro/planilha') }}">Cadastrar planilha</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>