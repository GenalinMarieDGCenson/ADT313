<h1>Condition</h1>

<?php
$age = 17;
if($age >= 18) {
    echo "Legal age";
} else if ($age >= 0 && $age <=10){
    echo 'something';
} else {
echo "Minor";
}

//short-hand if condition
//(condition) ? true condition : else condition

echo($age >= 18) ? '18+' : '17-';
echo $ageLabel;

// DON'Ts


switch (expression) {
    case label1:
    //code block
    break;
    case label2:
    //code block;
    break;
    case label3:
    //code block
    break;
    default:
    //code block
