<?php
declare(strict_types=1);

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

//1
function new_exercise()
{
    $x = 1;
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

new_exercise();

// defined variable 1
// echo $block
// what I'm always doing wrong is call the function within the function shoul be outside see line 14

//2
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

//first element of array is 0 so if you want monday you should fill 0 in the array

//3
//echo ` "Debugged !" `
$str = '` "Debugged!"  ` . Also.very.fun';
echo substr($str, 0, 16);

//added some points, space and single quotes

// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);



/* print_r() displays information about a variable in a way that's readable by humans.
<?php
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
?>
return
Array
(
    [a] => apple
    [b] => banana
    [c] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )
)*/

// var_dump As with anything that outputs its result directly to the browser (think of pokephp)
// die/exit — Output a message and terminate the current script/ print a message and terminate the current script
/* echo Outputs all parameters. No additional newline is appended.
 The major differences to print are that echo accepts an argument list and doesn't have a return value*/

/* The break statement can also be used to jump out of a loop.
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?>*/
?>