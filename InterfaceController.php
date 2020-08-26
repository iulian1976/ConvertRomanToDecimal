<?php
session_start();
include_once('service.php');

           $controllSession =new Service();
           $res=$_SESSION['res'];
           $situationSession= $controllSession-> controllSessionArray($res);
           $res=$_SESSION['res'];

           if($situationSession==="A"){

	           if(isset($_POST['op1']))
	           {
		           $op1=$_POST['op1'];
		           $controllObj =new Service();
		           $res=$controllObj->controllData($op1);
		           $_SESSION['res'] = $res;

		           // header('location:index.php');
	           }
           }
           if($situationSession==="B"){

	           if(isset($_POST['plus']))
	           {
		           $plus=$_POST['plus'];
		           $controllPlus =new Service();
		           $res=$_SESSION['res'];
		           //var_dump($res[0]);

		           $res=$controllPlus->controllPlus($plus,$res[0]);
		           //var_dump($res);
		           session_unset();
		           // reset session
		           $_SESSION['res']= $res;
		           var_dump($_SESSION['res']);
		           //header('location:index.php');
	           }

           }
           if($situationSession==="C"){
		           $op1=$_POST['op1'];
		           $controllObj =new Service();
		           $res=$controllObj->controllData($op1);
		           $_SESSION['res'] = $res;

		           // header('location:index.php');
           }
           if($situationSession==="D"){

	           if(isset($_POST['egal']))
	           {
		           $egal=$_POST['egal'];
		           var_dump($egal);
		           // header('location:index.php');

	           }


			}











