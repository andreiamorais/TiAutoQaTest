<?php 

echo "\n";
echo "**************  TRIANGLE SIDES **************";
echo "\n\n";

$pont1X = readline("Enter coordinate x of dot A: ");
echo "\n";
$pont1Y = readline("Enter coordinate y of dot A: ");
echo "\n\n";

$pont2X = readline("Enter coordinate x of dot B: ");
echo "\n";
$pont2Y = readline("Enter coordinate y of dot B: ");
echo "\n\n";

$pont3X = readline("Enter coordinate x of dot C: ");
echo "\n";
$pont3Y = readline("Enter coordinate y of dot C: ");
echo "\n\n";

/*
// Just to automatic test
$pont1X = 0;
$pont1Y = 0;
$pont2X = 0;
$pont2Y = 4;
$pont3X = 4;
$pont3Y = 0;
*/

$side1 = calculateSide($pont1X, $pont1Y, $pont2X, $pont2Y);
$side2 = calculateSide($pont2X, $pont2Y, $pont3X, $pont3Y);
$side3 = calculateSide($pont1X, $pont1Y, $pont3X, $pont3Y);

echo "Lenght of AB is: " .$side1; 
echo "\n";
echo "Lenght of BC is: " . $side2;
echo "\n";
echo "Lenght of AC is: " . $side3; 
echo "\n\n";

if( ($side1 == $side2) && ($side2 == $side3) ) {
	echo" IS Equilateral' ";

} else {
	echo"IS NOT 'Equilateral' ";
	echo"\n\n";

	if(($side1 == $side2) || ($side2 == $side3) || ($side1 == $side3)){
		echo"IS 'Isoceles'";
	

	}   else {
		echo"IS NOT 'Isoceles'";
		echo"\n\n";

		if(($side1 != $side2) && ($side2 != $side3)){
			echo"Is 'Escalene'";


		} else {
			echo"IS NOT 'Is 'Escalene'";
			echo"\n\n";
		}
	}
}

// Function to validade if is Right triangle
echo "\n\n";
if(isRight($side1, $side2, $side3)){
	echo "Triangle IS 'Right'";
} else {
	echo "Triangle IS NOT 'Right'";
}


// Function sum sides to show perimeter
echo "\n\n";
$trianglePerimeter = calculatePerimeter($side1, $side2, $side3);
echo "Perimeter: " . $trianglePerimeter;

echo "\n";
for ($i= 0; $i <= $trianglePerimeter; $i+=2) { 
	echo $i . "\n";
}

echo "\n\n";
echo "**************  TRIANGULE END  **************";

function calculateSide($pont1X, $pont1Y, $pont2X, $pont2Y) {
	$differenceX = $pont2X - $pont1X;
	$differenceY = $pont2Y - $pont1Y;
	
	$squareDifferenceX = pow($differenceX, 2);
	$squareDifferenceY = pow($differenceY, 2);

	$sumDifferences = ($squareDifferenceX + $squareDifferenceY);
	
	$result = sqrt($sumDifferences);
	
	return round($result, 2);
}

function isRight($side1, $side2, $side3) {
	$validation = false;
	$diagonal = $side1;
	$cat1 = $side2;
	$cat2 = $side3;

	if ($side1 <= $side2 || $side1 <= $side3) {
		if ($side2 < $side3) {
			$diagonal = $side3;
			$cat2 = $side1;
		} else {
			$diagonal = $side2;
			$cat1 = $side1;
		}
	}

	$cat1Pow = pow($cat1, 2);
	$cat2Pow = pow($cat2, 2);

	$sumCats = $cat1Pow + $cat2Pow;

	$catsResult = sqrt($sumCats);

	$catsResult = round($catsResult, 2);

	if($catsResult == $diagonal) {
		$validation = true;
	}

	return $validation;
}

function calculatePerimeter($side1, $side2, $side3) {
	$valuePerimeter = $side1 + $side2 + $side3;
	return $valuePerimeter;
}

?>