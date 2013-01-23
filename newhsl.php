<?php
/*
Template Name: NEW HSL
*/

if($contents = file_get_contents('new-hsl/index.html')) {
echo $contents;
}
else {
echo "FAIL";
}
?>
