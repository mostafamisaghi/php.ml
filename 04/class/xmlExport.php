<?php

require_once __DIR__.DIRECTORY_SEPARATOR. "../interface/canExport.php";

class xmlExport implements canExport{

    public function export()
    {
        echo "data format: XML";
    }
}


?>
