<?php
include "config.php";
if($stmt = $con->prepare('UPDATE livreurs SET state=? WHERE ID=?')){
   if($_GET['action']=="approve"){
    $var = "approved";
    $stmt->bind_param('ss', $var, $_GET['id']);
    $stmt->execute();
   }
   if($_GET['action']=="disable"){
    $var = "disabled";
    $stmt->bind_param('ss', $var, $_GET['id']);
    $stmt->execute();
   }
}
if($stmt = $con->prepare('SELECT * FROM livreurs')){
    $data = array();
    $stmt->execute();
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()){
        $data[]=$row;
    }
    echo json_encode($data);
    $f = fopen('Livreurs.json', 'w');
    fwrite($f, json_encode($data));
    fclose($f);
    header('Location: panel.php');
 }
echo "Error !";
?>