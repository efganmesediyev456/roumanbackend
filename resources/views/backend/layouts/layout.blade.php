<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Best1nvest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/backend/assets/images/favicon.ico">

    <link href="{{asset('backend/gopanel/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="/backend/gopanel/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <link href="/backend/gopanel/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <script src="/backend/gopanel/assets/js/plugin.js"></script>

    <link href="/backend/gopanel/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/backend/gopanel/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="/backend/gopanel/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <link href="/backend/gopanel/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/backend/gopanel/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="/backend/gopanel/assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="/backend/gopanel/assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="/backend/gopanel/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/backend/gopanel/assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
    <link rel="stylesheet" href="/backend/gopanel/assets/css/custom.css?v=1716964617">
    <link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="https://best1nvest.com//backend/assets/images/favicon.png" type="image/x-icon">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.8/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.css" rel="stylesheet">

    @yield("css")
</head>

<body data-sidebar="dark">
<div id="layout-wrapper">
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="/admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/backend/assets/images/logo.svg" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="/backend/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                    </a>

                    <a href="/admin" class="logo logo-light" style="text-align: left">
                                <span class="logo-sm">
                                    <img style="width: 29px;
    object-fit: contain;" src="/backend/gopanel//backend/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="/backend/gopanel//backend/assets/images/logo2.png" alt="" height="19">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->



            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



                <div class="app-search d-none d-lg-block searchBlock">
                    <div class="position-relative">
                        <input type="text" class="form-control search" data-search="driverResults" route="https://yaxpoint.com/gopanel/search/driver" placeholder="Axtar ...">
                        <span class="bx bx-search-alt"></span>
                        <div class="search-list search-list-driver" style="display: none;">
                            <div class="search-list-body">
                                <ul id="searchDriverListBody">
                                    <li>
                                        <div>
                                            <a href="" class="d-flex">
                                                <span style="position: relative" class="mdi mdi-loading rotate-anime"></span>
                                                <span style="position: relative">Axtarilir ....</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>


                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="/backend/gopanel//backend/assets/images/users/avataruni.jpg"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1" key="t-henry">Best1nvest</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->

                        <a class="dropdown-item text-danger" onclick="this.nextElementSibling.submit()" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>

                        <form action="https://best1nvest.com/admin/logout" method="POST">
                            <input type="hidden" name="_token" value="AbinYoh1HOJQPyl2d2fSstPDvmFt214NYABpkWzJ"> </form>

                    </div>
                </div>



            </div>
        </div>
    </header>
    <div class="vertical-menu">
        <div data-simplebar class="h-100">
            <div id="sidebar-menu">
                @include("backend.inc.sidebar")
            </div>
        </div>
    </div>
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">



                        @yield("content")









                    </div>
                </div>
                <!-- end page title -->

                <style>
                </style>

                <div class="row">

                </div>
                <!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">

                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="/backend/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="/backend/assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>

            <div class="mb-2">
                <img src="/backend/assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div>

            <div class="mb-2">
                <img src="/backend/assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
            </div>
            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
            </div>


        </div>

    </div>
    <!-- end slimscroll-menu-->
</div>
<div class="rightbar-overlay"></div>
<script src="/backend/gopanel/assets/libs/jquery/jquery.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/gopanel/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/backend/gopanel/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/backend/gopanel/assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="/backend/gopanel/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- dashboard init -->
<script src="/backend/gopanel/assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="/backend/gopanel/assets/js/app.js"></script>


<!-- Required datatable js -->
<script src="/backend/gopanel/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="/backend/gopanel/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/backend/gopanel/assets/libs/jszip/jszip.min.js"></script>
<script src="/backend/gopanel/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="/backend/gopanel/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="/backend/gopanel/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/backend/gopanel/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="/backend/gopanel/assets/js/pages/datatables.init.js"></script>


<script src="/backend/gopanel/assets/libs/select2/js/select2.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/backend/gopanel/assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="/backend/gopanel/assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>
<script src="/backend/gopanel/assets/js/pages/form-advanced.init.js"></script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>



<script>
    $('.select2').select2()

    // CKEditor konfigürasyonunu başlat
    CKEDITOR.config.filebrowserImageBrowseUrl = '/gopanel/laravel-filemanager';
    CKEDITOR.config.filebrowserImageUploadUrl = '/gopanel/laravel-filemanager/upload';
    CKEDITOR.config.filebrowserBrowseUrl = '/gopanel/laravel-filemanager';
    CKEDITOR.config.filebrowserUploadUrl = '/gopanel/laravel-filemanager/upload';







    $('body').on('click', '.basedelete', function() {
        var model = $(this).attr('data-model');
        var id = $(this).attr('data-id');
        var _this = $(this).parents('tr')
        Swal.fire({
            title: 'Silmək istədiyinizə əminsiniz?',
            text: 'Qalıcı olaraq silinəcək',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Bəli, sil',
            cancelButtonText: 'Xeyr, silmə',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'https://best1nvest.com/admin/model/delete',
                    data: {
                        model: model,
                        id: id,
                        _token: 'AbinYoh1HOJQPyl2d2fSstPDvmFt214NYABpkWzJ'
                    },
                    method: 'POST',
                    success: function() {
                        Swal.fire('Silindi!', 'Müvəfəqiyyətlə silindi', 'success');
                        _this.remove();
                    }
                })
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Ləğv olundu', 'Silinmə funksiyası ləğv edildi', 'error');
            }
        });

    })
</script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.8/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.25.1/tagify.min.js"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
<script>
    var inputs = document.querySelectorAll('.tags');
    inputs.forEach((item) => {
        new Tagify(item)
    })
</script>
<script>
    $(function() {


        @if(session()->has('success'))
        Swal.fire({
            title: '{{session()->get('success')}}',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
        })
        @endif


        $('.app-search input').on('input', function() {
            $('.search-list').slideDown();
            $('#searchDriverListBody li:not(:nth-child(1))').remove();
            $('#searchDriverListBody li:nth-child(1)').show();

            var search = $(this).val();
            $.ajax({
                url: 'https://best1nvest.com/admin/search',
                type: 'post',
                data: {
                    '_token': 'AbinYoh1HOJQPyl2d2fSstPDvmFt214NYABpkWzJ',
                    search
                },
                success: function(e) {
                    $('#searchDriverListBody li:not(:nth-child(1))').remove();
                    $('#searchDriverListBody li:nth-child(1)').hide();
                    $('#searchDriverListBody').append(e.view);
                },
                error: function(e) {
                    console.log(e);
                }
            })

        })
    })
</script>

@stack("js")
</body>

</html>
