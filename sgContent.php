<?php
$id = $modx->resource->id;
$mainParent = $modx->runSnippet("mainParent", ['id' => $id]); // родителя берем для того чтобы взять город и склонения города
$mp = $modx->getObject("modResource", $mainParent);

$cityGde = $mp->getTVValue("cityGde");
$cityChego = $mp->getTVValue("cityChego");
$cityName = $mp->getTVValue("cityName");
$output = "123";
$p1 = array("cityGde", "cityName", "cityChego");
$p2 = array($cityGde, $cityName, $cityChego);
$output = str_replace($p1, $p2, $input);
return $output;
