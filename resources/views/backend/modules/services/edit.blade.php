@extends('backend.layouts.base')
@section('title', 'Services | Admin')

@section('content')

<div class="page-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-10  d-flex justify-content-lg-start justify-content-center">
							<div class="page-breadcrumb d-flex d-sm-flex align-items-center mb-2">
								<div class="breadcrumb-title pe-3">Edit Services</div>
								<div class="ps-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
											</li>
											<li class="breadcrumb-item" aria-current="page"><a href="/admin/services">Services</a></li>
											<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
			<form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
	
				<div class="list-unstyled">
					<li class="align-items-center">
						<div class="row g-0">
							<div class="d-flex align-items-center my-3">
								<h5 class="mb-1">Edit Services {{ $service->id }}</h5>
							</div>
						</div>
					</li>
	
					<li class="align-items-center">
						<div class="row g-0">
							<div class="col-md-12">
								<div class="">
									<div class="mb-3">
										<label for="title" class="form-label fw-bold">Title</label>
										<input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}">
										<p class="text-danger">{{ $errors->first('title') }}</p>
									</div>
									<div class="mb-3">
										<label for="description" class="form-label fw-bold">Description</label>
										<textarea class="form-control" id="description" name="description" rows="4">{{ $service->description }}</textarea>
										<p class="text-danger">{{ $errors->first('description') }}</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
	
				<div class="d-flex justify-content-end mt-3">
					<a href="/admin/services" class="btn btn-secondary me-2" onclick="window.history.back();">Cancel</a>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
	
	
	
	</div>
	
	
	
</div>

@endsection