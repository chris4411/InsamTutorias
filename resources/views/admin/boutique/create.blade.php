@extends('layout-admin.mainlayout')
    @section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                   <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                       <h4 class="mb-sm-0">Boutique</h4>

                       <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                               <li class="breadcrumb-item"><a href="{{ route('boutique_index') }}">Boutique</a></li>
                               <li class="breadcrumb-item active">create</li>
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
                               <a  href="{{ route('boutique_index') }}" class="btn btn-warning waves-effect waves-light">Retour</a>
                           </div>
                           <!-- sample modal content -->
                           <div>
                               <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('boutique_store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                            <div class="modal-header">
                                                <h5 class="modal-title mt-0" id="myModalLabel">Ajouter les details d'une boutique</h5>
                                            </div>
                                            <!-- end model-header -->

                                            <div class="modal-body">
                                                <div class="text-center mb-4">
                                                    <div class="image-choose position-relative">
                                                        <img src="{{ asset('assets-admin/images/user-anonyme.png') }}"
                                                            class="avatar-lg p-1 rounded-circle" alt="Error">
                                                        <div class="avatar-xs position-absolute bottom-0 end-0">
                                                            <span class="avatar-title rounded-circle bg-light text-body">
                                                                <label>
                                                                 <img src="{{ asset('assets-admin/images/add-icon.png') }}" style="width: 28px;height: 30px;margin-top: 8px;">
                                                                 <input type="file" name="image" style="display:none">
                                                               </label>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="nom_boutique" class="form-label">Nom Boutique</label>
                                                            <input type="text" class="form-control" id="nom_boutique" name="nom_boutique" placeholder="Shopping Center" required="required">
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6">
                                                        <div class="mb-3">
                                                            <label for="addresse_boutique" class="form-label">Addresse</label>
                                                            <input type="text" class="form-control" name="addresse_boutique" id="addresse_boutique" placeholder="Doula Rond point Foreke" required="required">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <label for="password" class="form-label">Status</label>
                                                <select class="form-select" label="Selectionner le status du client" name="status">
                                                    <option value="Nouveau" selected="selected">Nouveau</option>
                                                    <option value="Ancien">Ancien</option>
                                                    <option value="Confirme">Confirme</option>
                                                </select> --}}

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
