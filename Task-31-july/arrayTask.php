<?php

$colors = array('white', 'green', 'red') ;
sort($colors);

echo "
<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>
"
;

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", 
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
 "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
  "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
  foreach ($cities as $key => $city) {
    echo "The capital of $key is $city <br>";
  }

  echo "<br>";


  $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
  echo "$color[4]";
  echo "<br>";

  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
  asort($fruits);

  foreach ($fruits as $key => $value){
    echo "<br>";
    echo "the $key = $value";
  }
  echo "<br>";
  echo "<br>";

  $words =  array("abcd","abc","de","hjjj","g","wer");
  $length = array_map('strlen', $words);
  $min_length=min($length);
  $max_length=max($length);
  echo "The shortest array length is  $min_length. The longest array length is  $max_length.";