<?php
session_start();
include_once('service.php');

           $controllSession =new Service();
           $res=$_SESSION['res'];

           var_dump($_SESSION['res']);

           $situationSession= $controllSession-> controllSessionArray($res);

            var_dump( $situationSession);

             //var_dump( $situationSession);
           if(isset($_POST['op1']) && ($situationSession!="C")){

	           $op1=$_POST['op1'];
	           $res= $controllSession-> addOperator1($res,$op1);
	           session_unset();
	           $_SESSION['res'] = $res;
	           //var_dump($situationSession);
	            //header('location:index.php');
           }
			if(isset($_POST['plus'])){
                $plus=$_POST['plus'];

				$res= $controllSession->addPlus($res,$plus);
				session_unset();
				$_SESSION['res'] = $res;

			}
			/*
			if((isset($_POST['egal']))&&($situationSession=="C")){
				var_dump( $situationSession);

				$egal=$_POST['egal'];
				$res= $controllSession->additionRomaine($res[0],$res[2]);
				session_unset();
				$_SESSION['res'] = $res;

			}
			*/

			if(isset($_POST['clean'])){
				$clean=$_POST['clean'];
				$res= $controllSession->actionClean($res,$clean);
				session_unset();
				$_SESSION['res'] = $res;
				//header('location:index.php');
			}

          // var_dump($situationSession);  // mai trebuie un caz cand se incarca pagina pria data si este 0000

           if(($situationSession==="A") || ($situationSession==="B")){
	            //header('location:index.php');
           }
           elseif(($situationSession==="C") && (!isset($_POST['clean'])) ){
           	    $op1=$_POST['op1'];
	           $res= $controllSession->addOperator2($res,$op1);
	           session_unset();
	           $_SESSION['res'] = $res;
	            //var_dump($_SESSION['res']);
	           //header('location:index.php');
           }


















