<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';

  for($i = 0; $i <= 10; $i++) {
    for($j = 0; $j <= 10; $j++) {
      echo $i . ' x ' . $j . ' = ' . ($i*$j) . '<br />';
    }
  }

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];
$foreachSum = 0;
$forSum = 0;

echo '<h4>* Using a Foreach loop</h4>';
  foreach($numbers as $number) {
    $foreachSum += $number;    
  }

echo $foreachSum;

echo '<h4>* Using a For loop</h4>';
  for($i=0; $i<sizeof($numbers); $i++){
    $forSum += $numbers[$i];
  }

echo $forSum;

/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  	1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
    3. Calculate the average grade of the students. 
*/

  echo '<h3>Average Grade</h3>';

  $students = [
    ['name' => 'chico', 'grade' => 10],
    ['name' => 'julia', 'grade' => 9],
    ['name' => 'leandro', 'grade' => 3],
    ['name' => 'roberta', 'grade' => 6],
    ['name' => 'mariana', 'grade' => 7]
  ];

  $gradesSum = 0;

  foreach($students as $student) {
    echo $student['name'] . ': ' . $student['grade'] . '<br />';
    $gradesSum += $student['grade'];
  }
  
  $average = $gradesSum / count($students);

  echo '<br /> Average: ' . $average;