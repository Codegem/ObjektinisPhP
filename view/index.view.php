<?php

use userApp\User;

$user = new User("Petras", "petras@gmail.com", "Admin");
$user2 = new User("Jonas", "Jonas@gmail.com", "User");

?>

<ul>
<?php foreach($user->showProfile() as $info) :?>
    <li><?=$info?></li>
<?php endforeach ?>
<hr>
<?php foreach($user2->showProfile() as $info) :?>
    <li><?=$info?></li>
<?php endforeach?>
</ul>