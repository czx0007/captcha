<?php

require 'vendor/autoload.php';

$captcha  = new czx0007\captcha\Captcha(['width'=>140,'height'=>70,'len'=>6]);
 
$captcha->entry();