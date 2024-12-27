@extends('backend.layouts.base')
@section('title', 'Articles | Admin')

@section('content')

<div class="page-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-10  d-flex justify-content-lg-start justify-content-center">
							<div class="page-breadcrumb d-flex d-sm-flex align-items-center mb-2">
								<div class="breadcrumb-title pe-3">Articles</div>
								<div class="ps-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">Data Table</li>
										</ol>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-xl-2 d-flex justify-content-lg-end justify-content-center">
							<a href="articles/create" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Add Article</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- <a class="dropdown-item" href="javascript:;">
		<div class="d-flex align-items-center">
			<div class="notify bg-light-success text-success">
				<img src="assets/images/app/outlook.png" width="25" alt="user avatar">
			</div>
			<div class="flex-grow-1">
				<h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
			ago</span></h6>
				<p class="msg-info">Successfully created new email</p>
			</div>
		</div>
	</a> --}}
</div>

@endsection