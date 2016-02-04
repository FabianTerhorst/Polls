<?php

require_once("smarty-3.1.27/libs/Smarty.class.php");
require_once("classes/group.poll.php");
require_once("classes/group.user.php");
require_once("classes/class.dbconnect.php");

$smarty = new Smarty();
$smarty->setTemplateDir("views");
$smarty->setCompileDir("tmp");

$polls = new Polls();

$users = new Users();

$connect = new dbConnect();

date_default_timezone_set('Africa/Lagos');

$smarty->assign("user", $_COOKIE['user']);

switch($_SERVER['REQUEST_URI']){
    case "/api/login":
        $users->login();
        break;
    case "/api/register":
        $users->register();
        break;
    case "/api/createPoll":
        $polls->add();
        break;
    case "/api/vote":
        $polls->vote();
        break;
    case "/api/getVotes":
        $polls->getVotes($_POST["pollid"]);
        break;
    case "/api/createPollUI":
        $smarty->assign("pollId", $_POST["pollid"]);
        $smarty->display("poll_create.tpl");
        break;
    case "/api/appendToPoll":
        $polls->addAndAppend();
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