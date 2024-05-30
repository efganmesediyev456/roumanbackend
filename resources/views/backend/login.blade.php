<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/backend/gopanel/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/backend/gopanel/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/backend/gopanel/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- App js -->
    <script src="/backend/gopanel/assets/js/plugin.js"></script>
    <link rel="shortcut icon" href="https://best1nvest.com/assets/images/favicon.png" type="image/x-icon">


</head>

<body>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary-subtle">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">


                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="1" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <a href="index.html" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                                <img src="/backend/gopanel/assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                </div>
                            </a>


                        </div>
                        <div class="p-2">
                            <div class="my-4">
                                <img src="https://best1nvest.com/assets/images/logo/logo2.png" alt="" height="34">
                            </div>
                            <form class="form-horizontal" action="{{route("loginPost")}}" method="POST">

                                @if(session()->has("message"))
                                    <div class="alert alert-danger">{{session()->get("message")}}</div>
                                    @endif
                                @csrf
                                <div class="mb-3" style="flex-wrap: wrap">
                                    <label for="username" class="form-label">Email</label>
                                    <input readonly onclick="this.removeAttribute('readonly')" type="text" class="form-control" id="username" placeholder="Enter email" name="email" value="">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input readonly onclick="this.removeAttribute('readonly')" type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>

                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember-check">
                                    <label class="form-check-label" for="remember-check">
                                        Remember me
                                    </label>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>




                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">


                </div>

            </div>
        </div>
    </div>
</div>
<!-- end account-pages -->

<!-- JAVASCRIPT -->
<script src="/backend/gopanel/assets/libs/jquery/jquery.min.js"></script>
<script src="/backend/gopanel/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/gopanel/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/backend/gopanel/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/backend/gopanel/assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="/backend/gopanel/assets/js/app.js"></script>
</body>

</html>
