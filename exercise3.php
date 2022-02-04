<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    /*
        1st exercise:
    */
    echo "<br>";
    $date = date("F");
   if($date == "August")
    {echo "It's August, so it's still holiday.";}
   else
   {echo "Not August, this is " . $date . " so i don't have any holidays";}
    /*
        2nd exercise:
        
    */
    $color = "red";
    if($color == "red")
        echo "<br> The color is red.";
    else
        echo "<br> The color is not red."; 
        ?>
        <? 
    /*
        3rd exercise:
        
    */
    echo "<br>"; 
    $coursework =80;
    if ($coursework>=80) {
        echo 'Excellent';
    } elseif ($coursework>=70 && $coursework<=80) { 
        echo 'Great'; 
        } elseif ($coursework>=60 && $coursework<=70) { 
            echo 'Good';  
            } elseif ($coursework>=50 && $coursework<=60) { 
                echo 'Pass';
             } else { echo 'Fail';}
    echo "<br>";
    ?>
     <!--
        4th exercise:
    -->
    <p>Form with example name and age (Fill out to get a correct result)</p>
    <form name="form" action="" method="get">
        <input type="text" name="age" value="age"/>
        <input type="text" name="name" value="name"/>
        <input type="submit" name="form_submit_button" 
           value="Submit your data"/>
</form>
    <? 
    $age = $_GET['age'];
    $name = $_GET['name'];
    if($age >= 18)
        {echo "<br>" . $name . ", you are eligible for voting.";}
    else
        {echo "<br>" . $name . ", you are not eligible for voting.";}
        ?>
    <?
    /*   
        5th exercise:
        
    */  
    echo "<br>" . "<br>";  
    for($i=8;$i>=0;$i--){  
        for($j=1;$j<=$i;$j++){  
        echo $j;  
        }  
        echo "<br>";  
        }  
    /*
        6th exercise:
        
    */  
    echo "<br>"; 
    $num = 1;
    while($num <= 8) {
        echo str_repeat("*", $num);
        echo "<br>";  
        $num++;
      }
      
    ?>
    <!--
        Webpage:
    -->
    <p>https://github.com/jskodova/Web-programming-project</p>
</body>
</html>