<?php
$xmldata = '<?xml version="1.0" encoding="UTF-8"?><parameters><requestType>cluster</requestType><numClusters>10</numClusters><docList><doc><docID>44716</docID></doc><doc><docID>42893</docID></doc><doc><docID>44715</docID></doc><doc><docID>41975</docID></doc><doc><docID>41974</docID></doc><doc><docID>41977</docID></doc><doc><docID>41976</docID></doc><doc><docID>40719</docID></doc><doc><docID>40709</docID></doc><doc><docID>40713</docID></doc></docList></parameters>';
$xml = new SimpleXMLElement($xmldata);
echo $xml->requestType;
?>