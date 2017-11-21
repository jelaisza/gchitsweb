<?php
include_once 'databaseFiles/dbconfig.php';
// sql query execution function

if(isset($_POST['btn-save']))
{
 // variables for input data
 $m_name = $_POST['m_name'];
 $m_purchasedqty = $_POST['m_purchasedqty'];
 $m_issueqty= $_POST['m_issueqty'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO tbl_medicine(m_name,m_purchasedqty,m_issueqty)
 VALUES('$m_name','$m_purchasedqty','$m_issueqty')";

 // sql query for inserting data into database

 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully ');
  window.location.href='inventory.php';
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
 $sql_query="DELETE FROM tbl_medicine WHERE tbl_medicine=".$_GET['delete_id'];
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


    <script type="text/javascript">

    function delete_id(id)
    {
    	if(confirm('Sure to Delete ?'))
    	{
    		window.location.href='inventory.php?delete_id='+id;
    	}
    }
    </script>

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
                  <li class="active">
                      <a href="inventory.php" style="background-color:#00695c;">
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

                                            <div class="card">
                                                <div class="card-header" style="background-color:#2BBBAD;">
                                                    <h4 class="title">Medicine Details</h4>
                                                    <p class="category"></p>
                                                </div>
                                                <div class="card-content table-responsive">
                                                    <table class="table table-hover">
                                                        <thead class="text-primary">
                                                            <th>Medicine Name</th>
                                                            <th>Quantity Acquired</th>
                                                            <th>Issued Quanity</th>
                                                            <th>Stock</th>
                                                            <th>Operations</th>

                                                        </thead>
                                                        <tbody>
                                                          <?php
                                                        	$sql_query="SELECT * FROM tbl_medicine";
                                                        	$result_set=mysql_query($sql_query);
                                                        	if(mysql_num_rows($result_set)>0)
                                                        	{
                                                                while($row=mysql_fetch_row($result_set))
                                                        		{
                                                        		?>
                                                                        <tr>
                                                                        <td><?php echo $row[1]; ?></td>
                                                                        <td><?php echo $row[2]; ?></td>
                                                                        <td><?php echo $row[3]; ?></td>
                                                                        <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
                                                                        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" />DELETE</a></td>
                                                                      </tr>
                                                                      <?php
                                                                    		}
                                                                    	}
                                                                    	else
                                                                    	{
                                                                    		?>
                                                                            <tr>
                                                                            <td colspan="5">No Data Found !</td>
                                                                            </tr>
                                                                            <?php
                                                                    	}
                                                                    	?>
                                                    </table>
                                                </div>

                                        </div>


                                        <div class="card">
                                            <div class="card-header" style="background-color:#2BBBAD;">
                                                <h4 class="title">Add Medicine Details</h4>
                                                <p class="category">Complete record</p>
                                            </div>
                                            <div class="card-content">
                                                <form method="post">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Medicine Name</label>
                                                                <input type="text" name="m_name" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>




                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Quantity Acquired</label>
                                                                <input type="text" name="m_purchasedqty" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Issue Quantity</label>
                                                                <input type="text" name="m_issueqty" class="form-control">
                                                            </div>
                                                        </div>

                                                    </div>
                                                                <button type="submit" name="btn-save" class="btn btn-default pull-right" style="background-color:#2BBBAD;">post</button>
                                                                <div class="clearfix"></div>


                                                                  </form>

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
