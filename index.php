<?php


require_once('head.inc.php');


$page = $_REQUEST['uri'];
if (!page) {
    foreach ($_REQUEST as $k => $v) $page = $k;
}
echo var_dump($page);
echo $page;die;
if ($page[0] == '/') {
    $page = substr($page, 1);
}
if (!$page) $page = 'home';
require_once($page . '.html');


require_once('foot.inc.php');
