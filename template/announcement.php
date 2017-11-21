<?php
include_once 'databaseFiles/dbconfig.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $a_subject = $_POST['a_subject'];
 $a_content= $_POST['a_content'];

 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO tbl_announcement(a_subject,a_content)
 VALUES('$a_subject','$a_content')";

 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='announcement.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>GC Clinic</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link href="../assets/css/roboto.css" rel="stylesheet"  type='text/css'/>
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" >



</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="" class="simple-text">
                    Administrator
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active" >
                        <a href="announcement.php" style="background-color:#00695c;">
                          <i class="material-icons">event_note</i>
                            <p>Announcement</p>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="material-icons">insert_drive_file</i>
                            <span class="notification">Record</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li>

                                <a href="addrecord.php" >Add Record</a>
                            </li>
                            <li>
                                <a href="search.php">Search Record</a>
                              </li>
                        </ul>
                    </li>


                    <li>
                        <a href="./table.html">
                          <i class="material-icons">sms</i>
                            <p>E-Health Advice</p>
                        </a>
                    </li>
                    <li>
                        <a href="inventory.php">
                          <i class="material-icons">view_list</i>
                            <p>Inventory</p>
                        </a>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <i class="material-icons">insert_drive_file</i>
                            <span class="notification">Inventory2</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li>

                                <a href="daily.php" >Daily Monitoring</a>
                            </li>
                            <li>
                                <a href="monthly.php">Monthly Monitoring</a>
                              </li>
                        </ul>
                    </li>


                    <li>
                        <a href="students.php">
                            <i class="material-icons">folder</i>
                            <p>Reports</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Sample</a>
                                    </li>
                                    <li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../index.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form action="search.php" method="post" class="navbar-form navbar-right" role="search" >
                            <div class="form-group  is-empty">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>


                            <button type="submit"   a href="search.php" name="submit" value="search" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button></a>
                        </form>
                    </div>
                </div>
            </nav>


              <div class="content">
                  <div class="container-fluid">

                      <div class="card">
                          <div class="card-header" style="background-color:#2BBBAD;" >
                              <h4 class="title">Announcement</h4>

                          </div>
                          <div class="card-content">

                            <?php
                            $sql_query="SELECT * FROM tbl_announcement";
                            $result_set=mysql_query($sql_query);
                            while($row=mysql_fetch_row($result_set))
                            {
                             ?>

                                   Subject: <?php echo $row[1]; ?>
                                   <br>
                                   <br>

                                   Content: <?php echo $row[2]; ?>
                                    <br>

                                                  <?php
                            }
                            ?>
                          </div>


              </div>




                  </div>


                  <div class="card">
                      <div class="card-header" style="background-color:#2BBBAD;" >
                          <h4 class="title">Post Activities</h4>

                      </div>
                      <div class="card-content">
                          <form method="post">
                              <div class="row">



                                  <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Subject</label>
                                                <input type="text" name="a_subject" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-8">

                                        </div>
                                  </div>

                                <div class="row">
                                  <div class="col-md-12">

                                          <div class="form-group label-floating">
                                            <label class="control-label">Announcement</label>
                                            <textarea class="form-control" name="a_content" rows="5"></textarea>
                                          </div>
                                      </div>
                                  </div>

</div>

                              <button type="submit" name="btn-save" class="btn btn-default pull-right" style="background-color:#2BBBAD;">post</button>
                              <div class="clearfix"></div>


                          </form>
                      </div>


          </div>




      </div>





            <footer class="footer">
              <footer class="page-footer center-on-small-only elegant-color-dark">

                  <!--Footer Links-->

                  <div class="footer-copyright">
                      <div class="container-fluid">
                          © 2017 Copyright: <a href="https://www.facebook.com/iamjelaiszaa"> Jesza C. Bada </a>

                      </div>
                  </div>
                  <!--/.Copyright-->

              </footer>
            </footer>
        </div>
    </div>
</body>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap dropdown -->
<script type="text/javascript" src="js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>



<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>

<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>
