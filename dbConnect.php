#<?php
#$dbName = $_SERVER["DOCUMENT_ROOT"] . "Kettle.accdb";
#$dbName = "Kettle.accdb";
#if (!file_exists($dbName)) {
#    die("Could not find database file.");
#}
#$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");

#?>

<?php
echo '<pre>';
print_r(PDO::getAvailableDrivers());
?>

<?php
// Location to file
$db = realpath('Kettle.accdb');
if(!file_exists($db)){
	die('Error finding access database');
}
// Connection to ms access
$conn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb, *.accdb)};Dbq=".$db.";Uid=; Pwd=;");

try{
	$sql = "SELECT * FROM students";
	$result = $conn->query($sql);
	$row = $result->fetchAll(PDO::FETCH_ASSOC);
	
	var_dump($row);
	
}catch(PDOExepction $e){
	echo $e->getMessage();
}

?>