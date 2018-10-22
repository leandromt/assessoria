@include('painel.header')
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

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

            
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <!-- <h4 class="card-title">Cadastrar novo aluno</h4> -->
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
                                        <label class="col-sm-3 col-form-label">Nome<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nome" class="form-control" value="{{ old('nome') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Apelido</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="apelido" class="form-control" value="{{ old('apelido') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Data de nascimento<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="date" name="nascimento" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('nascimento') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sexo<span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <div class="form-check form-check-info">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexo" id="sexoM" value="M" @if ( old('sexo') == 'M' ) {{ 'checked' }} @endif>
                                                    Masculino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-check form-check-primary">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexo" id="sexoF" value="F" @if ( old('sexo') == 'F' ) {{ 'checked' }} @endif>
                                                    Feminino
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">CPF<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="cpf" class="form-control" value="{{ old('cpf') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Email<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <p class="card-description">Informações de contato</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone 1</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fone1" class="form-control" value="{{ old('fone1') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone 2</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fone2" class="form-control" value="{{ old('fone2') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Contato de urgência</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nome_urgencia" class="form-control" value="{{ old('nome_urgencia') }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Telefone de urgência</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fone_urgencia" class="form-control" value="{{ old('fone_urgencia') }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <hr>
                            <p class="card-description">Informações para assessoria</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <div class="form-check form-check-success">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status" id="status1" value="1" checked>
                                                    Ativo
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-check form-check-danger">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="status" id="status0" value="0">
                                                    Inativo
                                                </label>
                                            </div>
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
                                        <label class="col-sm-3 col-form-label">Situação</label>
                                        <div class="col-sm-4">
                                            <div class="form-check form-check-success">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="situacao" id="regular1" value="1" checked>
                                                    Regular
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-check form-check-danger">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="situacao" id="regular0" value="0">
                                                    Pendente
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Dia do vencimento<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="vencimento">
                                                <option value="" @if ( old('vencimento') == '' ) {{ 'selected' }} @endif></option>
                                                <option value="1" @if ( old('vencimento') == '1' ) {{ 'selected' }} @endif>01/mês</option>
                                                <option value="2" @if ( old('vencimento') == '2' ) {{ 'selected' }} @endif>02/mês</option>
                                                <option value="3" @if ( old('vencimento') == '3' ) {{ 'selected' }} @endif>03/mês</option>
                                                <option value="4" @if ( old('vencimento') == '4' ) {{ 'selected' }} @endif>04/mês</option>
                                                <option value="5" @if ( old('vencimento') == '5' ) {{ 'selected' }} @endif>05/mês</option>
                                                <option value="6" @if ( old('vencimento') == '6' ) {{ 'selected' }} @endif>06/mês</option>
                                                <option value="7" @if ( old('vencimento') == '7' ) {{ 'selected' }} @endif>07/mês</option>
                                                <option value="8" @if ( old('vencimento') == '8' ) {{ 'selected' }} @endif>08/mês</option>
                                                <option value="9" @if ( old('vencimento') == '9' ) {{ 'selected' }} @endif>09/mês</option>
                                                <option value="10" @if ( old('vencimento') == '10' ) {{ 'selected' }} @endif>10/mês</option>
                                                <option value="11" @if ( old('vencimento') == '11' ) {{ 'selected' }} @endif>11/mês</option>
                                                <option value="12" @if ( old('vencimento') == '12' ) {{ 'selected' }} @endif>12/mês</option>
                                                <option value="13" @if ( old('vencimento') == '13' ) {{ 'selected' }} @endif>13/mês</option>
                                                <option value="14" @if ( old('vencimento') == '14' ) {{ 'selected' }} @endif>14/mês</option>
                                                <option value="15" @if ( old('vencimento') == '15' ) {{ 'selected' }} @endif>15/mês</option>
                                                <option value="16" @if ( old('vencimento') == '16' ) {{ 'selected' }} @endif>16/mês</option>
                                                <option value="17" @if ( old('vencimento') == '17' ) {{ 'selected' }} @endif>17/mês</option>
                                                <option value="18" @if ( old('vencimento') == '18' ) {{ 'selected' }} @endif>18/mês</option>
                                                <option value="19" @if ( old('vencimento') == '19' ) {{ 'selected' }} @endif>19/mês</option>
                                                <option value="20" @if ( old('vencimento') == '20' ) {{ 'selected' }} @endif>20/mês</option>
                                                <option value="21" @if ( old('vencimento') == '21' ) {{ 'selected' }} @endif>21/mês</option>
                                                <option value="22" @if ( old('vencimento') == '22' ) {{ 'selected' }} @endif>22/mês</option>
                                                <option value="23" @if ( old('vencimento') == '23' ) {{ 'selected' }} @endif>23/mês</option>
                                                <option value="24" @if ( old('vencimento') == '24' ) {{ 'selected' }} @endif>24/mês</option>
                                                <option value="25" @if ( old('vencimento') == '25' ) {{ 'selected' }} @endif>25/mês</option>
                                                <option value="26" @if ( old('vencimento') == '26' ) {{ 'selected' }} @endif>26/mês</option>
                                                <option value="27" @if ( old('vencimento') == '27' ) {{ 'selected' }} @endif>27/mês</option>
                                                <option value="28" @if ( old('vencimento') == '28' ) {{ 'selected' }} @endif>28/mês</option>
                                                <option value="29" @if ( old('vencimento') == '29' ) {{ 'selected' }} @endif>29/mês</option>
                                                <option value="30" @if ( old('vencimento') == '30' ) {{ 'selected' }} @endif>30/mês</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="btns-group-right">
                                <button type="submit" class="btn btn-gradient-info mr-2">Salvar</button>
                                <a href="{{ url('painel/alunos') }}" class="btn btn-gradient-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END FORM TWO COLUMN -->


    </div>

    @include('painel.footer')