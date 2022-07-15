<?php
include "function.php";
$background_color = "";
if (isset($_POST['send'])) {
    $background_color = $_POST['radio'];
    $background_color = set_background_color($background_color);
    echo $background_color . "\n" . $_POST['radio'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td, tr {
            border: 1px solid #ccc;
        }
    </style>
</head>
<body style="background-color: <?php echo $background_color; ?>">
<?php
//if(my_login('user1')){
//    echo "Welcome";
//}else{
//    echo "Login";
//}
//?>
<form action="" method="post">
    <input type="radio" name="radio" value="red">RED
    <input type="radio" name="radio" value="green">GREEN
    <input type="radio" name="radio" value="blue">BLUE
    <input type="radio" name="radio" value="">White
    <input type="submit" name="send" value="set Color">
</form>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>action</th>
    </tr>

    <?php if (get_users() && count(get_users())>0): ?>
    <?php foreach (get_users() as $user): ?>

        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><a href="function.php?id=<?php echo $user['id'] ?>">Del</a> | <a
                        href="function.php?id=<?php echo $user['id'] ?>">Up</a></td>
        </tr>

    <?php endforeach; ?>
    <?php else: echo "there is no user here!!!"?>
    <?php endif; ?>

</table>
<br><br><br>
<table>
<?php for ($i = 0; $i < 10; $i++): ?>
    <tr>
    <?php for ($j = 0; $j < 5; $j++): ?>
        <?php
        $r = mt_rand(0, 255);
        $g = mt_rand(0, 255);
        $b = mt_rand(0, 255);
        $rgb = $r . ',' . $g . ',' . $b;
        ?>
        <td style="background-color: rgb(<?php echo $rgb; ?>)"><?php echo $rgb; ?></td>
    <?php endfor; ?>
    </tr>
<?php endfor; ?>
</table>


<?php
$users = get_users();
foreach ($users as $user) {
    $template = "Hello Dear *name* - *email*";
    $template = str_replace(array('*name*','*email*'),array($user['name'],$user['email']),$template);
    echo $template."</br>";
}

?>


</body>
</html>