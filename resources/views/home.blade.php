@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Human Diseases Encyclopedia</h2>
        <p class="text-muted">Discover information about various human diseases, their symptoms, and treatments.</p>
    </div>
    
        <div class="row mb-4">
        <div class="col-md-6">
            <form action="" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control" placeholder="Search diseases..." value="">
                <button type="submit" class="btn btn-primary ms-2"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="" method="GET" class="d-flex justify-content-end">
                <select name="category" class="form-select w-50" onchange="this.form.submit()">
                    <option value="">All Categories</option>
                    <option value="Category 1">Category 1</option>
                    <option value="Category 2">Category 2</option>
                    <option value="Category 3">Category 3</option>
                </select>
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
        @for ($i = 0; $i < 5; $i++) <!-- Example loop for cards -->
        <div class="col">
            <div class="card h-100">
                <img src="https://img.freepik.com/free-photo/side-view-smiley-couple-indoors_23-2149903726.jpg?t=st=1733493963~exp=1733497563~hmac=2b947156bd11c5bb6a2ff931ab829a24929ea6bce6f2e5d69a0b762f8d963fbc&w=1380" class="card-img-top" alt="Disease image">
                <div class="card-body">
                    <h5 class="card-title">Masuk Angin</h5>
                    <span class="" style="color: rgb(27, 47, 136)">
                        category
                    </span>
                    <p class="card-text text-muted">
                        Brief description of the disease goes here. It can include symptoms, causes, and treatments.
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i> Learn More</a>
                </div>
            </div>
        </div>
        @endfor
    </div>

    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
