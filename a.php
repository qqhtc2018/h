 <?php 
$path =dirname(dirname(__FILE__)).'\\wwwroot\\log-web\\'.date("Y-m-d").'.log';
echo $path ; 
file_get_contents($path);
if (file_exists($path)) 
echo file_get_contents($path); 
else
echo '11';
?>
 
