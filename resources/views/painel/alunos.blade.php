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
                        <a href="{{ url('painel/cadastro/aluno') }}" class="btn btn-gradient-info btn-rounded btn-fw">Cadatrar aluno</a>
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
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>MA201801</td>
                                        <td>
                                            <img src="{{ url('assets/dashboard/images/faces/face29.jpg') }}" class="mr-2" alt="image">
                                            Leandro Tavares
                                        </td>
                                        <td>01/11/2019</td>
                                        <td><label class="badge badge-gradient-danger">Pendente</label></td>
                                    </tr>
                                    <tr>
                                        <td>MA201801</td>
                                        <td>
                                            <img src="{{ url('assets/dashboard/images/faces/face29.jpg') }}" class="mr-2" alt="image">
                                            Leandro Tavares
                                        </td>
                                        <td>01/11/2019</td>
                                        <td><label class="badge badge-gradient-danger">Pendente</label></td>
                                    </tr>
                                    <tr>
                                        <td>MA201801</td>
                                        <td>
                                            <img src="{{ url('assets/dashboard/images/faces/face29.jpg') }}" class="mr-2" alt="image">
                                            Leandro Tavares
                                        </td>
                                        <td>01/11/2019</td>
                                        <td><label class="badge badge-gradient-success">Regular</label></td>
                                    </tr>
                                    <tr>
                                        <td>MA201801</td>
                                        <td>
                                            <img src="{{ url('assets/dashboard/images/faces/face29.jpg') }}" class="mr-2" alt="image">
                                            Leandro Tavares
                                        </td>
                                        <td>01/11/2019</td>
                                        <td><label class="badge badge-gradient-success">Regular</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('painel.footer')