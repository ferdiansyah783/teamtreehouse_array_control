<?php
function b(){echo PHP_EOL;};
// $score=55;
// if($score>=60){
//     echo "you win";
// }elseif($score>=50 || $score<60){
//     echo "please try againts";
// }else{
//     echo "you lose";
// }


// function grade($grade){
//     if($grade>95){
//         echo "A";
//     }elseif($grade>75 && $grade<=95){
//         echo "B";
//     }elseif($grade>=65 && $grade<=75){
//         echo "C";
//     }else{
//         echo "D";
//     }
// }
// print_r(grade(60));

//not equal
var_dump((1<>2));//true
var_dump((1!=2));//true

//identical
var_dump(1==="1");//false

b();
$num=1001;

if($num>=1000){
    if($num<=1000){
        echo "your number is in range";
    }else{
        echo "your number is greater then 1000";
    }
}else{
    echo "your number is not in range";
}

var_dump(($number=true) || (false && true));
//
b();

switch(date('l')){
    case "monday":
        echo "starting day";
    break;
    case "tuesday":
        echo "wash car";
    break;
    case "wednesday":
        echo "holiday";
    break;
    case "thursday":
        echo "vacation";
    break;
    case "friday":
        echo "day off";
    break;
    case "saturday":
        echo "free day";
    break;
    default:
    echo "long holiday";
}
//
b();

$data=["huda","ferdi","zanuk"];
$musisi=implode("\n",$data);//array-> string
echo $musisi;

$musisi_arr=explode("\n",$musisi);//string-> array
print_r($musisi_arr);
//
b();

$fname= 'alen';
$lname= 'holigan';
$currenGrade= 9;
$finalAverage= 0;
$messageBody= '';

if($fname || $lname){
    echo "please enter a student name";
}elseif($currentGrade<9 || $currentGrade>12){
    echo "this is only for highschool student,please enter a grade betwen 9 and 10";
}else{

}