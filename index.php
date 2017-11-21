
<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>GC Clinic</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!--Font awesome and roboto-->
    <link href="assets/font-awesome/css/font-awesome.min.css"  rel="stylesheet" >
    <link href="assets/css/roboto.css" rel="stylesheet"  type='text/css'/>

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />





    <!-- Template styles -->

    <style>
        /* TEMPLATE STYLES */
        .flex-center {
            color: #fff;
        }
        .intro-1 {
           background: url("img/component/gc.jpg")no-repeat center center;
            background-size: cover;
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

        .navbar{
          background-color: #2BBBAD;
        }
    </style>

</head>

<body>
  <?php
  if (isset($_POST['submit']))
  	{
  include("template/databaseFiles/dbconfig.php");

  session_start();

  $username=$_POST['username'];
  $password=$_POST['password'];

  $_SESSION['login_user']=$username;

  $query = mysql_query("SELECT username FROM admin_login WHERE username='$username' and password='$password'");

   if (mysql_num_rows($query) != 0)
  {

   echo "<script language='javascript' type='text/javascript'> location.href='template/announcement.php' </script>";
    }

    else
    {
  echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
  }

  }

  ?>

  <!-- Modal -->
  		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  				<div class="modal-dialog" role="document">
  						<div class="modal-content">


                  <div class="modal-body">
  									<form class="container" method="post">
  										<br>
  											<p class="h5 text-center mb-4" style="color:#2BBBAD;"><strong>Login</strong></p>

  											<div class="md-form">
       <i class="fa fa-envelope prefix grey-text"></i>
  													<input type="text" name="username" id="username" class="form-control">
  													<label for="defaultForm-email">Your email</label>
  											</div>

  											<div class="md-form">
  													<i class="fa fa-lock prefix grey-text"></i>
  													<input type="password" name="password" id="password" class="form-control">
  													<label for="defaultForm-pass">Your password</label>
  											</div>

  											<div class="text-center">

  											</div>

  								</div>
  								<div class="modal-footer">
  												<button type="submit" class="btn btn-default"  name="submit" value="Login">Login</a>
  										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

  								</div>

  						</form>


  						</div>
  				</div>
  		</div>


    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top justify-content-between">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                  <form class="form-inline">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#personnel">Personnel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  data-toggle="modal" data-target="#exampleModal">Login</a>
                        </li>

                    </ul>
                </div>
                </form>
            </div>
        </nav>
        <!--/.Navbar-->




        <!--/.Card-->
        <!--Intro Section-->
        <section class="view intro-1 hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <ul>
                        <li>
                            <h1 class="h1-responsive font-bold wow fadeInDown" data-wow-delay="0.2s">Welcome to Gordon College Clinic</h1></li>
                        <li>
                            <p class="lead mt-4 mb-5 wow fadeInDown">A landing page for blah blah blah ...</p>
                        </li>

                    </ul>
                </div>
            </div>
        </section>

    </header>

    <!-- Main container-->

<br>
<br>

        <!--Section: Best features-->
        <section id="features">
                    <div class="container" >
          <div class="divider-new pt-5">
              <h2 class="h2-responsive wow fadeIn">Best features</h2>
          </div>



              <div class="row pt-3">

                  <!--First columnn-->
                  <div class="col-lg-3 mb-r">


                      <div class="wow fadeIn">

                          <!--image-->
                          <img class="img-fluid" src="img/component/login.png" alt="Card image cap" style="width:80%;height:80%;">

                          <!--content-->
                          <div class="body">
                              <!--Title-->
                              <h4 class="title text-center">Log In</h4>
                              <hr>
                              <!--Text-->
                              <p class="text">Log in interface for record confidentiality</p>
                          </div>

                      </div>
                      <!--/.Card-->
                  </div>
                  <!--First columnn-->


                  <!--Second columnn-->
                  <div class="col-lg-3 mb-r">
                      <!--Card-->
                      <div class="wow fadeIn" data-wow-delay="0.2s">

                        <!--image-->
                        <img class="img-fluid" src="img/component/sms.png" alt="Card image cap" style=" height:217px;">

                        <!--content-->
                        <div class="body">
                            <!--Title-->
                            <h4 class="title text-center">SMS Notification</h4>
                            <hr>
                            <!--Text-->
                            <p class="text">SMS notification for seasonal diseases</p>
                        </div>
                          </div>

                      </div>
                      <!--/.Card-->

                  <!--Second columnn-->

                  <!--Third columnn-->
                  <div class="col-lg-3 mb-r">
                      <!--Card-->
                      <div class="wow fadeIn" data-wow-delay="0.4s">

                        <!--image-->
                        <img class="img-fluid" src="img/component/ehealth.png" alt="Card image cap" style="width:217px;height:217px;">

                        <!--content-->
                        <div class="body">
                            <!--Title-->
                            <h4 class="title text-center">E-Health Advice</h4>
                            <hr>
                            <!--Text-->
                            <p class="text">SMS notification for seasonal diseases</p>
                        </div>
                      </div>
                      <!--/.Card-->
                  </div>
                  <!--Third columnn-->

                  <!--First columnn-->
                  <div class="col-lg-3 mb-r">
                      <!--Card-->
                      <div class="wow fadeIn" data-wow-delay="0.6s">

                        <!--image-->
                        <img class="img-fluid" src="img/component/viewing.png" alt="Card image cap" style="width:217px;height:217px;">

                        <!--content-->
                        <div class="body">
                            <!--Title-->
                            <h4 class="title text-center">E-Health Advice</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">Easy viewing of personal records, available medicine, and pending students for enrollment</p>

                        </div>

                          </div>

                      </div>
                      <!--/.Card-->
                  </div>
                  <!--First columnn-->
              </div>
            </div>
          </section>
          <!--/Section: Best features-->



                <!--Section: Personnel-->
                <section id="personnel" style="background-color:#f7f7f7;">
                  <div class="container" >
                <div class="divider-new pt-5">
                    <h2 class="h2-responsive wow fadeIn">Clinic Personnel</h2>
                </div>

                    <div class="row pt-3">

                                      <!--First columnn-->
                                      <div class="col-lg-3 mb-r">

                                        <!--Card-->
                                      <div class="card wow fadeIn">

                                          <!--Card image-->
                                          <div class="view overlay hm-white-slight">
                                              <img src="img/component/1.jpg" class="img-fluid" alt="" style="width:100%;">

                                                  <div class="mask"></div>

                                          </div>

                                          <!--Card content-->
                                          <div class="card-body">
                                              <!--Title-->
                                                 <center><h4 class="card-title"><strong>Jesza Bada</strong></h4>
                                                        <h5 class="indigo-text"><strong>Nurse</strong></h5></center>

                                              <!--Text-->
                                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                          </div>

              </div>
              <!--/.Card-->
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->

                        <!--Second columnn-->
                        <div class="col-lg-3 mb-r">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.2s">

                                <!--Card image-->
                                  <img src="img/component/1.jpg" class="img-fluid" alt="" style="width:100%;">
                                  <!--Card content-->
                                  <div class="card-body">
                                      <!--Title-->
                                         <center><h4 class="card-title"><strong>Jesza Bada</strong></h4>
                                                <h5 class="indigo-text"><strong>Nurse</strong></h5></center>

                                      <!--Text-->
                                      <p class="card-text">Lorem ipsum dolor sit amet, zril civibus dissentiunt no mea, usu meis volutpat id. </p>
                                  </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--Second columnn-->

                        <!--Third columnn-->
                        <div class="col-lg-3 mb-r">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.4s">

                                <!--Card image-->
                                      <img src="img/component/1.jpg" class="img-fluid" alt="" style="width:100%;">
                                      <!--Card content-->
                                      <div class="card-body">
                                          <!--Title-->
                                             <center><h4 class="card-title"><strong>Jesza Bada</strong></h4>
                                                    <h5 class="indigo-text"><strong>Nurse</strong></h5></center>

                                          <!--Text-->
                                          <p class="card-text">Lorem ipsum dolor sit amet, zril civibus dissentiunt no mea, usu meis volutpat id. </p>
                                      </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--Third columnn-->

                        <!--First columnn-->
                        <div class="col-lg-3 mb-r">
                            <!--Card-->
                            <div class="card wow fadeIn" data-wow-delay="0.6s">

                                <!--Card image-->
                                  <img src="img/component/1.jpg" class="img-fluid" alt="" style="width:100%;">
                                  <!--Card content-->
                                  <div class="card-body">
                                      <!--Title-->
                                         <center><h4 class="card-title"><strong>Jesza Bada</strong></h4>
                                                <h5 class="indigo-text"><strong>Nurse</strong></h5></center>

                                      <!--Text-->
                                      <p class="card-text">Lorem ipsum dolor sit amet, zril civibus dissentiunt no mea, usu meis volutpat id. </p>
                                  </div>

                            </div>
                            <!--/.Card-->
                        </div>
                        <!--First columnn-->
                    </div>
                  </div>
                </section>
                <!--/Section: Best features-->


                <!--Section: About-->
              <div class="container" >
                <section id="about" class="text-center wow fadeIn" data-wow-delay="0.2s">

        <div class="divider-new pt-5">
            <h2 class="h2-responsive wow fadeIn" data-wow-delay="0.2s">About us</h2>
        </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit explicabo assumenda eligendi ex exercitationem harum deleniti quaerat beatae ducimus dolor voluptates magnam, reiciendis pariatur culpa tempore quibusdam quidem, saepe eius.</p>

        </section>
                  </div>

                  <br>
                  <br>
        <!--Section: About-->




    <!--/ Main container-->


    <!--Footer-->

    <footer class="page-footer center-on-small-only elegant-color-dark">

        <!--Footer Links-->

        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="https://www.facebook.com/iamjelaiszaa"> Jesza C. Bada </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>



    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>


</body>

</html>
