<?php

ini_set('display_errors',1);
	error_reporting(E_ALL);

function single_edit($tbl, $col, $id){

$result = getSingle($tbl, $col, $id);
$getResult = mysqli_fetch_array($result);

echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
echo "<input hidden name = \"tbl\" value=\"{$tbl}\">";
echo "<input hidden name = \"col\" value=\"{$col}\">";
echo "<input hidden name = \"id\" value=\"{$id}\">";
for($i=0; $i<mysqli_num_fields($result); $i++) {

	$dataType = mysqli_fetch_field_direct($result, $i);
	$fieldName = $dataType->name;
	$fieldType = $dataType->type;
	if($fieldName != $col) {
	 			echo "<label class=\"adminLabel\">{$fieldName}</label><br>";
	 			if($fieldType != 252) {
	 				if($fieldName != "stats_icon") {
	 					echo "<input class=\"adminInput\" type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\">";
	 				}else{
	 					echo "<input hidden class=\"adminInput\" type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\">";
	 				}
	 			}else{
	 				echo "<textarea class=\"adminTextarea\" name=\"$fieldName\">{$getResult[$i]}</textarea><br><br>";
	 			}
	 		}
	 	}
	 	echo "<input class=\"btn btn-custom submit\" type=\"submit\" value=\"Save Content\">";
	 	echo "</form>";
	 }
?>
