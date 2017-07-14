<?php

// load data from db

$Obj = new stdClass();
$myObj = new stdClass();

$myObj = array('questionID' => 1, 'text' => 'Is your PC Windows 7, 8, or 8.1', 'responseOptionID' => 11, 'ResponseOptionValue' => 'Yes', 'SubsequentQuestionID' => 3);

$myObj2 = array('questionID' => 1, 'text' => 'Is your PC Windows 7, 8, or 8.1', 'responseOptionID' => 10, 'ResponseOptionValue' => 'No', 'SubsequentQuestionID' => 2);

$myObj3 = array('questionID' => 2, 'text' => 'Does your PC have Windows 10 installed', 'responseOptionID' => 11, 'ResponseOptionValue' => 'Yes', 'SubsequentQuestionID' => 4);

$myObj4 = array('questionID' => 2, 'text' => 'Does your PC have Windows 10 installed', 'responseOptionID' => 12, 'ResponseOptionValue' => 'No Vista');

$myObj5 = array('questionID' => 2, 'text' => 'Does your PC have Windows 10 installed', 'responseOptionID' => 13, 'ResponseOptionValue' => 'No XP');


$myObj6 = array('questionID' => 3, 'text' => 'Was your Windows genuine copy?', 'responseOptionID' => 11, 'ResponseOptionValue' => 'Yes');

$myObj7 = array('questionID' => 3, 'text' => 'Was your Windows genuine copy?', 'responseOptionID' => 10, 'ResponseOptionValue' => 'No');

$myObj8 = array('questionID' => 4, 'text' => 'Was your PC installed from Windows 7, 8, 8.1?', 'responseOptionID' => 11, 'ResponseOptionValue' => 'Yes');

$myObj9 = array('questionID' => 4, 'text' => 'Was your PC installed from Windows 7, 8, 8.1?', 'responseOptionID' => 10, 'ResponseOptionValue' => 'No');


$Obj = array($myObj, $myObj2, $myObj3, $myObj4, $myObj5, $myObj6, $myObj7, $myObj8, $myObj9);

$myJSON = json_encode($Obj);

echo $myJSON;























?>