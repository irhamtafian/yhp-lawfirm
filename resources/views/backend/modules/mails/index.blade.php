@extends('backend.layouts.base')
@section('title', 'Mails | Admin')

@section('content')

<div class="page-content">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="row align-items-center">
						<div class="col-lg-9 col-xl-10  d-flex justify-content-lg-start justify-content-center">
							<div class="page-breadcrumb d-flex d-sm-flex align-items-center mb-2">
								<div class="breadcrumb-title pe-3">Mails</div>
								<div class="ps-3">
									<nav aria-label="breadcrumb">
										<ol class="breadcrumb mb-0 p-0">
											<li class="breadcrumb-item"><a href="/admin"><i class="bx bx-home-alt"></i></a>
											</li>
											<li class="breadcrumb-item active" aria-current="page">Mails</li>
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
		<div class="card-body p-4">
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
			<div class="table-responsive">
				<table id="example" class="table mb-0 align-middle" style="width:100%">
					<thead class="table-light">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
                            <th>Message</th>
							<th>Mailed at</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					
						@foreach($mails as $mail)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $mail->name }}</td>
                            <td>{{ $mail->email }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm radius-30 px-4" data-bs-toggle="modal" data-bs-target="#mail-{{ $mail->id }}">See Message</button>	
								<div class="modal fade" id="mail-{{ $mail->id }}" tabindex="-1" aria-hidden="true">
							
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Message from {{ $mail->name }}</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<pre>{{ $mail->message }}</pre></div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
                            </td>
                            <td>{{ $mail->created_at->format('d M Y, H:iA') }}</td>
							<td>
								<div class="d-flex order-actions">
									<form action="{{ route('mails.delete', $mail->id) }}" method="POST" id="deleteForm">
										@csrf
										@method('DELETE')
										<a href="#" id="delete">
											<i class="bx bx-trash"></i>
										</a> 
									</form>
								</div>
							</td>
							
							
							
							
                        </tr>
                        @endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection