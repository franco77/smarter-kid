<?php 
/* 
   Final Project 
   highScores.php
 */
session_start();
require('database.php');

 $name = "";
 $total_score = 0;
 $total_score = $_SESSION['$total_score'];
 
 //getting the high scores 
 $query = "select * from scores ORDER BY score DESC";
	
 $scores = mysqli_query($con, $query);
 
 $error = "";
?>



 <!DOCTYPE html>

<html lang="en">
<head>
  <title>Are you Smarter Game</title>
  <link rel="stylesheet" type="text/css" href="highScores.css" />
  <link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">  <!-- To use the school bell google font -->
 </head>
 
 <body>
 <div class="body">
<header>Are you Smarter Than A Child Game</header>

 <h2>High Scores</h2>
 <table>
 <tr>
   <th>Name</th>
   <th>Score</th>
 </tr>

 <?php

 while ($row = $scores->fetch_assoc())
{
   echo"<tr><td>". $row['Name'] . "</td><td>".  $row['score']."</td></tr>";
} 
		
  echo $error;
?>
 </table><br>
 
 <form action="check_score.php" method="post">
 <p>Please enter your name and you will be added to the high score list</p><br>
 <input type="text" placeholder="Name" name="name">
 <input type="submit" value="Enter" id="enter"><br><br>
 <a href="index.php" class="button">Play Again!</a>
 </form>
 </body>
 </html>
