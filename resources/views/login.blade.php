@include('painel.header')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo login-brand-logo">
                            Assessoria<i class="mdi mdi-run text-info"></i>ADM
                        </div>
                        <h6 class="font-weight-light">
                            entrar no sistema
                        </h6>
                        <form class="pt-3">
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" type="email" />
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Senha" type="password" />
                            </div>
                            <div class="mt-3">
                                <a class="btn btn-block btn-gradient-info btn-lg font-weight-medium auth-form-btn" href="{{ route('home-painel') }}">
                                    SIGN IN
                                </a>
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <a class="auth-link text-black" href="#">
                                    esqueceu a senha?
                                </a>
                            </div>
                            <div class="text-center mt-4 font-weight-light">
                                nao tem uma conta?
                                <a class="text-info" href="register.html">
                                    Criar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
