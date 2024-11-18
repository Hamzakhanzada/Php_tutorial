<?php
echo "<h1 style='color:red';>php with html</h1>";
echo "<h3 style='color:green';>php with html</h3>";
 $name = "hamza";
 echo "<h1 style='color:orange'>my name is  $name </h1> ";

$h2_red = "blue";

?>
<h1 style="background-color: black;  color:azure;">
    My real name is 
    <?php echo $name?>
</h1>

<h2 style="color: <?php echo $h2_red?>;">
    htmlspecialchars_decode
</h2>