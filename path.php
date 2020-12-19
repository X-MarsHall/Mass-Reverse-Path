<?php

echo "\n>> Mass Reverse Path\n";
echo ">> Created By MarsHall\n";
echo "\n";
echo ">> Path : ";
$path = trim(fgets(STDIN));
echo "\n";


$li = file_get_contents("target.txt");
$sl = explode("\n", $li);

foreach($sl as $hp){
$get = get_headers('https://'.$hp.$path, 1);

echo "[+] http://$hp$path => ". $get[0];
echo "\n";

}

?>