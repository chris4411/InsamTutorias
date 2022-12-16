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
                               <li class="breadcrumb-item"><a href="#" onclick="return false;">Vendeur</a></li>
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

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                           <div class="">
                               <a href="{{ route('vendeur_create') }}" class="btn btn-success waves-effect waves-light">
                                    <i class="mdi mdi-plus me-2"></i>
                                    Ajouter un vendeur
                               </a>
                           </div>


                           <div class="table-responsive mt-3">
                               <table
                                   class="table table-centered table-check datatable dt-responsive dt-buttons nowrap table-striped border"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                   <thead class="table-topbar text-uppercase">
                                       <tr>
                                           <th style="width: 20px;">
                                               <div class="form-check">
                                                   <input type="checkbox" class="form-check-input" id="checkAll">
                                                   <label class="form-check-label mb-0"
                                                       for="checkAll">&nbsp;</label>
                                               </div>
                                           </th>
                                           <th>Nom</th>
                                           <th>Prenom</th>
                                           <th>Email</th>
                                           <th>Status</th>
                                           <th style="width: 120px;">Action</th>
                                       </tr>
                                   </thead>
                                   <!-- end thead -->
                                   <tbody>
                                        @foreach($data['vendeurs'] as $vendeur)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customercheck1">
                                                        <label class="form-check-label mb-0"
                                                            for="customercheck1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <img class="rounded-circle h-auto avatar-xs me-2" src="{{ asset('/storage/images/profile/'.$vendeur->user->image) }}" alt="profile"/>
                                                    <span>{{ $vendeur->user->last_name }}</span>
                                                    {{-- <span>{{ $vendeur->user->user->role }}</span> --}}
                                                </td>

                                                <td>{{ $vendeur->user->first_name }}</td>
                                                <td>{{ $vendeur->user->email }}</td>


                                                <td>{{ $vendeur->status }}</td>

                                                <td id="tooltip-container1">
                                                    <a href="{{ route('vendeur_edite', $vendeur->id) }}" class="me-3 text-primary"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i>
                                                    </a>
                                                    <a href="{{ route('vendeur_show', $vendeur->id) }}" class="me-3 text-success"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i>
                                                    </a>
                                                    <a href="{{ route('vendeur_delete', $vendeur->id) }}" class="text-danger delete-confirm"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete">
                                                        <i class="mdi mdi-trash-can font-size-18"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                   </tbody>
                                   <!-- end tbody -->
                               </table>
                               <!-- end table -->
                           </div>
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
