<?php
$result = array();
foreach ($data as $key => $value) {
    array_push($result, array("nome" => $key, "to" => $value));
}
echo json_encode($result);
?>