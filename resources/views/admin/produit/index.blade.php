<<<<<<< HEAD
@extends('layout.mainlayout')
@section('content')
=======
@extends('layout-admin.mainlayout')
    @section('content')
>>>>>>> 3364bd0f010929c9ded82a99de706b6be8bb1f23
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Produits</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                <li class="breadcrumb-item active">Produits</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @foreach ($data['produits'] as $produit)
                    <div class="col-xl-4.5 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="avatar-sm me-4">
                                        @if ($produit->image)
                                            <img src="{{ asset('/storage/images/produit/' . $produit->image) }}"
                                                alt="img-{{ $produit->id }}" class="avatar-sm mt-2 mb-4">
                                        @else
                                            <span
                                                class="avatar-title bg-soft-primary text-primary font-size-16 rounded-circle">
                                                {{ substr($produit->name, 0, 1) }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="flex-1 align-self-center">
                                        <div class="pb-1">
                                            <h5 class="text-truncate font-size-16 mb-1"><a href="#"
                                                    class="text-dark">{{ $produit->name }}</a></h5>
                                            {{-- <p class="text-muted mb-0">
                                                <i class="mdi mdi-account me-1"></i> Clifton Taylor
                                            </p> --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="mt-3 border-end">
                                                    <p class="text-muted mb-2">Stock</p>
                                                    <h5 class="font-size-16 mb-0">{{ $produit->stock }}</h5>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-3">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Categorie</p>
                                                    <h5 class="font-size-16 mb-0">{{ $produit->categorie }}</h5>
                                                </div>
                                            </div>
                                            <!-- end col -->

                                            <div class="col-4">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Genre</p>
                                                    <h5 class="font-size-16 mb-0">{{ $produit->genre }}</h5>
                                                </div>
                                            </div>
                                            <!-- end col -->


                                            <div class="col-3">
                                                <div class="mt-3">
                                                    <p class="text-muted mb-2">Action</p>
                                                    {{-- <h5 class="font-size-16 mb-0">Editer</h5>
                                                    <h5 class="font-size-16 mb-0">Supprimer</h5> --}}
                                                    <a href="{{ route('produit_edite', $produit->id) }}"
                                                        class="me-3 text-primary" data-bs-container="#tooltip-container1"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                            class="mdi mdi-pencil font-size-18"></i>
                                                    </a>

                                                    <a href="{{ route('produit_delete', $produit->id) }}"
                                                        class="text-danger delete-confirm"
                                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Delete">
                                                        <i class="mdi mdi-trash-can font-size-18"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>

                                        <div class="pb-1">
                                            <p class="text-muted mb-2">Description</p>

                                            <p class="font-size-16 mb-0">
                                                {{ $produit->description }}
                                            </p>
                                        </div>


                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end  -->
                            </div>
                            <!-- end cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                @endforeach
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center my-3">
                        <a href="javascript:void(0);" class="text-primary"><i
                                class="mdi mdi-loading mdi-spin font-size-20 align-middle me-2"></i> Load more </a>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
