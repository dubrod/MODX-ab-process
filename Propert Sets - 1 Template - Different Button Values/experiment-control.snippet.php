<?php
//set chunk tpl name
$chunkName = "experiment-tpl";

//set which property set to get 
//since we are doing a 50/50 experiment lets use a simple even/odd scenario
//if the minute is even ... else ...

$min = intval(date('i'));

if ($min % 2 == 0) {
  
  $setName = "Campaign_B"; // Must be Property Set Name

} else {

  $setName = "Campaign_A"; // Must be Property Set Name

}

$propSet = $modx->getObject("modPropertySet",array("name" =>$setName));
return($modx->getChunk($chunkName, $propSet->getProperties()));

