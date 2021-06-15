<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icons -->
    <link href="images/favicon.png" rel="shortcut icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <title>Elearning :: Dashboard</title>
	<style>
		*{color:#6d4c41;}
		.header ul li a{color:white;font-weight:bold;}
		.header ul li a:hover{color:#ff8800;font-weight:bold;transition:all ease 1s;}
		.btn{background:#6d4c41;color:white;font-weight:bold;border:2px solid #6d4c41;border-radius:3px;transition:all ease 1s;}
		.btn:hover{color:#6d4c41;background:white;transition:all ease 1s;font-weight:bold;}
		.bt{max-height:50px;background:#6d4c41;color:white;font-weight:bold;transition:all ease 1s;
		border:2px solid #6d4c41;text-align:center;line-height:50px;margin-bottom:10px;}
		.bt:hover{border:2px solid #6d4c41;background:white;color:#6d4c41;font-weight:bold;
		transition:all ease 1s;}
	</style>
  </head>
  <body>

    <!-- Preloader -->
    <div id="preloader">
      <div id="status"></div>
    </div>
    
    <!-- Header strat -->
      <!-- Header strat -->
    <header class="header abs-header" style="background:#6d4c41;">
      <div class="container">
        <nav class="navbar">
          <!-- Site logo -->
          <a href="home-01.html" class="logo">
            <span style="color:white;"><i style="color:#ff8800;font-size:500tyle="font-size:20px;color:white;">-</b> <font style="font-size:30px;font-weight:bold;font-family:Monotype Corsiva;color:white;">Learning</font></span>
          </a>
          <a href="javascript:void(0);" id="mobile-menu-toggler">
            <i class="ti-align-justify"></i>
          </a>
        <ul class="navbar-nav">
            <li class="urrent-menu-item">
              <a href="{{url('home1')}}">Home</a>
            </li>
            <li><a href="{{url('studentshow')}}">All Students</a></li>
            <li class="">
              <a href="#">All Tutor</a>
            </li>
            <li class="">
              <li><a href="{{url('showcontect')}}">All Queries</a></li>
            </li>
            <li><a href="logout1">Log Out</a></li>
          </ul>
        </nav>
      </div>
    </header>