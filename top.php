<?php
use \Tsugi\Core\LTIX;

if ( ! isset($CFG) ) {
    if (!defined('COOKIE_SESSION')) define('COOKIE_SESSION', true);
    require_once "tsugi/config.php";
    $LAUNCH = LTIX::session_start();
}

/*
$head = '
<p style="font-size: 75%; margin-top: 5em;">
<img src="Case_eng_logo.png" alt = "cwru logo here">
</p>';

$OUTPUT->setAppHeader($head);
*/
$OUTPUT->header();
?>