<?php
     echo "Hello World!\n";
?>

=>Hello World!


php > $human = array("height"=>180,"weight"=>70,"name"=>"hiro",);
php > echo $human["name"];
hiro


php > $dog = ["shibainu","poodle","chiwawa"];
php > echo $dog[0];
shibainu

php > var_dump($dog);
array(3) {
  [0]=>
  string(8) "shibainu"
  [1]=>
  string(6) "poodle"
  [2]=>
  string(7) "chiwawa"
}
