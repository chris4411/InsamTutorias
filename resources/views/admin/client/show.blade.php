@extends('layout-admin.mainlayout')
    @section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                       <h4 class="mb-sm-0">client</h4>

                       <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                               <li class="breadcrumb-item"><a href="{{ route('client_index') }}">client</a></li>
                               <li class="breadcrumb-item active">Detais</li>
                           </ol>
                       </div>

                   </div>
               </div>
           </div>
           <!-- end page title -->
           <div class="row">
               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-body">
                           <div class="">
                               <a  href="{{ route('client_index') }}" class="btn btn-warning waves-effect waves-light">Retour</a>
                               <a  href="{{ route('client_edite', $client->id) }}" class="btn btn-primary waves-effect waves-light">Editer</a>
                           </div>
                           <!-- sample modal content -->
                           <div>
                               <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('client_update') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Details du client(se) {{ $client->first_name }}</h5>
                                            </div>
                                            <!-- end model-header -->

                                            <div class="modal-body">
                                                <div class="text-center mb-4">
                                                    <div class="image-choose position-relative">
                                                        <img class="rounded-circle h-auto avatar-xs me-2" src="{{ asset('/storage/images/profile/'.$client->user->image) }}" alt="profile" readonly="readonly"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="first_name" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Maestros" value="{{ $client->user->first_name }}" readonly="readonly">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="user_id" value="{{ $client->user_id }}" />
                                                    <input type="hidden" name="id" value="{{ $client->id }}" />


                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="last_name" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Roslyn" value="{{ $client->user->last_name }}" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"> E-mail</label>
                                                    <input type="email" class="form-control" name="email" id="email" value="{{ $client->user->email }}" readonly="readonly">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="status_client" class="form-label"> Status</label>
                                                    <input type="text" class="form-control" name="status_client" id="status_client" value="{{ $client->status }}" readonly="readonly">
                                                </div>



                                                {{-- <div class="mb-6">
                                                    <label for="status" class="form-label">Status : {{ $client->status }}</label>
                                                </div> --}}

                                                <!-- end row -->
                                            </div>
                                            <!-- end modal-body -->

                                    </form>
                                </div>

                                   <!-- end modal-content -->
                               </div>
                               <!-- end modal-dialog-->
                           </div>
                           <!-- end model -->

                           <!-- end table - responsive -->
                       </div>
                       <!-- end cardbody -->
                   </div>
                   <!-- end card -->
               </div>
               <!-- end col -->
           </div>
           <!-- end row -->
        </div>
    </div>
    @endsection
