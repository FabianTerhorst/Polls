<?php

require_once("class.poll.php");
require_once("class.answer.php");

class Polls
{

    function __construct()
    {

    }

    function add($redirect = true){
        $theme = $_POST["theme"];
        $data = mysql_query("INSERT INTO polls (theme) VALUES ('" . $theme . "')") or die(mysql_error());
        $id = mysql_insert_id();
        foreach($_POST as $key => $value){
            if(strpos($key, "answer") !== false){
                if($value != "") {
                    mysql_query("INSERT INTO polls_answers (name, pollid) VALUES ('" . $value . "', '" . $id . "')") or die(mysql_error());
                }
            }
        }
        if($redirect) {
            header("Location: http://h.t-softec.de/" . $id);
        }
        return $id;
    }

    function addAndAppend(){
        $pollidCurrent = $this->add(false);
        $pollid = $_POST["pollid"];
        mysql_query("INSERT INTO polls_polls (pollid, pollid_child) VALUES (". $pollid . ", " . $pollidCurrent .")") or die(mysql_error());
        header("Location: http://h.t-softec.de/" . $pollid);
    }

    function get(){
        $id = $_POST["id"];
        $data = mysql_query("SELECT * FROM polls WHERE id = " . $id) or die(mysql_error());
        $arr = array();
        if (mysql_num_rows($data) > 0) {
            while ($row = mysql_fetch_assoc($data)) {
                $poll = new Poll();
                $poll->id = $row["id"];
                $poll->theme = $row["theme"];
                $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $id) or die(mysql_error());
                $poll->votes = mysql_result($votesResult, 0);

                $arrChilds = array();

                $dataChilds = mysql_query("SELECT * FROM polls_polls WHERE pollid = " . $id) or die(mysql_error());
                if (mysql_num_rows($dataChilds) > 0) {
                    while ($rowChild = mysql_fetch_assoc($dataChilds)) {
                        $dataChildPoll = mysql_query("SELECT * FROM polls WHERE id = " . $rowChild["pollid_child"]) or die(mysql_error());
                        if (mysql_num_rows($dataChildPoll) > 0) {
                            while ($rowChildPoll = mysql_fetch_assoc($dataChildPoll)) {
                                $childPoll = new Poll();
                                $childPoll->id = $rowChildPoll["id"];
                                $childPoll->theme = $rowChildPoll["theme"];

                                $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $rowChildPoll["id"]) or die(mysql_error());
                                $childPoll->votes = mysql_result($votesResult, 0);

                                $arrChildPollAnswers = array();
                                $dataChildPollAnswers = mysql_query("SELECT * FROM polls_answers WHERE pollid = " . $rowChildPoll["id"]) or die(mysql_error());
                                if (mysql_num_rows($dataChildPollAnswers) > 0) {
                                    while ($rowChildPollAnswer = mysql_fetch_assoc($dataChildPollAnswers)) {
                                        $childAnswer = new Answer();
                                        $childAnswer->id = $rowChildPollAnswer["id"];
                                        $childAnswer->name = $rowChildPollAnswer["name"];
                                        $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $rowChildPoll["id"] ." AND answerid = " . $rowChildPollAnswer["id"]) or die(mysql_error());
                                        $childAnswer->votes = mysql_result($votesResult, 0);
                                        $arrChildPollAnswers[] = $childAnswer;
                                    }
                                }

                                $childPoll->answers = $arrChildPollAnswers;

                                $arrChilds[] = $childPoll;
                            }
                        }
                    }
                }

                $poll->childs = $arrChilds;

                $arrAnswers = array();
                $dataAnswers = mysql_query("SELECT * FROM polls_answers WHERE pollid = " . $id) or die(mysql_error());
                if (mysql_num_rows($dataAnswers) > 0) {
                    while ($rowAnswer = mysql_fetch_assoc($dataAnswers)) {
                        $answer = new Answer();
                        $answer->id = $rowAnswer["id"];
                        $answer->name = $rowAnswer["name"];
                        $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $id ." AND answerid = " . $rowAnswer["id"]) or die(mysql_error());
                        $answer->votes = mysql_result($votesResult, 0);
                        $arrAnswers[] = $answer;
                    }
                }
                $poll->answers = $arrAnswers;
                //echo json_encode($poll);
                return $poll;
                //$arr[] = $poll;
            }
        }
        return $arr;
    }

    function getVotes($id){
        $arrAnswers = array();
        $dataAnswers = mysql_query("SELECT * FROM polls_answers WHERE pollid = " . $id) or die(mysql_error());
        $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $id) or die(mysql_error());
        $pollVotes = mysql_result($votesResult, 0);
        if (mysql_num_rows($dataAnswers) > 0) {
            while ($rowAnswer = mysql_fetch_assoc($dataAnswers)) {
                $answer = new Answer();
                $answer->id = $rowAnswer["id"];
                $answer->name = $rowAnswer["name"];
                $votesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $id ." AND answerid = " . $rowAnswer["id"]) or die(mysql_error());
                $answerVotes = mysql_result($votesResult, 0);
                $answer->votes = 100 / $pollVotes * $answerVotes;
                $arrAnswers[] = $answer;
            }
        }

        $dataChilds = mysql_query("SELECT * FROM polls_polls WHERE pollid = " . $id) or die(mysql_error());
        if (mysql_num_rows($dataChilds) > 0) {
            while ($rowChild = mysql_fetch_assoc($dataChilds)) {
                $dataChildPoll = mysql_query("SELECT * FROM polls WHERE id = " . $rowChild["pollid_child"]) or die(mysql_error());
                if (mysql_num_rows($dataChildPoll) > 0) {
                    while ($rowChildPoll = mysql_fetch_assoc($dataChildPoll)) {
                        $dataChildAnswers = mysql_query("SELECT * FROM polls_answers WHERE pollid = " . $rowChildPoll["id"]) or die(mysql_error());
                        $childVotesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $rowChildPoll["id"]) or die(mysql_error());
                        $childPollVotes = mysql_result($childVotesResult, 0);

                        if (mysql_num_rows($dataChildAnswers) > 0) {
                            while ($rowChildAnswer = mysql_fetch_assoc($dataChildAnswers)) {
                                $childAnswer = new Answer();
                                $childAnswer->id = $rowChildAnswer["id"];
                                $childAnswer->name = $rowChildAnswer["name"];
                                $childVotesResult = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $rowChildPoll["id"] ." AND answerid = " . $rowChildAnswer["id"]) or die(mysql_error());
                                $childAnswerVotes = mysql_result($childVotesResult, 0);
                                $childAnswer->votes = 100 / $childPollVotes * $childAnswerVotes;
                                $arrAnswers[] = $childAnswer;
                            }
                        }
                    }
                }
            }
        }

        echo json_encode($arrAnswers);
    }

    function vote(){
        $pollid = $_POST["pollid"];
        $answerid = $_POST["answerid"];
        $ipCount = mysql_query("SELECT COUNT(*) FROM polls_votes WHERE pollid = " . $pollid . " AND ip = '" . $this->getIp() . "'") or die(mysql_error());
        $count = mysql_result($ipCount, 0);
        if($count == 0){
            mysql_query("INSERT INTO polls_votes (pollid, answerid, ip) VALUES ('" . $pollid . "', '" . $answerid . "','" . $this->getIp() . "')") or die(mysql_error());
        }
        $this->getVotes($pollid);
    }

    function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}