{{-- Plugins --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugins/editor/ckfinder/ckfinder.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">

{{-- Dist --}}
<link rel="stylesheet" href="{{ asset('dist/css/admin/adminlte-bootstrap.min.css') }}">
<script src="{{ asset('dist/js/helper/slug.js') }}"></script>
<script src="{{ asset('dist/js/helper/validate.js') }}"></script>
<script src="{{ asset('dist/js/admin/selectAreaAPI.js') }}"></script>

{{-- CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bs-custom-file-input/1.3.4/bs-custom-file-input.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.10.2/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-element-queries/1.2.3/ResizeSensor.min.js"></script>

<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    });

</script>

<style>
    td {
        vertical-align: middle !important;
    }

</style>
