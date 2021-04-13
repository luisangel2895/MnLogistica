<!doctype html>
<html lang="en">

<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->

    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/linearicons/style.css')}}">
    <link rel="stylesheet" href="{{asset('static/chartist/css/chartist-custom.css')}}">

	<!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">

    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/logo.png')}}">
    <style>
        #boton-crear-solicitud{
            color:white;
        }
        #boton-crear-solicitud:hover{
            background: rgb(14, 153, 14);
        }
    </style>

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="{{asset('img/logo.png')}}" alt="Klorofil Logo" class="img-responsive logo" width="50px"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				{{-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> --}}

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('img/user2.png')}}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/home" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li>
							<a href="#materiales" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Materiales</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="materiales" class="collapse ">
								<ul class="nav">
									<li><a href="/materials">Listar</a></li>
									<li><a href="#">Registrar</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#equipos" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Equipos</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="equipos" class="collapse ">
								<ul class="nav">
									<li><a href="/equipments">Listar</a></li>
									<li><a href="#">Registrar</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#solicitudes" data-toggle="collapse" class="collapsed"><i class="lnr lnr-book"></i> <span>Solicitudes</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="solicitudes" class="collapse ">
								<ul class="nav">
									<li><a href="/requests">Listar</a></li>
									<li><a href="/requests/create">Crear Solicitud</a></li>
								</ul>
							</div>
						</li>
						<li><a name="" id="boton-crear-solicitud" class="btn btn-success" href="/requests/create" role="button">Crear Solicitud</a></li>

					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
        <div class="main">
            @yield('content')
        </div>

		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 Logistic All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
    <script src="{{asset('static/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('static/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('static/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('static/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('static/chartist/js/chartist.min.js')}}"></script>
    <script src="{{asset('scripts/klorofil-common.js')}}"></script>


</body>

</html>




