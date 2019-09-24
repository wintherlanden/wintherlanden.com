<?php


require_once('head.inc.php');


$page = $_REQUEST['uri'];
echo json_encode($_REQUEST, JSON_PRETTY_PRINT);
die;
if ($page[0] == '/') {
    $page = substr($page, 1);
}
if (!$page) $page = 'home';
require_once($page . '.html');


require_once('foot.inc.php');
