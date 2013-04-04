<?php
include "octapi.php";

header('Content-type: application/javascript; charset=utf-8');
// Get the route and stop number

// Generate the bus object
$curBus = new OCTAPI;
if ( $curBus->queryOcTranspo( ) != -1 ) {
    print $curBus->generate_jsonp($curBus->dataset);
}
?>