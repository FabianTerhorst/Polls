<?php

require_once("class.poll.php");
require_once("class.answer.php");

class Polls
{

    function __construct()
    {

    }

    function add(){
        $theme = $_POST["theme"];
        $data = mysql_query("INSERT INTO polls (theme) VALUES ('" . $theme . "')") or die(mysql_error());//mysql_insert_id
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
                $arrAnswers = array();
                $dataAnswers = mysql_query("SELECT * FROM polls_answers WHERE pollid = " . $id) or die(mysql_error());
                if (mysql_num_rows($dataAnswers) > 0) {
                    while ($rowAnswer = mysql_fetch_assoc($dataAnswers)) {
                        $answer = new Answer();
                        $answer->id = $rowAnswer["id"];
                        $answer->name = $rowAnswer["name"];
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
}