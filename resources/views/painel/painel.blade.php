@include('painel.header', ['page_title' => $page_title])
@include('painel.navbar')
@include('painel.sidebar')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">{{ $section_title }}</h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>visão geral
                        <i class="mdi mdi-alert-circle-outline icon-sm text-info align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ url('assets/dashboard/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>
                        <h4 class="font-weight-normal mb-3">Alunos ativos
                            <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">305</h2>
                        <h6 class="card-text">Ver todos</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ url('assets/dashboard/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>                  
                        <h4 class="font-weight-normal mb-3">Alunos em débito
                            <i class="mdi mdi-account-multiple-minus mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">102</h2>
                        <h6 class="card-text">Valor à receber: R$ 5.150,00</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="{{ url('assets/dashboard/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image"/>                                    
                        <h4 class="font-weight-normal mb-3">Alunos em dia
                            <i class="mdi mdi-account-multiple-plus mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">200</h2>
                        <h6 class="card-text">Valor recebido: R$ 10.580,00</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Alunos com débito</h4>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    @include('painel.footer')