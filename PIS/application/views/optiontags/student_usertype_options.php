<?php
$r=$this->mainmodel->getStudentAccountTypes();
$str="";
for($x=0;$x<count($r);$x++){
$id=$r[$x]['accountTypeId'];
$name=$r[$x]['accountType'];
$str.="<option value='$id'>$name</option>";	
}
echo $str;
?>