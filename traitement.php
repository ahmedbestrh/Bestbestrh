<?php
$inF = fopen('clients.txt', 'a');
fputs($inF, "message : {$_POST['message']} - âge : {$_POST['age']}\n");
fclose($inF);
?>