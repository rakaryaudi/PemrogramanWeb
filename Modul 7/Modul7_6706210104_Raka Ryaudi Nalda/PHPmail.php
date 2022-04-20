<?php
$msg = "Selamat Pagi";

$msg = wordwrap($msg,70);

mail("febrinomahardiva@gmail.com","My subject",$msg);
?>