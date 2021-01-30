<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Absensi Mahasiswa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Absensi Mahasiswa</a>
                <a class="navbar-brand" href="">Universitas CIC</a>
                <a class="navbar-brand hidden" href="">A</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>Home </a>
                    </li>
                    <li>
                        <a href=""> <i class="menu-icon fa fa-puzzle-piece"></i>Mahasiswa</a>
                    </li>
                    <li> 
                        <a href=""> <i class="menu-icon fa fa-dashboard"></i>Mata Kuliah</a>
                    </li>
                    <li> 
                        <a href=""> <i class="menu-icon fa fa-puzzle-piece"></i>Absen</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            
                          </div>
                        </div>

              

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-id"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-jp"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->

        @yield('breadcrumbs')

        @yield('content')
        <div class="content mt-3">

        <div class="animated fadeIn">
        <img src="{{ asset('style/images/ucic.png') }}" width="35%" height="35%" style="display: block; margin: auto;"></a>
         <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambahkan Data
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Tlp</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ashri Azizah Yolandita</td>
      <td>Indramayu</td>
      <td>0896532578</td>
      <td>aayolandita@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Selvi Feliyanti</td>
      <td>Cirebon</td>
      <td>0867626328</td>
      <td>selvi@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Dinda Afni</td>
      <td>Cirebon</td>
      <td>0856783222</td>
      <td>dinda123@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Erika Anjani</td>
      <td>Majalengka</td>
      <td>0812387611</td>
      <td>erikaanjani@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Rizki Amirullah</td>
      <td>Bandung</td>
      <td>0856762222</td>
      <td>rizki11@gmail.com</td>
    </tr>

  </tbody>
</table>
        </div>

        </div>

    </div>

</body>
</html>
