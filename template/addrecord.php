<?php
include_once 'databaseFiles/dbconfig.php';
// sql query execution function

if(isset($_POST['btn-save']))
{
 // variables for input data

//information
 $username = $_POST['username'];
 $password = $_POST['password'];
 $fullname = $_POST['fullname'];
 $course = $_POST['course'];
 $age= $_POST['age'];
 $sex = $_POST['sex'];
 $birthday = $_POST['birthday'];
 $status = $_POST['status'];
 $address = $_POST['address'];
 $contact= $_POST['contact'];

//history and emergency
 $history = $_POST['history'];
 $accident= $_POST['accident'];
 $accidentdate = $_POST['accidentdate'];
 $e_name = $_POST['e_name'];
 $e_relationship = $_POST['e_relationship'];
 $e_address = $_POST['e_address'];
 $e_contact= $_POST['e_contact'];

//physical examination
 $pe_bp = $_POST['pe_bp'];
 $pe_bmi= $_POST['pe_bmi'];
 $pe_chest = $_POST['pe_chest'];
 $pe_cr = $_POST['pe_cr'];
 $pe_temp = $_POST['pe_temp'];
 $pe_heart = $_POST['pe_heart'];
 $pe_rr = $_POST['pe_rr'];
 $pe_activity= $_POST['pe_activity'];
 $pe_abdomen = $_POST['pe_abdomen'];
 $pe_weight= $_POST['pe_weight'];
 $pe_skin = $_POST['pe_skin'];
 $pe_extremities = $_POST['pe_extremities'];
 $pe_height = $_POST['pe_height'];
 $pe_heent = $_POST['pe_heent'];
 $pe_others= $_POST['pe_others'];
 $examinedby= $_POST['examinedby'];


 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO accounts(username,password,fullname,course,age,sex,birthday,status,address,contact,history,accident,accidentdate,e_name,e_relationship,e_address,e_contact,
   pe_bp,pe_bmi,pe_chest,pe_cr,pe_temp,pe_heart,pe_rr,pe_activity,pe_abdomen,pe_weight,pe_skin,pe_extremities,pe_height,pe_heent,pe_others,examinedby)
 VALUES('$username','$password','$fullname','$course','$age','$sex','$birthday','$status','$address','$contact','$history','$accident','$accidentdate','$e_name','$e_relationship','$e_address','$e_contact',
   '$pe_bp','$pe_bmi','$pe_chest','$pe_cr','$pe_temp','$pe_heart','$pe_rr','$pe_activity','$pe_abdomen','$pe_weight','$pe_skin','$pe_extremities','$pe_height','$pe_heent','$pe_others','$examinedby')";

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='addrecord.php';
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

}
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM account WHERE account=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition


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
                  <li>
                      <a href="announcement.php">
                        <i class="material-icons">event_note</i>
                          <p>Announcement</p>
                      </a>
                  </li>

                  <li class="dropdown active" >
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#00695c;">

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
                      <form method="post">
                            <div class="card">
                                <div class="card-header" style="background-color:#2BBBAD;">
                                    <h4 class="title">Patient Record</h4>
                                    <p class="category">Please complete record</p>
                                </div>
                                <div class="card-content">

                                  <!--<div class="row">
                                      <div class="col-md-8">


                                          <div class="form-group label-floating">
                                              <label class="control-label">Username</label>
                                              <input type="text" name="username" class="form-control">
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group label-floating">
                                              <label class="control-label">Password</label>
                                              <input type="password" name="password" class="form-control">
                                          </div>
                                      </div>
                                  </div>-->

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Full Name</label>
                                                    <input type="text" name="fullname" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Course</label>
                                                    <input type="text" name="course" class="form-control">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Age</label>
                                                    <input type="text" name="age" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Sex</label>
                                                    <input type="text" name="sex" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Birthday</label>
                                                    <input type="text" name="birthday" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Status</label>
                                                    <input type="text" name="status" class="form-control">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Present Address</label>
                                                    <input type="text" name="address" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tel/Cell #</label>
                                                    <input type="text" name="contact" class="form-control">
                                                </div>
                                            </div>
                                        </div>




                                                                                  <h5><strong>Medical History</strong><h5>


                                                                                    <div class="row">
                                                                                        <div class="col-md-4">

                                                                                            <!--Radio group-->
                                                                                            <div class="form-group" name="history">
                                                                                                <input name="group100" type="radio" id="radio100"  name="history" value="Allergy">
                                                                                                <label for="radio100">Allergy</label>

                                                                                  <br>
                                                                                                <input name="group100" type="radio" id="radio101" checked>
                                                                                                <label for="radio101">Bornchial Asthma</label>


                                                                                  <br>
                                                                                                <input name="group100" type="radio" id="radio102">
                                                                                                <label for="radio102">Chicken Pox</label>

                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio100">
                                                                                                <label for="radio100">Diabetes</label>

                                                                                                <br>
                                                                                                    <input name="group100" type="radio" id="radio101" checked>
                                                                                                    <label for="radio101">Epilepsy</label>
                                                                                                <br>
                                                                                                    <input name="group100" type="radio" id="radio102">
                                                                                                    <label for="radio102">Heart Disorder</label>
                                                                                          </div>
                                                                                        </div>

                                                                                        <div class="col-md-4">

                                                                                            <!--Radio group-->
                                                                                            <div class="form-group ">
                                                                                                <input name="group100" type="radio" id="radio100">
                                                                                                <label for="radio100">Hepatitis</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio101" checked>
                                                                                                <label for="radio101">Hypertension</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio102">
                                                                                                <label for="radio102">Measles</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio100">
                                                                                                <label for="radio100">Mumps</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio101" checked>
                                                                                                <label for="radio101">Nervous Disorder</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio102">
                                                                                                <label for="radio102">Dysmenorrhea</label>

                                                                                            <!--Radio group-->
                                                                                        </div>
                                                                                      </div>

                                                                                        <div class="col-md-4">
                                                                                            <div class="form-group ">
                                                                                                <input name="group100" type="radio" id="radio100">
                                                                                                <label for="radio100">Pneumonia</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio101" checked>
                                                                                                <label for="radio101">Tubercolosis</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio102">
                                                                                                <label for="radio102">Urinary Tract Infection</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio100">
                                                                                                <label for="radio100">Typhoid Fever</label>
                                                                                                <br>
                                                                                                <input name="group100" type="radio" id="radio101" checked>
                                                                                                <label for="radio101">Others</label>
                                                                                            </div>

                                                                                        </div>
                                                                                      </div>




                                        <br>

                                                                                      <label for="defaultForm-email" style="color:black;">1.Have you had any accident/operation in the past?</label>
                                                                                      <div class="row">

                                                                                        <div class="col-md-5">
                                                                                      <input type="text" id="defaultForm-email" class="form-control" name="accident">
                                                                                    </div>

                                                                                    <div class="col-md-7">

                                                                                    </div>

                                                                                    </div>



                                                                                      <label for="defaultForm-email" style="color:black;">2.If yes, state the nature of accident/operation</label>
                                                                                      <div class="row">

                                                                                        <div class="col-md-5">
                                                                                      <input type="text" id="defaultForm-email" class="form-control"  name="accidentdate">
                                                                                    </div>

                                                                                    <div class="col-md-7">

                                                                                    </div>

                                                                                    </div>


                                        <br>
                                                                                <p>Person to be notified in cas of emergency</p>

                                                                                  <div class="row">
                                                                                    <div class="col-md-8">
                                                                                        <div class="form-group label-floating">
                                                                                            <label class="control-label">Name</label>
                                                                                            <input type="text" class="form-control" name="e_name">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="form-group label-floating">
                                                                                            <label class="control-label">Relationship</label>
                                                                                            <input type="text" class="form-control" name="e_relationship">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                  <div class="col-md-8">
                                                                                      <div class="form-group label-floating">
                                                                                          <label class="control-label">Address</label>
                                                                                          <input type="text" class="form-control" name="e_address">
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="col-md-4">
                                                                                      <div class="form-group label-floating">
                                                                                          <label class="control-label">Tel/Cel #</label>
                                                                                          <input type="text" class="form-control" name="e_contact">
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                                </div>
                                                                        </div>
<!--dito ulet-->




                                  <div class="card">
                                      <div class="card-header" style="background-color:#2BBBAD;">
                                          <h4 class="title">Add Record</h4>
                                          <p class="category">Complete record</p>
                                      </div>
                                      <div class="card-content">

                                              <div class="row">

                                                  <div class="col-md-2">
                                                      <div class="form-group label-floating">
                                                          <label class="control-label">BP</label>
                                                          <input type="text" name="pe_bp" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">BMI</label>
                                                          <input type="text" name="pe_bmi" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Chest/Lungs</label>
                                                          <input type="text" name="pe_chest" class="form-control">
                                                      </div>

                                                  </div>


                                                  <div class="col-md-2">
                                                      <div class="form-group label-floating">
                                                          <label class="control-label">CR</label>
                                                          <input type="text" name="pe_cr" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Temp</label>
                                                          <input type="text" name="pe_temp" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Heart</label>
                                                          <input type="text" name="pe_heart" class="form-control">
                                                      </div>

                                                  </div>

                                                  <div class="col-md-2">
                                                      <div class="form-group label-floating">
                                                          <label class="control-label">RR</label>
                                                          <input type="text" name="pe_rr" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Visual Activity</label>
                                                          <input type="text" name="pe_activity" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Abdomen</label>
                                                          <input type="text" name="pe_abdomen" class="form-control">
                                                      </div>

                                                  </div>

                                                  <div class="col-md-2">
                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Weight</label>
                                                          <input type="text" name="pe_weight" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Skin</label>
                                                          <input type="text" name="pe_skin" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Extremeties</label>
                                                          <input type="text" name="pe_extremities" class="form-control">
                                                      </div>

                                                  </div>

                                                  <div class="col-md-2">
                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Height</label>
                                                          <input type="text" name="pe_height" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Heent</label>
                                                          <input type="text" name="pe_heent" class="form-control">
                                                      </div>

                                                      <div class="form-group label-floating">
                                                          <label class="control-label">Others</label>
                                                          <input type="text" name="pe_others" class="form-control">
                                                      </div>

                                                  </div>
                                                </div>

                                  <br>
                                                <label style="color:black;">Examined by:</label>

                                                <div class="row">

                                                  <div class="col-md-5">
                                                <input type="text" id="defaultForm-email" name="examinedby" class="form-control">
                                              </div>


                                    </div>
                                <button type="submit" name="btn-save" class="btn btn-primary pull-right" style="background-color:#2BBBAD;">SAVE</button>
                                <div class="clearfix"></div>
                              </form>
                            </div>
                        </div>

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
