<?php



session_start();

session_unset();

session_destroy();

if (isset($_COOKIE['exam_handler'])) {
								    //unset($_COOKIE['exam_handler']);
								   // unset($_COOKIE['exam_handlerTest1']);
								    setcookie('exam_handler', null, -1, '/');
								    //setcookie('exam_handlerTest1', null, -1, '/');
								   
								}

header("Location: index.php");

?>