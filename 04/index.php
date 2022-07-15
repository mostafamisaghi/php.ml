<?php

require_once __DIR__.DIRECTORY_SEPARATOR."class/xmlExport.php";
require_once "class/htmlExport.php";
require_once "class/jsonExport.php";

$export = "xml";
$handler = $export."Export";
//var_dump($handler);
$handlerObject = new $handler;

//$obj = new $handler;
//echo $obj->export();

class exportHandler{
    public function doExport(canExport $handler)
    {
        $handler->export();
    }
}

$print = new exportHandler();
$print ->doExport($handlerObject);
echo "</br></br>Video Time: 54:00"

//-----------------------------------------------------------------------------------------------


?>
