<?php

use userApp\User;

$user = new User();
$user->name = "Petras";
$user->email = "petras@mail.com";
$user->role = "Admin";

$user2 = new User();
$user2->name = "Jonas";
$user2->email = "Jonas@mail.com";
$user2->role = "User";

?>

<ul>
<?php foreach($user->showProfile() as $info) :?>
    <li><?=$info?></li>
<?php endforeach ?>
<?php foreach($user2->showProfile() as $info2) :?>
    <li><?=$info2?></li>
<?php endforeach?>
</ul>