<?php
 $db = new mysqli("localhost", "root", "", "jquery_dropdown");

 $id = $_GET['distrid'];

$sql = "SELECT * FROM upazillas WHERE  dist_id = '$id')";

$rew = $db->query($sql);

$option = "";

while ($row = $rew->fetch_assoc()){
    $option .= "<option> $row->	upazilla </option>";

}
echo $option;
    
?>