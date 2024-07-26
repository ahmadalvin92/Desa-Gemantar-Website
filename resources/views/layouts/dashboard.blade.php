<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gemantar Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Scripts summernote-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/summernote.min.css') }}">
    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @yield('main')
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    {{-- <script src="{{ asset('assets/js/app.js') }}" defer></script> --}}

    <!-- jQuery Mapael -->
    <script src="{{ asset('assets/vendor/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <script type="text/javascript">
        $(".brand-link").click(function() {
            if ($(".brand-text .right").css("transform") == 'none') {
                $(".brand-text .right").css("transform", "rotate(-90deg)");
            } else {
                $(".brand-text .right").css("transform", "");
            }
        });
        $('#image').change(function(e) {
            var fileName = e.target.files[0].name
            $('custom-file-label').html(fileName);
        })
        $(document).ready(function(e) {


            $('#image').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-before-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>
    <script>
        $(function()
        {
            var keyword =  ;
            $( "#cari" ).autocomplete(
            {
                source: keyword,
                maxShowItems: 10,
            });
        });
    </script>

    <script src="{{ asset('assets/vendor/summernote/summernote.min.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['codeview']],
                    ['picture',['picture']]
                ],
                height:200,
                focus: true,
                disableResizeEditor: false
            });
        })
    </script>
</body>

</html>
