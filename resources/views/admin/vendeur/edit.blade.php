@extends('layout-admin.mainlayout')
    @section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                       <h4 class="mb-sm-0">Vendeur</h4>

                       <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                               <li class="breadcrumb-item"><a href="{{ route('vendeur_index') }}">Vendeur</a></li>
                               <li class="breadcrumb-item active">Edit</li>
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
                               <a  href="{{ route('vendeur_index') }}" class="btn btn-warning waves-effect waves-light">Retour</a>
                               <a  href="{{ route('vendeur_create') }}" class="btn btn-primary waves-effect waves-light">Create</a>
                           </div>
                           <!-- sample modal content -->
                           <div>
                               <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('vendeur_update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Ajouter les details d'un vendeur</h5>
                                            </div>
                                            <!-- end model-header -->

                                            <div class="modal-body">
                                                <div class="text-center mb-4">
                                                    <div class="image-choose position-relative">
                                                        <img src="{{ asset('/storage/images/profile/'.$vendeur->user->image) }}"
                                                            class="avatar-lg p-1 rounded-circle" alt="Error">
                                                        <div class="avatar-xs position-absolute bottom-0 end-0">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                <label>
                                                                 <img class="rounded-circle h-auto avatar-xs me-2" src="{{ asset('assets-admin/images/edit-icon.png') }}">
                                                                 <input type="file" name="image" style="display:none" value="{{ $vendeur->user->image }}">
                                                               </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="first_name" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Maestros" value="{{ $vendeur->user->first_name }}" required="required">
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="user_id" value="{{ $vendeur->user_id }}" />
                                                    <input type="hidden" name="id" value="{{ $vendeur->id }}" />


                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="last_name" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Roslyn" value="{{ $vendeur->user->last_name }}" required="required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label"> E-mail</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="roslyn.maestros@gmail.com" value="{{ $vendeur->user->email }}" required="required" readonly="readonly">
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"  autocomplete="current-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="password_confirmation" class="form-label">Password Confirm</label>
                                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" autocomplete="current-password">
                                                        </div>
                                                    </div>
                                                </div>

                                                <label for="password" class="form-label">Status</label>
                                                <select class="form-select" label="Selectionner le status du client" name="status">
                                                    <option value="Nouveau" selected="selected">Nouveau</option>
                                                    <option value="Ancien">Ancien</option>
                                                    <option value="Confirme">Confirme</option>
                                                </select>

                                                <!-- end row -->
                                            </div>
                                            <!-- end modal-body -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger waves-effect"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit"
                                                    class="btn btn-success waves-effect waves-light">Save</button>
                                            </div>
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
