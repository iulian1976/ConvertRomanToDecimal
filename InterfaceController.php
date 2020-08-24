<?php
session_start();
include_once('service.php');

        if(isset($_POST['op1']))
        {
			$op1=$_POST['op1'];
	        $controllObj =new Service();
	        $res=$controllObj->controllData($op1);
           //  var_dump($res);
	         header('location:index.php?res='.$res);

        }
		if(isset($_POST['plus']))
		{
			$plus=$_POST['plus'];
			var_dump($plus);
		}
		if(isset($_POST['egal']))
		{
			$egal=$_POST['egal'];
			var_dump($egal);
		}



