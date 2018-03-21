<?php

$set = 'islandora_sp_basic_image_collection';

require 'vendor/autoload.php';

$client = new \Phpoaipmh\Client('http://localhost:8000/oai2');
$myEndpoint = new \Phpoaipmh\Endpoint($client);

$recs = $myEndpoint->listRecords('oai_dc', null, null, $set);
foreach($recs as $rec) {
   print $rec->asXML();
}
