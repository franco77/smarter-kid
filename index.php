<?php
/* Final Project 
   index.php
 */
   
session_start();
require_once('database.php');

//the dropdown box for grade level chosen 
$grade = 0;

//the name of the grade 
$gradeName = '';

//the dropdown box for category chosen 
$category = 0; 

//the name of the category
$catName = '';

//the 5 inputs for the 5 questions 
$input1 = $input2 = $input3 = $input4 = $input5 = "";

//the points value 
$ptVal = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Are you Smarter Game</title>
  <link rel="stylesheet" type="text/css" href="index.css" />
  <link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">  <!-- To use the school bell google font -->
 </head>
 
 <body>
 <div class="body">
 
 <form action="#" method="post">
 <h1>Are you Smarter Than A Child Game</h1>
 <p id="intro">Test your skills to see if you really are smarter than the average 
 elementary school child!<br>
 Pick your grade level, category to test in, then answer the 5 questions and hit submit!<br>
 The system will tally up your score and return the results.</p>
 <div class = "dropdown">
 <label for = "grade">Choose a grade level:</label>
 
 <!-- choosing the grade level -->
 <select name = "grade" id="grade">
 <option disabled selected value> -- select a grade -- </option>
   <option value = "1">1st Grade</option>
   <option value = "2">2nd Grade</option>
   <option value = "3">3rd Grade</option>
   <option value = "4">4th Grade</option>
   <option value = "5">5th Grade</option>
 </select>
 
 <!-- choosing the category -->
 <label for = "category">Choose a category:</label>
 <select name = "category" id="category">
 <option disabled selected value> -- select a category -- </option>
    <option value = "1">English/Literature</option>
	<option value = "2">History</option>
	<option value = "3">Geography</option>
	<option value = "4">Science</option>
 </select>
 
 <input type="submit" value="Submit" id="retrieve_ques">
 </div>
  <?php 
    //checking if a choice has been made 
    if(isset($_POST['grade']))
    {
     $grade = $_POST['grade'];
    }
 
   if(isset($_POST['category']))
   {
     $category = $_POST['category'];
   }
   
   //assigning the point value the grade number 
   $ptVal = $grade;

//assigning the grade name strings for output 
if($grade == 1)
{
	$gradeName = "1st Grade";
}

if($grade == 2)
{
	$gradeName = "2nd Grade";
}

if($grade == 3)
{
	$gradeName = "3rd Grade";
}
 
if($grade == 4)
{
	$gradeNsme = "4th Grade";
}

if($grade == 5)
{
	$gradeName = "5th Grade";
}

//assigning the category name strings for output
if($category == 1)
{
	$catName = "English/Literature";
}

if($category == 2)
{
	$catName = "History";
}

if($category == 3)
{
	$catName = "Geography";
}

if($category == 4)
{
	$catName = "Science";
}

//storing the category name and grade name for the next page 
$_SESSION['$gradeName'] = $gradeName;
$_SESSION['$catName'] = $catName;
	
//outputting your choices before the questions 
?>
<h4>You chose: <?php echo $gradeName ?> and <?php echo $catName ?><br>
Each question in this difficulty level is worth: <?php echo $ptVal ?> pts.</h4>
   
 <fieldset>
<legend>Questions:</legend>
<?php 
      //select all the questions that are from that grade level and category 
	  $query_ques = "select * from questions where catID = '$category' AND gradeID = '$grade'";
	
	  $question = mysqli_query($con, $query_ques);
	  
		 $i = 1;
		 while ($row = $question->fetch_assoc()) 
	    {
		   echo $i . "} " . $row['question']."<br>";
		   $i++;
        } 
	  
	  //store the grade and category choices in a session 
	  $_SESSION['grade'] = $grade;
	  $_SESSION['category'] = $category;
	  ?>
	  
</fieldset>
</form>
<br>
   
  
<div class = "answers">	  
<form action ="results.php" method = "post">
<h4>Your Answers:</h4>
<div class = "answerboxes">
<label for ="input1">1) </label>
<input type="text" name="input1" id="input1" placeholder="Question 1">
<label for ="input2">2)</label>
 <input type="text" name="input2" id="input2" placeholder="Question 2">
<label for = "input3">3)</label> 
<input type="text" name="input3" id="input3" placeholder="Question 3"><br>
</div>
<div class = "answerboxes2">
<label for="input4">4)</label>
 <input type="text" name="input4" id="input4" placeholder="Question 4">
<label for ="input5">5)</label> 
<input type="text" name="input5" id="input5" placeholder="Question 5"><br>
</div>
<input type="submit" value="Check" id="check_answ"><br>
</form>
</div>
</div>
 </body>
 </html>
