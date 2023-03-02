<?php
echo "Star Triangular Shape <br /><br />";
// First 1,
for($a = 1; $a <= 5; $a++)
	{
		for($b = 1; $b <= $a; $b++)
		{
			echo " * ";
		}
		
		echo "<br />";
	}

echo "<br />";

    // 2nd,
    echo "Alphabetical Triangular Shape <br /><br />";

    $alphabet= "abcdefghijklmnopqrstuvwxyz";
    for ($a = 0; $a< 5; $a++) {
        for ($b = 0; $b <= $a; $b++) {
            echo $alphabet[$b];
        }
        echo "<br>";
    }
echo "<br>";

    // Third,
    echo "Numeric Triangular Shape <br /><br />";
    // Just we changed loop.
for($a = 1; $a <= 5; $a++)
	{
		for($b = 1; $b <= $a; $b++)
		{
			echo $b;
		}
		
		echo "<br />";
	}

echo "<br />";


// 4th
echo "Numeric Triangular Shape And Its Multiplication <br /><br />";
for ($a = 1; $a <= 5; $a++) {
    $multiply = 1;
    for ($b = 1; $b <= $a; $b++) {
        echo $b;
        $multiply *= $b;
    }
    echo " = $multiply";
    echo "<br>";
}


?>