<?php 
if (!session_id()) {
	session_start();
} 
$id=$_SESSION['id'];
$host ='localhost';
$database ='theatre';
$username ='root';
$password ='';
try{

$connect=new PDO("mysql:host=$host;dbname=$database",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$query="SELECT staff_type FROM staff WHERE staff_username='$id'" ;
$data =$connect->query($query);
foreach ($data as $row) {
$stype=$row['staff_type'];
$_SESSION['stype']=$stype;
echo $stype;
if($stype==='Manager')
{
    header('Location: admin.php');
}else
{
    header('Location: yetkili.php');
}
 

}

}catch(PDOExcepition $error){

}











?>