@extends('auth.layout.main')
    @section('content')
        <div class="home-btn d-none d-sm-block">
            <a href="index-2.html"></a>
        </div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index-2.html" class="">
                                            <img src="assets/images/logo-dark.png" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                            <img src="assets/images/logo-light.png" alt="" height="22" class="auth-logo logo-light mx-auto">
                                        </a>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h4 class="font-size-18 text-muted mt-2 text-center mb-4">Reset Password</h4>
                                    <div class="alert alert-info" role="alert">
                                        Enter your Email and instructions will be sent to you!
                                    </div>

                                    @if ($message = Session::get('status'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    <form class="form-horizontal" method="POST" action="{{ route('send.email') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email">
                                        </div>

                                        <div class="mb-3 row mt-4">
                                            <div class="col-12 text-end">
                                                <button type="submit" class="btn btn-primary w-100 waves-effect waves-light">Restorer le mot de passe</button>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-center plan-line">
                                                    ou s'inscrire
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <div class="row mt-3">

                                            <div class="button-list btn-social-icon text-center">
                                                <button type="button" class="btn btn-facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </button>

                                                <button type="button" class="btn btn-twitter ms-1">
                                                    <i class="fab fa-twitter"></i>
                                                </button>

                                                <button type="button" class="btn btn-linkedin  ms-1">
                                                    <i class="fab fa-linkedin"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                    </form>

                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>Vous vous rappeler ? <a href="{{ route('login') }}" class="fw-bold text-primary"> Connectez-vous ici ! </a> </p>
                            <p>©
                                <script>document.write(new Date().getFullYear())</script> Upbond. Crafted with <i
                                    class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
