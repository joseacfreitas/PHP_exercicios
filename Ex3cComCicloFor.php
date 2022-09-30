<html>
<body>

<?php  

for ($contador=0; $contador<=1000; $contador=
$contador+1)
{
    $x=rand(0,1200);
    $y=rand(0,1200);

    echo "<img src='young.jpg' style='position: absolute; left:$x;'>";

    echo "<img src='young.jpg' style='position: absolute; top:$y;'>"; 
}
?>

</body>
</html>