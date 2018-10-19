@include('painel.header')
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

        <!-- FORM TWO COLUMN -->
        <div class="col-12 grid-margin">
            
            

            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-info text-white mr-2">
                        <i class="mdi mdi-run"></i>                 
                    </span>
                    Cadastro de aluno
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('alunos.index') }}">Alunos</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cadastro de aluno</li>
                    </ol>
                </nav>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cadastrar novo aluno</h4>
                    @if( isset($errors) && count($errors) > 0 )
                        <ul class="list-arrow list-error">
                            @foreach( $errors->all() as $error )
                                <li class="text-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form class="form-sample" method="post" action="{{ route('alunos.store') }}">
                        <p class="card-description">Informações pessoais</p>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nome</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Matricula</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="matricula" class="form-control" value="{{ old('matricula') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Data de nascimento</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" placeholder="dd/mm/yyyy"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Categoria</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>Iniciante</option>
                                            <option>Intermediário</option>
                                            <option>Avançado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sexo</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sexo" id="sexoM" value="M" checked>
                                                Masculino
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sexo" id="sexoF" value="F">
                                                Feminino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status" id="status1" value="1" checked>
                                                Ativo
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-check form-check-info">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="status" id="status0" value="0">
                                                Inativo
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="card-description">Endereço</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Address 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Postcode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Country</label>
                                    <div class="col-sm-9">
                                        <select class="form-control">
                                            <option>America</option>
                                            <option>Italy</option>
                                            <option>Russia</option>
                                            <option>Britain</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-info mr-2">Salvar</button>
                        <a href="{{ url('painel/alunos') }}" class="btn btn-gradient-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
        <!-- END FORM TWO COLUMN -->


    </div>

    @include('painel.footer')