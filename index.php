<?php

session_start();

if (strlen($_SESSION["lang"]) == 2) {
    $lang = $_SESSION["lang"];
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
}

foreach ($_REQUEST as $k => $v) $page = $k;
#$page = $_REQUEST['uri'];
if ($page[0] == '/') {
    $page = substr($page, 1);
}
if (!$page) $page = 'home';

require_once('head.inc.php');

if (file_exists($page . '.' . $lang . '.html'))
    require_once($page . '.' . $lang . '.html');
elseif (file_exists($page . '.html'))
    require_once($page . '.html');


require_once('foot.inc.php');
