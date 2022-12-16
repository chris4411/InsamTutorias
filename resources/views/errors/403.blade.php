@extends('errors.layout.main')
@section('content')
    <div class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center my-5">
                                <h1 class="fw-bold text-error">
                                    4
                                    <img src="{{ asset('assets/img/error-img1.png') }}" alt="error-img" class="error-img">
                                    3
                                </h1>
                                <!-- <h2 class="mt-4 fw-bold">Oops !</h2> -->
                                <h3 class=" mt-4"><span class="fw-bold">Oops !</span> Vous n'avez n'avez pas les droits
                                    necessaire !</h3>
                                <div class="mt-4 text-center">
                                    <a class="btn btn-info waves-effect waves-light" href="{{ route('login') }}"><i
                                            class="mdi mdi-home-outline font-size-16 me-1"></i>Retourner a la connexion</a>

                                </div>
                            @endsection
