<?php
$n=file_get_contents('fangketongji.txt');
$n++;
file_put_contents('fangketongji.txt',$n);
echo "document.write($n);";
?>
