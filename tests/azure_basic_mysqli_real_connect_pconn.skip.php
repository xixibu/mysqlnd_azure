<?php
require_once('skipif.inc');
require_once('skipifemb.inc');
require_once('skipif_mysqli.inc');
require_once('connect.inc');
if (!$IS_MYSQLND)
	die("skip mysqlnd only test");
?>
