<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard|Product</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->

    <link href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->


    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><b>&nbsp;&nbsp;&nbsp;Inventory</b></a>
        </div>


        <!-- Top Menu Items -->


        <ul class="nav navbar-right top-nav">
            <li><a href="">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                   
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" height="50 px" src="" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong></strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> </p>
                                    <p></p>
                                </div>
                            </div>
                        </a>
                    </li>
                   
                    <li class="message-footer">
                        <a href="">Read All New Messages</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">

                <a  class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{--sdd--}} <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li>
                        <a href=""><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href=""><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>


        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="{{route('product.index')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('product.index')}}"><i class="fa fa-users"></i> 
                    Product</a>
                </li>

                
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>


    @yield('content')
    <!-- /#wrapper -->
</div>
    <!-- jQuery -->

</body>

</html>
