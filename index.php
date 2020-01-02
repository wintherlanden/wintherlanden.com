<?php

define('LN', "\n");
header("X-Frame-Options: allow-from https://www.instagram.com/");
header("Access-Control-Allow-Origin: *");
header("Content-Security-Policy: frame-ancestors https://instagram.com https://www.wintherlanden.com");
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);


if (strlen($_SESSION["lang"] ?? '') == 2) {
    $lang = $_SESSION["lang"];
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['de'];
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
}

$page = null;
foreach ($_REQUEST as $k => $v) {
    $page = $k;
    break;
}
#$page = $_REQUEST['uri'];
if ($page[0] == '/') {
    $page = substr($page, 1);
}
if (!empty($_GET['page'])) $page = $_GET['page'];
if (!$page) $page = 'home';

$nolayout = ($_GET['nolayout'] ?? 0) ? 1 : 0;

require_once('head.inc.php');

?>
<div class="<?=$page;?>">
<?php

if (file_exists($page . '.' . $lang . '.phtml'))
    require_once($page . '.' . $lang . '.phtml');
elseif (file_exists($page . '.phtml'))
    require_once($page . '.phtml');

?>
</div>
<?php

require_once('foot.inc.php');
