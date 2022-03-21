<?php

include_once 'app/Calc.php';

$cal = new Calc();

//very basic
if(isset($_REQUEST['amount'], $_REQUEST['months'])){
    $cal->process($_REQUEST['amount'], $_REQUEST['months'] );

   echo  json_encode($cal->getResponse());
   die();
}

echo  json_encode($cal->getResponse());
