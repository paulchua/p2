<html>
<body>

<?php                                    

$numwords = $_POST["words"];

if($numwords > 0 && $numwords < 10) {
$random_index;
                                         
$password = "";                          
$wordarray = array(                      
    0 => "car",                          
    1 => "boat",                         
    2 => "train",
    3 => "bike",
    4 => "horse",
    5 => "rocket",
    6 => "ski",
    7 => "slippers",
    8 => "shoes",
    9 => "scooter",                        
);

$number_array = array(
    0 => "0",
    1 => "1",
    2 => "2",
    3 => "3",
    4 => "4",
    5 => "5",
    6 => "6",
    7 => "7",
    8 => "8",
    9 => "9",
);


$symbol_array = array(
    0 => "#",
    1 => "+",
    2 => "&",
    3 => "%",
    4 => "$",
);

for ($x = 0; $x <= $numwords-1; $x++) {            
$random_index = rand(0, $numwords-1);
$password = $password.$wordarray[$random_index].'-';
}                                


if(isset($_POST['box1']) && 
   $_POST['box1'] == 'yes') 
{
$random_index = rand (0, 4);
$password = $password.$symbol_array[$random_index];
}


if(isset($_POST['box2']) &&
   $_POST['box2'] == 'yes')
{
$random_index = rand (0, 9);
$password = $password.$number_array[$random_index];
}


echo "<p>your password is: ";
print_r($password);
echo "<br><br><hr>";
}





else {
echo "You did not enter a valid number between 1 and 9";
}
?>

<a href="index.php">Generate Another?</a>

</body>
</html>
