<?php
pdo->prepare('select * from client where id_Client=:id');
pdo->bindparam(':id',POST_['id']);
pdo->execut();
?>
