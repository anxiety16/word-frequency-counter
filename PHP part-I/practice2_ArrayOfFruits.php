<?php

$fruits = array ('Apple', 'Banana', 'Orange', 
'cherry', 'Mango');


echo "<ol>";


for ($i = 0; $i < count($fruits); $i++){ 
    echo "<li>" , $fruits[$i], "</li>"; 
}

echo "</ol>";

?>


