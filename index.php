<?php

//exo1
    $count1 = 0;
        while ($count1 < 11) {
        echo "la variable count1 vaux $count1 <br>";
        $count1++;
        }
echo "<br><br>";
//exo2

    $count2 = 0;
    $count3 = 12;
    while ($count2 < 20) {
        $result = $count2 * $count3;
        echo "$result <br>";
        $count2++;
    }
echo "<br><br>";
    //exo3
    $count4 = 100;
    $count5 = 24;
while ($count4 < 11) {
    $result1 = $count4 * $count5;
    echo "$result1 <br>";
    $count4--;
}


echo "<br><br>";
//exo4
for($count6 = 1; $count6 < 10; $count6+= $count6 / 2) {
    echo $count6 . "<br>";
}


echo "<br><br>";

for($i = 0; $i !== 16; $i++) {
  echo "On y arrive presque." . "<br>";
}

for($i = 20; $i !== 0; $i--) {
    echo "C'est presque bon." . "<br>";
}

for($i = 0; $i < 100; $i+= 15) {
    echo "On tient le bon bout." . "<br>";
}
for($i = 200; $i > 0; $i-= 12) {
    echo "Enfin !!!!." . "<br>";
}
