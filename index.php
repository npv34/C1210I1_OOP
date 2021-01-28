<?php
include "User.php";
include "UserManager.php";
$userManager = new UserManager("data.json");
$users = $userManager->getAll();
//die();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    <!---->

    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $user->name ?></td>
            <td><?php echo $user->email ?></td>
            <td><?php echo $user->address ?></td>
        </tr>

    <?php endforeach ?>

</table>

</body>
</html>
