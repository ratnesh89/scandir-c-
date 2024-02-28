<html>
<body>
</body>
</html>
<?php
$array = scandir("c:/");
$length = sizeof($array);
$i;
for ($i=0; $i<$length;$i++)
{
    echo $array[$i]."<br>";
}
?>


