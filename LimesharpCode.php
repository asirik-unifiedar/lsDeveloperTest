<?php
/*
* Limesharp Developer Test
*
* Developer: asirik
* Linkedin: https://www.linkedin.com/in/asirik/
* 23-12-2023
*/


/*

Task 1:
Make this work (repeat 3 times the contents of an array):

*/

function repeat($varArray){

	$varImplodeVariable = implode($varArray);

	$myVariableLimesharp  = '';

	foreach ($varArray as $value) {

				$myVariableLimesharp .= $varImplodeVariable;
			}

	return str_split($myVariableLimesharp);

}

/*

Task 2:
Make this work (no vowels, lowercase except the first letter):

*/

function reformat($stringTextLimesharp){

    $myStringTest = ucfirst(strtolower($stringTextLimesharp));

    return str_ireplace(array('a','e','i','o','u'), '', $myStringTest);
}


/*

Task 3 (optional, for bonus points):
Make this work (without using any built in functions, only a for loop, return the next binary number in a string or as an array)

*/


function next_binary_number($myNumLimesharp)
{

	$l = count($myNumLimesharp);

	$counter = $l;


	for($i = $l - 1; $i >= 0 ; $i--){

		$counter = $i;

		if($myNumLimesharp[$i] == 0){

			$myNumLimesharp[$i] = 1;
			break;

		}else{

			$myNumLimesharp[$i] = 0;

		}


		if ($i < 0){

			$myNumLimesharp[$i] = 1;
		}

	}

	for($i = $counter - 1; $i >= 0; $i--){

		if($myNumLimesharp[$i] == 0){

			$myNumLimesharp[$i] = 0;

		}else{

			$myNumLimesharp[$i] = 1;

		}


	}
    
    $implodedMyvar = implode($myNumLimesharp);

    return str_split($implodedMyvar);


} 



//Task 1:. If we type in our console your function and repeat([1,2,3]) then the result should be [1,2,3,1,2,3,1,2,3]

print_r(repeat([1,2,3]));
echo '<br/>';


// Task 2: If we type in our console your function and reformat("liMeSHArp DeveLoper TEST") then the result should be Lmshrp dvlpr tst

echo reformat("liMeSHArp DeveLoper TEST");
echo '<br/>';



// Task 3: If we type in our console your function and next_binary_number([1,0,0,0,0,0,0,0,0,1]) then the result should look like 1,0,0,0,0,0,0,0,1,0 (or as an array).

// possible test cases:
// [1,0] => [1,1]
// [1,1] => [1,0,0]
// [1,1,0] => [1,1,1]
// [1,0,0,0,0,0,0,0,0,1] => [1,0,0,0,0,0,0,0,1,0]

echo '<pre>';
print_r(next_binary_number([1,1]));
echo '<pre/>';

echo '<pre>';
print_r(next_binary_number([1,0,0]));
echo '<pre/>';

echo '<pre>';
print_r(next_binary_number([1,1,1]));
echo '<pre/>';

echo '<pre>';
print_r(next_binary_number([1,0,0,0,0,0,0,0,0,1]));
echo '<pre/>';

