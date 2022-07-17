<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 10%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>
<body>
<?php

$Checked = 'checked';

if (isset($_GET["Status"])){
    $Status = $_GET["Status"];
    if ($Status == 'Enable'){
        echo "<H2 style='background-color: green;color: white;font-weight: bold'>".' Enabled'."</H2>";
    }elseif ($Status == 'Disable'){
        echo "<H2 style='background-color: #e54949;color: white;font-weight: bold'>" .' Disabled'."</H2>";
    }elseif ($Status == 'Empty'){
        echo "<H2 style='background-color: #e57a49;color: white;font-weight: bold'>" .' Please Select Enable OR Disable '."</H2>";
    }
}
?>

<h2>Module (Say Caller ID)</h2>

<form method="post" name="sayCallerId" action="action.php">
    <input type="radio" id="Enable" name="Status" value="Enable" >
    <label for="Enable">Enable</label><br>

    <input type="radio" id="Disable" name="Status" value="Disable" >
    <label for="Disable">Disable</label><br>
    <br>
    <input type="submit" value="Apply" name="btn_sayCallerId">
</form>

<p>Select For Enable OR Disable this Module</p>




</body>
</html>