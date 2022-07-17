<?php

if (isset($_POST['btn_sayCallerId'])) {

    $Status = $_POST['Status'];
	$Location = 'say_caller_id.php';

    function Activation($Status)
    {
        $Content = file_get_contents('../../../../etc/asterisk/extensions_custom.conf');
		$fileName = '../../../../etc/asterisk/extensions_custom.conf';
        $Active = '#include pooya.conf';
        $Diactive = ";#include pooya.conf";

        if ($Status == 'Enable') {
            $Replace = str_replace($Diactive, $Active, $Content);
            file_put_contents($fileName, $Replace);
        } elseif ($Status == 'Disable') {
            $Replace = str_replace($Active, $Diactive, $Content);
            file_put_contents($fileName, $Replace);
        }
    }

    if (isset($_POST['Status'])) {
        Activation($Status);
        header("Location: ".$Location."?Status=$Status");
    }else{
        $Status = "Empty";
        header("Location: ".$Location."?Status=$Status");
    }

}


?>