<?php
date_default_timezone_set('asia/calcutta');

// time() print unix time-stamp 1, jan 1970
echo time()+(1*60*60) ;

$onehour=time()+(1*60*60); 
$oneday=time()+(24*60*60);

echo "<br>" . date('H:i:s a',$onehour);
echo "<br>" . date('d/m/y',$oneday);
?>