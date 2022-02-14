<?php
    echo '1. Write a php script to display courses as list. Use <li>
    $courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")';
    $courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

    
    echo "<ul>";

    foreach ($courses as $value) { 
        echo "<li>$value</li>";
    }
    echo "</ul>";
    echo "<br>";

/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/
echo "<br>";
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[1]);
foreach ($courses1 as $course) {
    echo $course; 
    echo "<br>";
} 


/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
echo "<br>";
echo "a) ascending order sort by value";
echo "<br>";
$courses3=array("1"=>"PHP", "2"=>"HTML", "3"=>"JavaScript", "4"=>"CMS", "5"=>"Project");
asort($courses3);
foreach($courses3 as $course3_key => $course3_value) {
    echo "Course:" . $course3_key . ", Value:" . $course3_value;
    echo "<br>";
  }

echo "<br>";
echo "b) ascending order sort by key";
echo "<br>";
ksort($courses3);
foreach($courses3 as $course3_key => $course3_value) {
    echo "Course:" . $course3_key . ", Value:" . $course3_value;
    echo "<br>";
  }
echo "<br>";
echo "c) descending order sort by value";
echo "<br>";
arsort($courses3);
foreach($courses3 as $course3_key => $course3_value) {
    echo "Course:" . $course3_key . ", Value:" . $course3_value;
    echo "<br>";
  }
echo "<br>";
echo "d) descending order sort by key";
echo "<br>";
krsort($courses3);
foreach($courses3 as $course3_key => $course3_value) {
    echo "Course:" . $course3_key . ", Value:" . $course3_value;
    echo "<br>";
  }



/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/
echo "<br>";
echo "<br>";
echo "To uppercase:";
echo "<br>";
$courses4=array("php", "html", "javascript", "cms", "project");
$courses4 = array_map('strtoupper', $courses4);
foreach($courses4 as $course4) {
  echo $course4;
  echo "<br>";
}






// 5. Create an array that holds your favorite colors and print them. (indexed arrays)

echo "<br>";
echo "<br>";
echo "My favorite colors:";
echo "<br>";
echo "I like ";
$colors = array("cyan", "purple", "blue", "green", "black");
foreach ($colors as $color) {
  if($color == "black"){
    echo "and " . $color; 
    echo ".";
    break;
  } 
    echo $color; 
    echo ", ";
  } 

// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
echo "<br>";
echo "<br>";
echo "Colors with hex:";
echo "<br>";
$colorswithhex = array("cyan"=>"#00FFFF", "purple"=>"#A020F0", "blue"=>"#0000FF", "green"=>"#00FF00", "black"=>"#000000");
foreach($colorswithhex as $color => $hex_value) {
  echo "Color= " . $color . ", Hex value= " . $hex_value;
  echo "<br>";
}


// 7. Include 12 months in an array named month and print them using loop statement.
echo "<br>";
echo "<br>";
echo "Months:";
echo "<br>";
$month = array("January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December");
$arrayLength = count($month);
$x = 0;
while ($x < $arrayLength) {
  echo $month[$x] ."<br />";
  $x++;
}



/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
// explode(); is a function that creates an array of strings from a previously defined string separated by commas or newline chars
$temp_array = explode(',', $month_temp);
// creates an array $temp_array;
$tot_temp = 0;
// creates a variable $tot_temp and sets its value to 0;
// What is count?
// count(); is a function that counts the number of items in an array
$temp_array_length = count($temp_array);
// creates a variable $$temp_array_length equal to $temp_arrray length;
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
// loops through an array and adds temperatures to $tot_temp
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// calculates average temp
// what does sort do?
// sort(); sorts the array in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
// the variable $i is set to a value 5 lower than the length of the array and then increased each loop to print the last 5 items in the array
//as it is sorted from lowest to highest, this writes the highest temperatures
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>
