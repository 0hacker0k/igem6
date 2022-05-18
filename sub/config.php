<?php
define("root",substr(dirname(__FILE__,2),strlen($_SERVER['DOCUMENT_ROOT'])));
echo dirname(__FILE__,2);
echo dirname($_SERVER['DOCUMENT_ROOT']);
define("cssfile", root."/css");
define("jsfile", root."/js");
define("webgamejsfile", root."/webgamejs");
define("imgfile", root."/img");
// define("DB_PASSWD", "");
?>
