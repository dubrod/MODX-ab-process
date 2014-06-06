<?php
// Options:
// kill switch
if (!$modx->getOption('split_test_enabled')) return;
// get the request variable defined for the current test
$requestVar = $modx->getOption('requestVar', $scriptProperties, $modx->getOption('split_test_url_param'));
// escape if...
if ( !isset($requestVar) || empty($requestVar) || isset($_GET[$requestVar]) ) return;
// get the cookie name setting
$cookieName = $modx->getOption('cookieName', $scriptProperties, $modx->getOption('split_test_cookie_name', null, '_per_exp'));
// if the cookie is set to 'none', escape
if ($_COOKIE[$cookieName] == 'none') return;

// build url
$url = $_SERVER['REQUEST_URI'];
$url .= empty($_SERVER['QUERY_STRING']) ? '?' : '&';
$url .= $requestVar;

// if the cookie is set just go there
if ($_COOKIE[$cookieName] == $requestVar) $modx->sendRedirect($url);

// if no cookies so far, randomly redirect with param and setcookie
if (rand()&1) {

    setcookie($cookieName, $requestVar, time()+60*60*24*30);
    $modx->sendRedirect($url);

} else {

    setcookie($cookieName, 'none', time()+60*60*24*30);
}
