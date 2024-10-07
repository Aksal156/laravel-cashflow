<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
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
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="/" class="collapsed" aria-expanded="false">
                                <p>Dashboard</p>
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
                    <div class="logo-header" data-background-color="dark">
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
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="user.png" alt="..." class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="fw-bold">

                                        </span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="user.png" alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
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
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                {{-- <i class="fas fa-dollar-sign"></i> <!-- Ganti icon jika perlu --> --}}
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">Total Pemasukan</p>
                                                <h4 class="card-title">
                                                    {{ number_format($totalPemasukan, 0, ',', '.') }}
                                                </h4>
                                                <!-- Format nominal -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-info bubble-shadow-small">
                                                {{-- <i class="fas fa-user-check"></i> <!-- Ganti icon sesuai kebutuhan --> --}}
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">Total Pengeluaran</p>
                                                <h4 class="card-title">
                                                    {{ number_format($totalPengeluaran, 0, ',', ',') }}</h4>
                                                <!-- Format nominal -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-round">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-icon">
                                            <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                {{-- <i class="fas fa-chart-line"></i> <!-- Ganti icon sesuai kebutuhan --> --}}
                                            </div>
                                        </div>
                                        <div class="col col-stats ms-3 ms-sm-0">
                                            <div class="numbers">
                                                <p class="card-category">Total Keseluruhan</p>
                                                <h4 class="card-title">
                                                    {{ number_format($totalKeseluruhan, 0, ',', ',') }}</h4>
                                                <!-- Format nominal -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if (Session::has('status') && Session::has('message'))
                        <div class="alert alert-info" role="alert" {{ Session::get('status') }}>
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    {{-- <div class="my-3">
                        <form action="" method="get">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="keyword" id="floatingInputGroup1" placeholder="Search">
                                <button class="input-group-text btn btn-primary">Search</button>
                            </div>
                        </form>
                    </div> --}}

                    <div class="table-responsive">
                        <!-- Tabs Navigation -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pemasukan-tab" data-bs-toggle="tab"
                                    data-bs-target="#pemasukan" type="button" role="tab"
                                    aria-controls="pemasukan" aria-selected="true">Pemasukan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pengeluaran-tab" data-bs-toggle="tab"
                                    data-bs-target="#pengeluaran" type="button" role="tab"
                                    aria-controls="pengeluaran" aria-selected="false">Pengeluaran</button>
                            </li>
                        </ul>

                        <!-- Tabs Content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- Tabel Pemasukan -->
                            <div class="tab-pane fade show active" id="pemasukan" role="tabpanel"
                                aria-labelledby="pemasukan-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    @foreach ($pemasukan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ number_format($item['nominal'], 0, ',', '.') }}</td>
                                            <td>{{ $item['keterangan'] }}</td>
                                            <td>{{ $item['tanggal'] }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                            <!-- Tabel Pengeluaran -->
                            <div class="tab-pane fade" id="pengeluaran" role="tabpanel"
                                aria-labelledby="pengeluaran-tab">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>No</th>
                                        <th>Nominal</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    @foreach ($pengeluaran as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ number_format($item['nominal'], 0, ',', '.') }}</td>
                                            <td>{{ $item['keterangan'] }}</td>
                                            <td>{{ $item['tanggal'] }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="table-responsive">
                        <h4>Pemasukan</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                            </tr>
                            @foreach ($pemasukan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ number_format($item['nominal'], 0, ',', '.') }}</td>
                                    <td>{{ $item['keterangan'] }}</td>
                                    <td>{{ $item['tanggal'] }}</td>
                                </tr>
                            @endforeach
                        </table>

                        <h4>Pengeluaran</h4>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                            </tr>
                            @foreach ($pengeluaran as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ number_format($item['nominal'], 0, ',', '.') }}</td>
                                    <td>{{ $item['keterangan'] }}</td>
                                    <td>{{ $item['tanggal'] }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div> --}}

                    {{-- <div class="my-3">
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
                                        <a href="/pemasukan-edit/{{ $item->id }}"
                                            class="btn btn-warning">Edit</a>
                                    @endif

                                    @if (Auth::user()->role_id == 1)
                                        <a href="/pemasukan-delete/{{ $item->id }}"
                                            class="btn btn-danger">Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </table> --}}


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
