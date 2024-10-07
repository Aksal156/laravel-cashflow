{{-- @extends('layouts.mainlayout')



@section('content')
    <div class="my-5">
        <a href="{{ route('pemasukan-add') }}"><button class="btn btn-primary">Tambah</button></a>
    </div>

    @if (Session::has('status') && Session::has('message'))
        <div class="alert alert-info" role="alert" {{ Session::get('status') }}>
            {{ Session::get('message') }}
        </div>
    @endif


    <div class="my-3">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="keyword" id="floatingInputGroup1" placeholder="Search">
                <button class="input-group-text btn btn-primary">Search</span>

            </div>
        </form>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nominal</th>
            <th>Keterangan</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item['nominal'] }}</td>
                <td>{{ $item['keterangan'] }}</td>
                <td>{{ $item['tanggal'] }}</td>
                <td>
                    @if (Auth::user()->role_id != 1)
                        -
                    @else
                        <a href="/pemasukan-edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                    @endif

                    @if (Auth::user()->role_id == 1)
                        <a href="/pemasukan-delete/{{ $item->id }}" class="btn btn-danger">Delete</a>
                    @endif
                </td>
            </tr>
        @endforeach

    </table>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $halaman }}</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="plugins.min.css" />
    <link rel="stylesheet" href="kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                {{-- <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div> --}}
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        {{-- <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="mainlayout" class="collapsed" aria-expanded="false">
                                <p>Dashboard</p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="/">
                                <span class="sub-item">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a href="/pemasukan">
                                <span class="sub-item">Pemasukan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengeluaran">
                                <span class="sub-item">Pengeluaran</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    {{-- <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div> --}}
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        {{-- <nav
                            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control" />
                            </div>
                        </nav> --}}

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Search ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>

                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="user.png" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="fw-bold">{{ Auth::user()->role->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <a class="dropdown-item" href="/logout">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="my-5">
                        <a href="/pemasukan-add"><button class="btn btn-primary">Tambah</button></a>
                    </div>
                    @if (Session::has('status') && Session::has('message'))
                        <div class="alert alert-info" role="alert" {{ Session::get('status') }}>
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="my-3">
                        <form action="" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" id="floatingInputGroup1"
                                    placeholder="Search">
                                <button class="input-group-text btn btn-primary">Search</span>
                            </div>
                        </form>
                    </div>

                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nominal</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item['nominal'] }}</td>
                                <td>{{ $item['keterangan'] }}</td>
                                <td>{{ $item['tanggal'] }}</td>
                                <td>
                                    @if (Auth::user()->role_id != 1)
                                        -
                                    @else
                                        <a href="/pemasukan-edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                                    @endif

                                    @if (Auth::user()->role_id == 1)
                                        <a href="/pemasukan-delete/{{ $item->id }}"
                                            class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <!-- Custom template | don't include it in your project! -->
                    <div class="custom-template">
                        <div class="custom-content">
                            <div class="switcher">
                                <div class="switch-block">
                                    <h4>Logo Header</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="selected changeLogoHeaderColor"
                                            data-color="dark"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="blue"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="purple"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="light-blue"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="green"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="orange"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="red"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="white"></button>
                                        <br />
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="dark2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="blue2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="purple2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="light-blue2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="green2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="orange2"></button>
                                        <button type="button" class="changeLogoHeaderColor"
                                            data-color="red2"></button>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <h4>Navbar Header</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="purple"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="light-blue"></button>
                                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="orange"></button>
                                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                                        <button type="button" class="selected changeTopBarColor"
                                            data-color="white"></button>
                                        <br />
                                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="purple2"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="light-blue2"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="green2"></button>
                                        <button type="button" class="changeTopBarColor"
                                            data-color="orange2"></button>
                                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <h4>Sidebar</h4>
                                    <div class="btnSwitch">
                                        <button type="button" class="changeSideBarColor"
                                            data-color="white"></button>
                                        <button type="button" class="selected changeSideBarColor"
                                            data-color="dark"></button>
                                        <button type="button" class="changeSideBarColor"
                                            data-color="dark2"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Custom template -->
                </div>
                <!--   Core JS Files   -->
                <script src="jquery-3.7.1.min.js"></script>
                <script src="popper.min.js"></script>
                <script src="bootstrap.min.js"></script>

                <!-- jQuery Scrollbar -->
                <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

                <!-- Chart JS -->
                <script src="assets/js/plugin/chart.js/chart.min.js"></script>

                <!-- jQuery Sparkline -->
                <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

                <!-- Chart Circle -->
                <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

                <!-- Datatables -->
                <script src="assets/js/plugin/datatables/datatables.min.js"></script>

                <!-- Bootstrap Notify -->
                <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

                <!-- jQuery Vector Maps -->
                <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
                <script src="assets/js/plugin/jsvectormap/world.js"></script>

                <!-- Sweet Alert -->
                <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

                <!-- Kaiadmin JS -->
                <script src="assets/js/kaiadmin.min.js"></script>

                <!-- Kaiadmin DEMO methods, don't include it in your project! -->
                <script src="assets/js/setting-demo.js"></script>
                <script src="assets/js/demo.js"></script>
                <script>
                    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#177dff",
                        fillColor: "rgba(23, 125, 255, 0.14)",
                    });

                    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#f3545d",
                        fillColor: "rgba(243, 84, 93, .14)",
                    });

                    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
                        type: "line",
                        height: "70",
                        width: "100%",
                        lineWidth: "2",
                        lineColor: "#ffa534",
                        fillColor: "rgba(255, 165, 52, .14)",
                    });
                </script>
</body>

</html>