<?php
include_once 'databaseFiles/dbconfig.php';
// sql query execution function

if(isset($_POST['btn-save']))
{
 // variables for input data
 $username = $_POST['username'];
 $password = $_POST['password'];
 $fullname = $_POST['fullname'];
 $address  = $_POST['address'];
 $contact  = $_POST['contact'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO accounts(username,password,fullname,address,contact)
 VALUES('$username','$password','$fullname','$address','$contact')";

 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='sample.php';
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
 $sql_query="DELETE FROM accounts WHERE accounts=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition


?>




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
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


    <script type="text/javascript">

    function delete_id(id)
    {
    	if(confirm('Sure to Delete ?'))
    	{
    		window.location.href='sample.php?delete_id='+id;
    	}
    }
    </script>

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image="">

            <div class="logo">
                <a href="" class="simple-text">
                    Administrator
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="announcement.php">
                            <i class="material-icons">dashboard</i>
                            <p>Announcement</p>
                        </a>
                    </li>

                    <li class=" active dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class=" notification">Record</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="addrecord.php">Add Record</a>
                            </li>
                            <li>
                                <a href="search.php">Search Record</a>
                              </li>
                        </ul>
                    </li>


                    <li>
                        <a href="./table.html">
                            <i class="material-icons">content_paste</i>
                            <p>E-Health Advice</p>
                        </a>
                    </li>
                    <li>
                        <a href="iinventory.php">
                            <i class="material-icons">content_paste</i>
                            <p>Inventory</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
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
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>




            <div class="content">
                <div class="container-fluid">



  <h2 class="text-center font-bold pt-4 pb-5 mb-5"><strong>Registration form with steps</strong></h2>

  <div class="steps-form-2">
      <div class="steps-row-2 setup-panel-2 d-flex justify-content-between">
          <div class="steps-step-2">
              <a href="#step-4" type="button" class="btn btn-amber btn-circle-2 waves-effect ml-0" data-toggle="tooltip" data-placement="top" title="Basic Information"><i class="fa fa-folder-open-o" aria-hidden="true"></i></a>
          </div>
          <div class="steps-step-2">
              <a href="#step-5" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Personal Data"><i class="fa fa-pencil" aria-hidden="true"></i></a>
          </div>
          <div class="steps-step-2">
              <a href="#step-6" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect" data-toggle="tooltip" data-placement="top" title="Terms and Conditions"><i class="fa fa-photo" aria-hidden="true"></i></a>
          </div>
          <div class="steps-step-2">
              <a href="#step-7" type="button" class="btn btn-blue-grey btn-circle-2 waves-effect mr-0" data-toggle="tooltip" data-placement="top" title="Finish"><i class="fa fa-check" aria-hidden="true"></i></a>
          </div>
      </div>
  </div>

  <form role="form" action="" method="post">
      <div class="row setup-content-2" id="step-4">
          <div class="col-md-12">
              <h3 class="font-bold pl-0 my-4"><strong>Basic Information</strong></h3>
              <div class="form-group md-form">
                  <label for="yourEmail-2" data-error="wrong" data-success="right">Email</label>
                  <input id="yourEmail-2" type="email" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form">
                  <label for="yourUsername-2" data-error="wrong" data-success="right">Username</label>
                  <input id="yourUsername-2" type="text" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form mt-3">
                  <label for="yourPassword-2" data-error="wrong" data-success="right">Password</label>
                  <input id="yourPassword-2" type="password" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form mt-3">
                  <label for="repeatPassword-2" data-error="wrong" data-success="right">Repeat Password</label>
                  <input id="repeatPassword-2" type="password" required="required" class="form-control validate">
              </div>
              <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
          </div>
      </div>
      <div class="row setup-content-2" id="step-5">
          <div class="col-md-12">
              <h3 class="font-bold pl-0 my-4"><strong>Personal Data</strong></h3>
              <div class="form-group md-form">
                  <label for="yourName-2" data-error="wrong" data-success="right">First Name</label>
                  <input id="yourName-2" type="text" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form mt-3">
                  <label for="secondName-2" data-error="wrong" data-success="right">Second Name</label>
                  <input id="secondName-2" type="text" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form">
                  <label for="surname-2" data-error="wrong" data-success="right">Surname</label>
                  <input id="surname-2" type="text" required="required" class="form-control validate">
              </div>
              <div class="form-group md-form mt-3">
                  <label for="yourAddress-2" data-error="wrong" data-success="right">Address</label>
                  <textarea id="yourAddress-2" type="text" required="required" class="md-textarea validate"></textarea>
              </div>
              <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
              <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
          </div>
      </div>
      <div class="row setup-content-2" id="step-6">
          <div class="col-md-12">
              <h3 class="font-bold pl-0 my-4"><strong>Terms and conditions</strong></h3>
              <div class="form-group">
                  <input type="checkbox" id="checkbox111">
                  <label for="checkbox111">I agree to the terms and conditions</label>
              </div>
              <div class="form-group">
                  <input type="checkbox" id="checkbox112">
                  <label for="checkbox112">I want to receive newsletter</label>
              </div>
              <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
              <button class="btn btn-mdb-color btn-rounded nextBtn-2 float-right" type="button">Next</button>
          </div>
      </div>
      <div class="row setup-content-2" id="step-7">
          <div class="col-md-12">
              <h3 class="font-bold pl-0 my-4"><strong>Finish</strong></h3>
              <h2 class="text-center font-bold my-4">Registration completed!</h2>
              <button class="btn btn-mdb-color btn-rounded prevBtn-2 float-left" type="button">Previous</button>
              <button class="btn btn-success btn-rounded float-right" type="submit">Submit</button>
          </div>
      </div>
  </form>



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

    <script  src="assets/tab/js/index.js"></script>
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



// Tooltips Initialization
$(function () {
$('[data-toggle="tooltip"]').tooltip()
})

// Steppers
$(document).ready(function () {
var navListItems = $('div.setup-panel-2 div a'),
allWells = $('.setup-content-2'),
allNextBtn = $('.nextBtn-2'),
allPrevBtn = $('.prevBtn-2');

allWells.hide();

navListItems.click(function (e) {
e.preventDefault();
var $target = $($(this).attr('href')),
$item = $(this);

if (!$item.hasClass('disabled')) {
navListItems.removeClass('btn-amber').addClass('btn-blue-grey');
$item.addClass('btn-amber');
allWells.hide();
$target.show();
$target.find('input:eq(0)').focus();
}
});

allPrevBtn.click(function(){
var curStep = $(this).closest(".setup-content-2"),
curStepBtn = curStep.attr("id"),
prevStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

prevStepSteps.removeAttr('disabled').trigger('click');
});

allNextBtn.click(function(){
var curStep = $(this).closest(".setup-content-2"),
curStepBtn = curStep.attr("id"),
nextStepSteps = $('div.setup-panel-2 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
curInputs = curStep.find("input[type='text'],input[type='url']"),
isValid = true;

$(".form-group").removeClass("has-error");
for(var i=0; i< curInputs.length; i++){
if (!curInputs[i].validity.valid){
isValid = false;
$(curInputs[i]).closest(".form-group").addClass("has-error");
}
}

if (isValid)
nextStepSteps.removeAttr('disabled').trigger('click');
});

$('div.setup-panel-2 div a.btn-amber').trigger('click');
});


</html>





<div class="col-md-2">
  <label class="control-label">Heent</label>
  <input type="text" class="form-control">
</div>

<div class="col-md-2">
<label class="control-label">Heent</label>
<input type="text" class="form-control">
</div>

<div class="col-md-2">
<label class="control-label">Heent</label>
<input type="text" class="form-control">
</div>

<div class="col-md-2">
<label class="control-label">Heent</label>
<input type="text" class="form-control">
</div>

<div class="col-md-2">
<label class="control-label">Heent</label>
<input type="text" class="form-control">
</div>
