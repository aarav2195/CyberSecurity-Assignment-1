<?php

$marks = 82;

echo "<h1>Result Evaluation</h1>";

echo "<p>Marks: $marks</p>";

if($marks >= 90)
{
    echo "<h2>Grade A+</h2>";
}
elseif($marks >= 75)
{
    echo "<h2>Grade A</h2>";
}
elseif($marks >= 60)
{
    echo "<h2>Grade B</h2>";
}
else
{
    echo "<h2>Grade C</h2>";
}

?>