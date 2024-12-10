@extends('layout')

@section('content')
<div class="container">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Add New Disease</h2>
        <p>
            <span class="badge bg-info text-dark fs-5 py-2 px-3">Admin Panel</span>
        </p>
    </div>

    <form onsubmit="return confirm('Are you sure you want to add this disease?');">
        <div class="row">
            <div class="col-md-5">
                <div class="mb-3">
                    <label for="diseaseImage" class="form-label fw-bold">Disease Image</label>
                    <input type="file" id="diseaseImage" class="form-control">
                </div>
                <img src="https://via.placeholder.com/600x400?text=Upload+Image" 
                     alt="Upload Preview" 
                     class="img-fluid rounded mt-3" 
                     style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
            </div>

            <div class="col-md-7">
                <div class="mb-3">
                    <label for="diseaseName" class="form-label fw-bold">Disease Name</label>
                    <input type="text" id="diseaseName" class="form-control" placeholder="Enter disease name" required>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label fw-bold">Category</label>
                    <select id="category" class="form-select" required>
                        <option value="" disabled selected>Choose category...</option>
                        <option value="viral">Viral</option>
                        <option value="bacterial">Bacterial</option>
                        <option value="genetic">Genetic</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="overview" class="form-label fw-bold">Overview</label>
                    <textarea id="overview" class="form-control" rows="4" placeholder="Write a brief overview" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="symptoms" class="form-label fw-bold">Symptoms</label>
                    <textarea id="symptoms" class="form-control" rows="3" placeholder="List the symptoms" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="causes" class="form-label fw-bold">Causes</label>
                    <textarea id="causes" class="form-control" rows="3" placeholder="Describe the causes" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="treatment" class="form-label fw-bold">Treatment</label>
                    <textarea id="treatment" class="form-control" rows="3" placeholder="Describe the treatment" required></textarea>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <button type="button" class="btn btn-secondary" 
                    onclick="if (confirm('Are you sure you want to cancel adding this disease?')) window.location.href = '{{ url('/admin/dashboard') }}';">
                <i class="fas fa-arrow-left"></i> Cancel
            </button>
            <button type="submit" class="btn btn-success">
                <i class="fas fa-plus"></i> Add Disease
            </button>
        </div>
    </form>
</div>
@endsection
