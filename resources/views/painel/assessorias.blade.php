@include('painel.header')
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">{{ $controller_name }} Cadastrados</h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('alunos.create') }}" class="btn btn-gradient-info btn-rounded btn-fw">Cadatrar {{ $controller_single_name }}</a>
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
                                        <th>Nome</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dados as $item)
                                    <tr>
                                        <td>{{ $item->nome }}</td>
                                        <td>
                                            <a href="#" title="Editar {{ $controller_single_name }}">
                                                <i class="mdi mdi-file-document icon-md text-info"></i>
                                            </a>
                                            <form class="form-destroy" method="DELETE" action="{{ route('assessorias.destroy', $item->id) }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" title="Excluir {{ $controller_single_name }}">
                                                    <i class="mdi mdi-delete icon-md text-danger"></i>
                                                </button>
                                            </form>
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