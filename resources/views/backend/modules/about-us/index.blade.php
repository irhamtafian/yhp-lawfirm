@extends('backend.layouts.base')
@section('title', 'About Us | Admin')

@section('content')

<div class="page-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-10  d-flex justify-content-lg-start justify-content-center">
							<div class="page-breadcrumb d-flex d-sm-flex align-items-center mb-2">
								<div class="breadcrumb-title pe-3">About Us</div>
								<div class="ps-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">About Us</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	{{-- <h6 class="mb-0 text-uppercase">Carousels</h6>
	<hr/> --}}

	<div class="card">
		<div class="card-body">
			@if (session('success'))
			<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 text-white"><i class='bx bxs-check-circle'></i></div>
					<div class="ms-3">
						<h6 class="mb-0 text-white">Success</h6>
						<div class="text-white">{{ session('success') }}</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif
			@if (session('warning'))
			<div class="alert alert-info border-0 bg-info alert-dismissible fade show py-2">
				<div class="d-flex align-items-center">
					<div class="font-35 text-dark"><i class='bx bxs-info-circle'></i>
					</div>
					<div class="ms-3">
						<h6 class="mb-0 text-dark">Info</h6>
						<div class="text-dark">{{ session('warning') }}</div>
					</div>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			@endif
			<ul class="list-unstyled">
				@foreach($aboutUs as $about)
					<li class="align-items-center {{ $loop->last ? '' : 'border-bottom pb-2' }}">
						<div class="row g-0">
							<div class="d-flex align-items-center my-3">
								<h5 class="mb-1">About Us {{ $loop->iteration }}</h5>
								<div class="dropdown ms-auto">
									<a href="{{ route('about-us.edit', $about->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
								</div>
							</div>
							<div class="col-md-2">
								<div style="padding-right: 16px">
									<div class="mb-3">
										<label for="name" class="form-label fw-bold">Image</label>
										<img src="{{ asset('storage/' . $about->image) }}" class="img-fluid border" width="100%" height="200" alt="...">
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="">
									<div class="mb-3">
										<label for="name" class="form-label fw-bold">Title</label>
										<p class="form-control-static">{{ $about->title }}</p>
									</div>
									<div class="mb-3">
										<label for="productDescription" class="form-label fw-bold">Description</label>
										<p class="form-control-static">{{ $about->description }}</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</div>

	
	
</div>

@endsection