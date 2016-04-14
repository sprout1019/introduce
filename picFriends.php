<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Friends</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Introduce</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<a class="navbar-brand" href="../introduce/index.php">Ya-Chi</a>
                          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../introduce/index.php">Home</a>
                    </li>
                    <li>
                        <a href="../introduce/introduce.php">Introduce</a>
                    </li>
                    <li class="dropdown active">
                        <a href="../introduce/picture.php" class="dropdown-toggle" data-toggle="dropdown">Picture <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../introduce/picFamily.php">Family</a>
                            </li>
                            <li>
                                <a href="../introduce/picFriends.php">Friends</a>
                            </li>
                           <!-- <li>
                                <a href="/introduce/picTrip.php">Trip</a>
                            </li>
                            <li>
                                <a href="/introduce/picService">Service</a>
                            </li>-->
                        </ul>
                    </li>
                    <li>
                        <a href="../introduce/Login.php">Admin</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Picture Item
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../introduce/picture.php">Picture</a>
                    </li>
                    <li class="active">Friends</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			<li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="../introduce/img/IMG_0386.JPG" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../introduce/img/IMG_0424.JPG" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../introduce/img/IMG_0992.JPG" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../introduce/img/IMG_0158.JPG" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="../introduce/img/IMG_0236.JPG" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Friends</h3>
                <p>Best friends in my life</h3>
                <ul>
	            <li> A friend in need is a friend indeed.</li>
                    <li>Memory</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row 
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="/introduce/img/IMG_0992.JPG" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2015</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
