<?php

header("X-Frame-Options: allow-from https://www.instagram.com/");
header("Access-Control-Allow-Origin: *");
header("Content-Security-Policy: frame-ancestors https://instagram.com");
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
if ($_GET['page']) $page = $_GET['page'];
if (!$page) $page = 'home';

$nolayout = $_GET['nolayout'] ? 1 : 0;

require_once('head.inc.php');

if (file_exists($page . '.' . $lang . '.phtml'))
    require_once($page . '.' . $lang . '.phtml');
elseif (file_exists($page . '.phtml'))
    require_once($page . '.phtml');


require_once('foot.inc.php');
