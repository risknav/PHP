<?php

header('Content-Type: application/json; charset=utf-8');
header('Server: Fulcrum-API Beta');

libxml_disable_entity_loader(false);
$xmlfile = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
$input = simplexml_import_dom($dom);
$output = $input->Ping;

// check if ok
if ($output == "Ping") {

} else {

    $data = array('Heartbeat' => array('Ping' => "Ping"));

    $data = array('Heartbeat' => array('Ping' => "Pong"));

    echo json_encode($data);
}

?>
