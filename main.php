<?php
 $apiKey = 'f811595992fb42a78308f07f19e49d94';

 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, 'https://www.bungie.net/platform/Destiny/Manifest/InventoryItem/1274330687/');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

 $json = json_decode(curl_exec($ch));
 echo $json->Response->data->inventoryItem->itemName; //Gjallarhorn

?>