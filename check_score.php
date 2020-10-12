<?php 
/* 
   Final Project 
   check_score.php
 */
session_start();
$name = filter_input(INPUT_POST, 'name');

if($name == NULL)
{
	$error = "Name cannot be left blank.";
	include('highScores.php');
}

else
{
	require_once('database.php');


$score = 0;

//check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

		$name = $_POST['name'];	 
	    
		//score is stored as what the total correct score was on the results page.
        $score = $_SESSION['$total_score'];	   

mysqli_query($con, "INSERT INTO scores (ID, name, score)
	  VALUES ('null', '$name', '$score')");

 mysqli_close($con);
 
 include('highScores.php');
}
   ?>
 
