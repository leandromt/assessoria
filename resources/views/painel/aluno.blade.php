@include('painel.header')
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Alunos</h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>alunos cadastrados
                        <i class="mdi mdi-alert-circle-outline icon-sm text-info align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Aluno - Leandro Mendes Tavares</h4>
                        <p>descrica do aluno</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('painel.footer')