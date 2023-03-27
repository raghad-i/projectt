<?php 
define('SERVERNAME','localhost');
define('USERNAME','root');
define('USERPASS','');
define('DBname','project');
$conn=mysqli_connect(SERVERNAME,USERNAME,USERPASS,DBname);
if($conn){
  echo "done";
}else{
die("Error".mysqli_connect_error());
}

?>
