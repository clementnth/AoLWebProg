@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Disease: Placeholder Disease Name</h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Category: Viral</span>
        </p>
    </div>

    <div class="row">
        <div class="col-md-5">
            <img src="https://via.placeholder.com/600x400?text=Disease+Image" 
                 alt="Disease Image" 
                 class="img-fluid rounded" 
                 style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        </div>

        <!-- Disease Details -->
        <div class="col-md-7">
            <h4 class="fw-bold">Overview</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel sapien quis libero auctor facilisis.</p>

            <h4 class="fw-bold mt-4">Symptoms</h4>
            <ul>
                <li>Symptom 1</li>
                <li>Symptom 2</li>
                <li>Symptom 3</li>
            </ul>

            <h4 class="fw-bold mt-4">Causes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer feugiat neque non lorem pulvinar.</p>

            <h4 class="fw-bold mt-4">Treatment</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vel sapien quis libero auctor facilisis.</p>

            <a href="#" class="btn btn-primary mt-3"><i class="fas fa-arrow-left"></i> Back to Category</a>
        </div>
    </div>

    <div class="mt-5">
        <h4 class="fw-bold">Other Diseases in This Category</h4>
        <div class="d-flex overflow-auto mt-3" style="gap: 1rem; padding-bottom: 1rem;">
            @foreach ([ 
                ['name' => 'Other Disease 1', 'image' => 'https://via.placeholder.com/200x150?text=Disease+1'], 
                ['name' => 'Other Disease 2', 'image' => 'https://via.placeholder.com/200x150?text=Disease+2'], 
                ['name' => 'Other Disease 3', 'image' => 'https://via.placeholder.com/200x150?text=Disease+3'], 
                ['name' => 'Other Disease 4', 'image' => 'https://via.placeholder.com/200x150?text=Disease+4'], 
                ['name' => 'Other Disease 5', 'image' => 'https://via.placeholder.com/200x150?text=Disease+5'], 
            ] as $disease)
                <div class="card flex-shrink-0" style="width: 12rem;">
                    <!-- Disease Image -->
                    <img src="{{ $disease['image'] }}" 
                         class="card-img-top" 
                         alt="{{ $disease['name'] }}"
                         style="height: 150px; object-fit: cover; border-radius: 8px;">
                    
                    <!-- Card Content -->
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">{{ $disease['name'] }}</h6>
                        <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
