<?php

if(isset($_POST(['email'])) && !empty($_POST(['email']))){
$nome = addslashes($_POST(['firstname']));
$email= addslashes($_POST(['email']));
$senha= addslashes($_POST(['password']));


}
?>