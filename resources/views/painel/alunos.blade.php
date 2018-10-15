@include('painel.header')
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">Alunos Cadastrados</h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('alunos.create') }}" class="btn btn-gradient-info btn-rounded btn-fw">Cadatrar aluno</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Matrícula</th>
                                        <th>Nome</th>
                                        <th>Vencimento</th>
                                        <th>Ativo</th>
                                        <th>Status</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alunos as $aluno)
                                    <tr>
                                        <td>{{ $aluno->matricula }}</td>
                                        <td>{{ $aluno->nome }}</td>
                                        <td>01/11/2019</td>
                                        <td>
                                            @if($aluno->ativo)
                                                <label class="badge badge-gradient-success">Ativo</label></td>
                                            @else
                                                <label class="badge badge-gradient-danger">Inativo</label></td>
                                            @endif
                                        <td>
                                            @if($aluno->status)
                                                <label class="badge badge-gradient-success">Regular</label></td>
                                            @else
                                                <label class="badge badge-gradient-danger">Pendente</label></td>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="#">op1</a>
                                            <a href="#">op2</a>
                                            <a href="#">op3</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('painel.footer')