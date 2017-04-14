<?php
$file = "mulla.txt";
$f = fopen($file, "r") or exit("Unable to open file!");
// read file line by line until the end of file (feof)
while(!feof($f))
{
  echo fgets($f)."<br />";
}
 
fclose($f);
?>