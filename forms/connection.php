<?
$hostname = "localhost";
$username = "root";
$password = " ";
$db_name = "myportfolio";

$conn = mysli_connect($hostname,$username,$password,$dbname);

if($connect){
    echo "connection seccesfull";
}
else{
    echo "connection failed";
}

?>