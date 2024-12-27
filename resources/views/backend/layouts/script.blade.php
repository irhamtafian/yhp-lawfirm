<!-- Bootstrap JS -->
<script src="{{ asset('assets/backend/js/bootstrap.bundle.min.js') }}"></script>

<!--plugins-->
<script src="{{ asset('assets/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<!--notification js -->
<script src="{{ asset('assets/backend/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/notifications/js/notification-custom-script.js') }}"></script>

<!--app JS-->
<script src="{{ asset('assets/backend/js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>

<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

<script>
    $(document).ready(function () {
        $('#image-uploadify').imageuploadify();
    })
</script>

<script>
    $('#fancy-file-upload').FancyFileUpload({
        params: {
            action: 'fileuploader'
        },
        maxfilesize: 1000000
    });
</script>

<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ asset('assets/js/pages/sweetalert.init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Edit category article -->
<script>
    $(document).ready(function () {
        $(document).on('click', '.editCategory', function () {
            var category_id = $(this).val();
            // alert(category_id);
            $('#editCategory').modal('show');

            $.ajax({
            type: "GET",
            url: "/admin/articles/categories/" + category_id + "/edit",
            success: function (response) {
                // Check if the response is valid and contains the category data
                if (response && response.category) {
                    var categoryName = response.category.name;
                    $('#name').val(categoryName);
                    $('#category_id').val(category_id);
                    $('#editCategory').modal('show');
                } else {
                    console.error('Invalid response or category data missing.');
                }
            },
            error: function (xhr, status, error) {
                console.error('Error fetching category data:', error);
            }
        });

        });
        
    });
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('click', '#publish', function(e){
            e.preventDefault();
            var form = $(this).closest('form');  
            var link = form.attr("action");  

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#6e7881',
                confirmButtonText: 'Yes, publish it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();  
                }
                });
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var form = $(this).closest('form');  
            var link = form.attr("action");  

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();  
                }
                });
        });
    });
</script>

<script type="text/javascript">
    $(function(){
        $(document).on('click', '#delete', function(e){
            e.preventDefault();
            var form = $(this).closest('form');  

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();  
                }
            });
        });
    });
</script>
 <!-- search modal -->
<div class="modal" id="SearchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header gap-2">
                <div class="position-relative popup-search w-100">
                    <form action="{{ route('backend.search.index') }}" method="GET">
                        @csrf
                        <input id="search-input" name="keyword" class="form-control form-control-lg ps-5 border border-3 border-primary" type="text" placeholder="Search Menu" autofocus/>
                        <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class="bx bx-search"></i></span>
                    </form>
                 
                </div>
                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>


<!-- end search modal -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lobibox/1.2.4/js/lobibox.min.js"></script> --}}
<script>
    $(document).ready(function() {
        @if (session('notFound'))
            round_warning_noti();
        @endif
    });

    function round_warning_noti() {
        Lobibox.notify('warning', {
            pauseDelayOnHover: true,
            size: 'mini',
            rounded: true,
            delayIndicator: false,
            icon: 'bx bx-error',
            continueDelayOnInactiveTab: false,
            position: 'top right',
            msg: '{{ session('notFound') }}'
        });
    }
</script>
