<?php 
/* 
   Final Project 
   results.php
 */
   
 session_start();
 require_once('database.php');
 
 //check for errors 
 if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
 //number of answers correct
$total_win = 0;

//number of answers incorrect 
$total_loss = 0;

//the value of the points based off the questions 
$ptVal = 0;

//the 5 different questions 
$quesID1 = $quesID2 = $quesID3 = $quesID4 = $quesID5 = "";
 
     //importing the previous grade and category choices 
    $grade = $_SESSION['grade'];
    $category = $_SESSION['category'];

     //check the answer box 
	 $input1 = filter_input(INPUT_POST, 'input1');
     $input2 = filter_input(INPUT_POST, 'input2');
	 $input3 = filter_input(INPUT_POST, 'input3');
	 $input4 = filter_input(INPUT_POST, 'input4');
	 $input5 = filter_input(INPUT_POST, 'input5');
	 
	 //if empty the variable will say the user left it blank because sometimes you do not know 
	 //the answer and I didn't want to punish someone where they couldn't continue. 
	 if($input1 == NULL || $input2 == NULL || $input3 == NULL || $input4 == NULL || $input5 == NULL)
		{
           $input1 = "Left blank";
		   $input2 = "Left blank";
		   $input3 = "Left blank";
		   $input4 = "Left blank";
		   $input5 = "Left blank";
		}
//function to retrieve the exact question ID from the table to store the user's answers in 
function retrieveQuesID($grade, $category, $start, &$quesID1, &$quesID2, &$quesID3, &$quesID4,  &$quesID5)
{
	$quesID1 = $start;
	$quesID2 = $start + 1;
	$quesID3 = $start + 2;
	$quesID4 = $start + 3;
	$quesID5 = $start + 4;
	
}
      //assigning the proper question IDs based on grade level and category chosen 
	  /*****************************************************************************************/
	  //1st Grade and English/Literature Category 
      if($grade == 1 && $category == 1)
	  {
		  retrieveQuesID($grade, $category, 1, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //2nd Grade and English/Literature Category 
	   if($grade == 2 && $category == 1)
	  {
		  retrieveQuesID($grade, $category, 6, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //3rd Grade and English/Literature Category 
	   if($grade == 3 && $category == 1)
	  {
		  retrieveQuesID($grade, $category, 11, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //4th Grade and English/Literature Category 
	   if($grade == 4 && $category == 1)
	  {
		  retrieveQuesID($grade, $category, 16, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //5th Grade and English/Literature Category 
	   if($grade == 5 && $category == 1)
	  {
		  retrieveQuesID($grade, $category, 21, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  /*****************************************************************************************/
	  
	  //1st Grade and History Category
	  if($grade == 1 && $category == 2)
	  {
		  retrieveQuesID($grade, $category, 26, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //2nd Grade and History Category
	   if($grade == 2 && $category == 2)
	  {
		  retrieveQuesID($grade, $category, 31, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //3rd Grade and History Category
	   if($grade == 3 && $category == 2)
	  {
		  retrieveQuesID($grade, $category, 36, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //4th Grade and History Category
	   if($grade == 4 && $category == 2)
	  {
		  retrieveQuesID($grade, $category, 41, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //5th Grade and History Category
	   if($grade == 5 && $category == 2)
	  {
		  retrieveQuesID($grade, $category, 46, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  /*****************************************************************************************/
	  
	  //1st Grade and Science Category
	  if($grade == 1 && $category == 3)
	  {
		  retrieveQuesID($grade, $category, 51, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //2nd Grade and Science Category
	   if($grade == 2 && $category == 3)
	  {
		  retrieveQuesID($grade, $category, 56, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //3rd Grade and Science Category
	   if($grade == 3 && $category == 3)
	  {
		  retrieveQuesID($grade, $category, 61, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //4th Grade and Science Category
	   if($grade == 4 && $category == 3)
	  {
		  retrieveQuesID($grade, $category, 66, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //5th Grade and Science Category
	   if($grade == 5 && $category == 3)
	  {
		  retrieveQuesID($grade, $category, 71, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  /*****************************************************************************************/
	  
	  //1st Grade and Geography Category
	  if($grade == 1 && $category == 4)
	  {
		  retrieveQuesID($grade, $category, 76, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //2nd Grade and Geography Category
	   if($grade == 2 && $category == 4)
	  {
		  retrieveQuesID($grade, $category, 81, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //3rd Grade and Geography Category
	   if($grade == 3 && $category == 4)
	  {
		  retrieveQuesID($grade, $category, 86, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //4th Grade and Geography Category
	   if($grade == 4 && $category == 4)
	  {
		  retrieveQuesID($grade, $category, 91, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  //5th Grade and Geography Category
	   if($grade == 5 && $category == 4)
	  {
		  retrieveQuesID($grade, $category, 96, $quesID1, $quesID2, $quesID3, $quesID4, $quesID5);
	  }
	  
	  /*****************************************************************************************/
	  

//assigning the point value to whatever the grade is.
//for ex, grade 1 = 1pt/question 
$ptVal = $grade;

//storing the previous grade name and category 
 $gradeName = $_SESSION['$gradeName'];
 $catName = $_SESSION['$catName'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Are you Smarter Game</title>
  <link rel="stylesheet" type="text/css" href="results.css" />
  <link href="https://fonts.googleapis.com/css?family=Schoolbell" rel="stylesheet">  <!-- To use the school bell google font -->
 </head>
 
 <body>
 <div class="body">
 <form action="#" method="post">
 <h1>Are you Smarter Than A Child Game</h1>
 <p>You chose <?php echo $gradeName ?> and <?php echo $catName ?></p>
	<?php

    //storing the user input in the user answers part of the questions table so that it can be compared against the right answer 
	$query1 = "UPDATE questions SET userAnswer= '$input1' WHERE gradeID = '$grade' and catID = '$category' and quesID = '$quesID1' ";
    mysqli_query($con, $query1);
	
	$query2 = "UPDATE questions SET userAnswer= '$input2' WHERE gradeID = '$grade' and catID = '$category' and quesID = '$quesID2' ";
    mysqli_query($con, $query2);
	
	$query3 = "UPDATE questions SET userAnswer= '$input3' WHERE gradeID = '$grade' and catID = '$category' and quesID = '$quesID3' ";
    mysqli_query($con, $query3);
	
	$query4 = "UPDATE questions SET userAnswer= '$input4' WHERE gradeID = '$grade' and catID = '$category' and quesID = '$quesID4' ";
    mysqli_query($con, $query4);
	
	$query5 = "UPDATE questions SET userAnswer= '$input5' WHERE gradeID = '$grade' and catID = '$category' and quesID = '$quesID5' ";
    mysqli_query($con, $query5);
    
	//retrieving the correct answer and the user answer that was previously stored to compare them. 
    $qry3 = "SELECT `answer`, `userAnswer` FROM `questions` WHERE gradeID = '$grade' and catID = '$category'";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	$i = 1;
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) 
	{
	 //converting both user answer and correct answer to lowercase to remove any case-sensitive incorrect answers 
     if(strtolower($row3['answer']) == strtolower($row3['userAnswer']))
	 {
	     echo nl2br($i . ") Correct!\n");
		 echo nl2br("Your answer was: " . $row3['userAnswer']. "\n");
		 echo nl2br("Correct answer is: " . $row3['answer']. "\n");
		 $total_win += $ptVal;
	 }
	 
	 else 
	 {
		 echo nl2br($i . ") Incorrect!\n");
		 echo nl2br("Your answer was: " . $row3['userAnswer']. "\n");
		 echo nl2br("Correct answer is: " . $row3['answer']. "\n");
		 $total_loss += $ptVal;
	 }
	 echo nl2br("\n");
	 $i++;
	}?>
	<h3>Score</h3>
   <div class = "score">
   <label for="win">Wins:</label>
   <input type="text" id="win" disabled value="<?php echo $total_win; ?>">&nbsp;&nbsp;
  
  <label for="loss">Losses:</label>
  <input type="text" id="loss" disabled value="<?php echo $total_loss; ?>">
  </div>
  
<?php 
    //store the total questions correct in the $total_score and then store that in a session to 
	//use it in the next file 
   $total_score = $total_win; 
   $_SESSION['$total_score'] = $total_score;
 
  ?>

   <h3>Would you like to enter your name and view the high scores?</h3>
   <div class = "center">
<a href="highScores.php" class="button">Yes!</a>
<a href="index.php" class="button">Return to Game</a>
</div>
 </form>
</div>
 </body>
 </html>
