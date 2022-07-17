<?php

if (isset($_POST['btn_sayCallerId'])) {

    $Status = $_POST['Status'];
    $Location = 'form.php';

    function Activation($Status)
    {
        $Content = file_get_contents('etc.conf');
        $fileName = 'etc.conf';
        $Active = 'include => Pooya';
        $Diactive = "include => Pooya Deactive Plugin";

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
        header("Location: ".$Location."");
    }

}

// Reload

if (isset($_POST['btn_reload'])){
    $socket = fsockopen("127.0.0.1","5038", $errno, $errstr, 10);
    if (!$socket){
        echo "$errstr ($errno)\n";
    }else{
        fputs($socket, "Action: Login\r\n");
        fputs($socket, "UserName: admin\r\n");
        fputs($socket, "Secret: 06932668\r\n\r\n");

        fputs($socket, "Action: Command\r\n");
        fputs($socket, "Command: reload\r\n\r\n");

//            fputs($socket, "Command: dialplan reload\r\n\r\n");
//            fputs($socket, "Command: sip show peers\r\n\r\n");
        fputs($socket, "Action: Logoff\r\n\r\n");
        while (!feof($socket)){
            echo fgets($socket).'<br>';
        }
        fclose($socket);
        header("Location: ".$Location."?Status=$Status");
    }
}
?>