<?php

function inspect($array){
  echo '<pre>';
  print_r($array);
  echo '<pre>';
}

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/

echo '<h3>Sum Of An Array</h3>';

$numbers = [1,2,3,4,5];
$numbersSum = array_sum($numbers);
$numbersCount = count($numbers);

echo 'The sum of the ' . $numbersCount . ' numbers is: ' . $numbersSum; 

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

rsort($colors);

array_push($colors, 'purple');
array_push($colors, 'orange');

array_splice($colors, 1, 1, 'pink');

array_pop($colors);

inspect($colors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$jobs = [
  ['id' => 1, 
  'job_title' => 'Software Engineer', 
  'company' => 'Cactocoquetel', 
  'contact_email' => 'chico@gmail', 
  'contact_phone' => '51987654321', 
  'skills' => ['PHP', 'MySQL', 'Web Development']
  ],
  ['id' => 2, 
  'job_title' => 'DevOps Manager', 
  'company' => 'Netflix', 
  'contact_email' => 'prime@gmail', 
  'contact_phone' => '81999999999', 
  'skills' => ['DevOps', 'Docker', 'GitHub']
  ],
  ['id' => 3, 
  'job_title' => 'Frontend Developer', 
  'company' => 'Amazon', 
  'contact_email' => 'jeff@gmail', 
  'contact_phone' => '21900000000', 
  'skills' => ['React', 'JavaScript', 'Tailwind']
  ]
];

array_push($jobs, 
  ['id' => 4, 
  'job_title' => 'Android Developer', 
  'company' => 'Samsung', 
  'contact_email' => 'leon@gmail', 
  'contact_phone' => '31989021849', 
  'skills' => ['Android Studio', 'Kotlin', 'RESTful APIs']
]);

//inspect($jobs);

echo 'Second job title: ' . $jobs[1]['job_title'];
echo '<br />';
echo 'First skill of third job listing: ' . $jobs[2]['skills'][0]; 