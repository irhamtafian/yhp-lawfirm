@extends('backend.layouts.base')
@section('title', 'Home | Admin')

@section('content')

<div class="page-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-10  d-flex justify-content-lg-start justify-content-center">
							<div class="page-breadcrumb d-flex d-sm-flex align-items-center mb-2">
								<div class="breadcrumb-title pe-3">Edit Home</div>
								<div class="ps-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="/"><i class="bx bx-home-alt"></i></a>
											</li>
											<li class="breadcrumb-item" aria-current="page"><a href="/admin/home">Home</a></li>
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

	<div class="card">
		<div class="card-body">
			<form action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
	
				<div class="list-unstyled">
					<li class="align-items-center">
						<div class="row g-0">
							<div class="d-flex align-items-center my-3">
								<h5 class="mb-1">
                                    @if($home->id <= 3)
                                        Edit Carousel {{ $home->id }}
                                    @else
                                        Edit What We Do {{ $home->id - 3 }}
                                    @endif
                                </h5>
							</div>
						</div>
					</li>
	
					<li class="align-items-center">
						<div class="row g-0">
							<div class="col-md-2">
								<div style="padding-right: 16px">
									<div class="mb-3">
										<label for="name" class="form-label fw-bold">Image</label>
										<input type="file" class="form-control" name="image" id="image" accept="image/*">
										@if ($home->image)
											<img src="{{ asset('storage/' . $home->image) }}" class="img-fluid border mt-3" width="100%" height="200" alt="...">
										@endif
										<p class="text-danger">{{ $errors->first('image') }}</p>
										<p class="text-warning" style="margin-top: 5px;">Leave empty if you want to keep the existing image.</p>
									</div>
								</div>
							</div>
							<div class="col-md-10">
								<div class="">
									<div class="mb-3">
										<label for="title" class="form-label fw-bold">Title</label>
										<input type="text" class="form-control" id="title" name="title" value="{{ $home->title }}">
										<p class="text-danger">{{ $errors->first('title') }}</p>
									</div>
									<div class="mb-3">
										<label for="description" class="form-label fw-bold">Description</label>
										<textarea class="form-control" id="description" name="description" rows="4">{{ $home->description }}</textarea>
										<p class="text-danger">{{ $errors->first('description') }}</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</div>
	
				<div class="d-flex justify-content-end mt-3">
					<a href="/admin/home" class="btn btn-secondary me-2" onclick="window.history.back();">Cancel</a>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
	
	
	
	</div>
	
	
	
</div>

@endsection
