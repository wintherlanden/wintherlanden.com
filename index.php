<?php



foreach ($_REQUEST as $k => $v) $page = $k;
#$page = $_REQUEST['uri'];
if ($page[0] == '/') {
    $page = substr($page, 1);
}
if (!$page) $page = 'home';

require_once('head.inc.php');

if (file_exists($page . '.html'))
    require_once($page . '.html');


require_once('foot.inc.php');
