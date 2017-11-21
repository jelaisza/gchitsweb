<?php
  include("dbconfig.php");

	$m_id =$_REQUEST['m_id']; //get the id from the form in the index.php check line:40
	mysqli_query($conn,"DELETE FROM comment WHERE m_id = '$m_id'");  	// sending query
	header("Location: comment.php"); // redirect back to index.php
?>
