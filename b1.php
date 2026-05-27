<!DOCTYPE html>

<body>


<pre>
<?php

echo "Hello world";


$x=5;
$name="John";

echo $x;

echo "\n";

echo $name;

var_dump(5);
echo "\n";
var_dump($name);

echo "hi\nhi";
echo "\n";

//STRING FNCTION

echo "String Function\n";
echo "\n";
echo strlen("Hello World");

echo "\n";

echo strlen($name);

echo "\n";


echo str_word_count("Hi Hello Everyone");

echo "\n";

$txt="I Like PHP";
var_dump(str_contains($txt, "PHP"));

echo "\n";

var_dump(str_starts_with($txt, "I"));

echo "\n";

var_dump(str_ends_with($txt, "PHP"));

echo "\n";

//MODIFY STRING METHODS

$x="Hello BCA";

echo strtoupper($x);

echo "\n";

echo strtolower($x);

echo "\n";

echo str_replace("BCA", "MCA", $x);

echo "\n";

echo strrev($x);

echo "\n";

$c="		Hello Everyone			";

echo $c;

echo "\n";

echo trim($c);

//STRING CONCATENATION

$y="HEllo";
$b="WOrld";

$z=$y." ".$b;

echo "\n";
echo $z;

?>
</pre>


</body>
</html>