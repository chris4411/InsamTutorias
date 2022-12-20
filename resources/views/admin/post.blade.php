@extends('layout-admin.mainlayout')

@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Posts</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Droid</a></li>
                                <li class="breadcrumb-item active">Posts</li>
                            </ol>
                            <!-- end ol -->
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end page title -->
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4">Creer un nouveau Post</h4>
                  <form method="POST" action="" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <input type="text" class="form-control bg-transparent" placeholder="Titre du post" name="title">
                    <br>
                    <textarea name="content" class="form-control bg-transparent" placeholder="Contenu du post"></textarea>
                    <br>
                    Categorie
                    <select name="category" id="" class="form-control bg-transparent">
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                    <br>
                    Video du post : <input type="file" name="video" id="">
                    <br>
                    <br>
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-primary">Creer</button>
                  </form>
                </div>
            </div>

        </div>
        <!-- end container-fluid -->
    </div>
@endsection
<!-- End Page-content -->
