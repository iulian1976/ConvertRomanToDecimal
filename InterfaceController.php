<?php
session_start();
include_once('service.php');

        if(isset($_POST['op1']))
        {
			$op1=$_POST['op1'];
	        $controllObj =new Service();
	        $res=$controllObj->controllData($op1);
	        $_SESSION['res'] = $res;

	         header('location:index.php');

        }
		if(isset($_POST['plus']))
		{
			$plus=$_POST['plus'];
			$controllPlus =new Service();
			$res=$_SESSION['res'];

			var_dump($res[0]);
			$res=$controllPlus->controllPlus($plus,$res[0]);
			//var_dump($res);
			// reset session
			$_SESSION['res']= $res;

			//header('location:index.php');

		}
		if(isset($_POST['egal']))
		{
			$egal=$_POST['egal'];
			var_dump($egal);
		}



