@extends('back.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Create Course</h3>
                    <p class="text-subtitle text-muted">For user to check they list</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create course</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row match-height">
            <div class="col-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" action="{{ route('courses.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label class="mb-2">Image</label>
                                                <input type="text" class="form-control "
                                                    name="image">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label class="mb-2">Professor</label>
                                                <input type="text" class="form-control" name="professor">
                                            </div>
                                        </div>

                                        <div class="col-1">
                                            <div class="form-group">
                                                <label class="mb-2">Price</label>
                                                <input type="number" class="form-control" name="price">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label class="mb-2">Course Name</label>
                                                <input type="number" class="form-control" name="course_name">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label class="mb-2">Course description</label>
                                                <input type="number" class="form-control" name="course_description">
                                            </div>
                                        </div>
                                        <div class="col-1 mt-2 mx-auto">
                                            <button class="btn btn-primary">Ajouter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection