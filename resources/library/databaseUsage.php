<?php
// Single Record
/*
require_once("database.php");
 
$db = new Database();
 
$sql = "SELECT * FROM tbl_user WHERE userId='1' ";
 
$db->query($sql);
 
$db->singleRecord(); //call this if the query will only return a single row
 
echo $db->Record['userId']; // use the field name for example or;
 
echo $db->Record[0]; //use indexes
 */

// Multiple Records
/*
require_once("database.php");

$db = new Database();

$sql = "SELECT * FROM tbl_user WHERE ";

$db->query($sql);

while($db->nextRecord()){

	echo $db->Record['userId'];

}//will output all rows with the field of userId returned by the query
*/
// Other Functions
/*
$db->lastId(); // Returns the primary key of the last inserted record

$db->numRows(); //Returns the number of rows in a recordset

$db->numFields(); //Returns the number of fields in a recordset

$db->mysql_escape_mimic($string); // Returns escaped string
*/