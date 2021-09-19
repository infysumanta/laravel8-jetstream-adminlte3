<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js')}}"></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('js/clipboard.min.js')}}"></script>
{{-- <script src="../../dist/js/demo.js"></script> --}}
<script>
    function ShopTopRightToast(status, message){
        Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            icon: status,
            title : message
        });
    }

   

    
</script>