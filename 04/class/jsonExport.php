<?php

require_once __DIR__.DIRECTORY_SEPARATOR. "../interface/canExport.php";

class jsonExport implements canExport{

    public function export()
    {
        echo "data format: JSON";
    }
}


?>