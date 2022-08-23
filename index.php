<?php

$url = "https://www.aramco.com/en/creating-value/products/retail-fuels";






$data = file_get_contents($url);

$pattern = '/<div class="key-facts-full__description">([^<]*)<\/div>/'; // for fuel name

$pattern2 = '/<div class="key-facts-full__figure">([^<]*)<\/div>/'; // for fuel Rate


preg_match_all($pattern, $data, $matches);

preg_match_all($pattern2, $data, $matches2);

$x=0;
while($x<=4)
{
    
    echo($matches[0][$x]); // fuel name
    echo($matches2[0][$x]); // Rate 
    $x++;
}



?>