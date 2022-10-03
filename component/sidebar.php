<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>TooRead</title>

    <!-- General CSS Files -->
    <link href="" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.min.css" />
</head>
    <body>
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color: #97D2EC;">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
            <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                Histories
                </div>
                <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                <a href="#">Pengurus baru</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                <a href="#">#KSAD</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                Projects
                </div>
                <div class="search-item">
                <a href="#">
                    <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                    </div>
                    project apa ya hari ini ?
                </a>
                </div>
            </div>
            </div>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                    <div class="dropdown-item-avatar">
                    <img alt="image" src="" class="rounded-circle">
                    <div class="is-online"></div>
                    </div>
                    <div class="dropdown-item-desc">
                    <b>bambank</b>
                    <p>Hello, ngab!</p>
                    <div class="time">10 Hours Ago</div>
                    </div>
                </a>
                </div>
                <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            </li>
            <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                <div class="float-right">
                    <a href="#">Mark All As Read</a>
                </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item">
                    <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                    </div>
                    <div class="dropdown-item-desc">
                    Welcome to saka ges :)!
                    <div class="time">Yesterday</div>
                    </div>
                </a>
                </div>
                <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            </li>
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img class="img-profile rounded-circle" src="" style="max-width: 60px">
                <div class="d-sm-none d-lg-inline-block"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">-Menu-</div>
                <a href="" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a data-toggle="modal" data-target="#logoutModal" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
            </li>
        </ul>
        </nav>

    <div class="main-sidebar" id="side">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a style="color: #97D2EC">TooRead</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="index.html">Perpustakaan</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                    <li><a class="nav-link" href="../page/dashboardPage.php"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
                <li class="menu-header">Menu</li>
                    <li><a class="nav-link" href="../page/listBukuPage.php"><i class="fas fa-book"></i> <span>List Buku</span></a></li>
                <li><a class="nav-link" href="../page/listPeminjamanPage.php"><i class="fas fa-list"></i> <span>List Peminjaman</span></a></li>
            </ul>
        </aside>
    </div>
  </body>