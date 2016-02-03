<?php

require_once("smarty-3.1.27/libs/Smarty.class.php");
require_once("classes/group.poll.php");
require_once("classes/class.dbconnect.php");

/*if (function_exists('mb_internal_charset')) {
    mb_internal_charset('EUC-JP');
}
define('SMARTY_RESOURCE_CHAR_SET', 'EUC-JP');*/

$smarty = new Smarty();
$smarty->setTemplateDir("views");
$smarty->setCompileDir("tmp");

$polls = new Polls();

$connect = new dbConnect();

date_default_timezone_set('Africa/Lagos');

switch($_SERVER['REQUEST_URI']){
    case "/api/createPoll":
        $polls->add();
        break;
    case "/api/vote":
        $polls->vote();
        break;
    case "/api/selectPoll":
        $poll = $polls->get();
        $smarty->assign("poll", $poll);
        $smarty->display("poll.tpl");
        break;
    default:
        $url = $_SERVER['REQUEST_URI'];
        $pollId = str_replace("/", "", $url);
        if(strlen($pollId) > 0) {
            $smarty->assign("pollId", $pollId);
            $smarty->display("single.tpl");
        } else {
            $smarty->display("index.tpl");
        }
        break;
}