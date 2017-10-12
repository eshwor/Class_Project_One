<?Php
$a =5;
$b =10.5;
$name="ram";

echo $a;
echo "<hr>";
echo gettype($a);

echo "<br>";

echo $b;
echo "<hr>";
echo gettype($b);

echo "<br>";

echo $name;
echo "<hr>";
echo gettype($name);

echo "<hr>";
echo var_dump($name);

echo "<hr>";
echo (int)$b;

echo "<hr>";
settype($b, int);
echo $b;
echo gettype($b);

echo $a-$b;

?>