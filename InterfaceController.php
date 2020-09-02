<?php
session_start();
include_once('service.php');

           $controllSession =new Service();
           $res=$_SESSION['res'];  // 1-ses

           if(isset($_POST['clean'])){
	           $clean=$_POST['clean'];
	           $res= $controllSession->actionClean($res,$clean);
	           session_unset();
	           $_SESSION['res'] = $res;
	           header('location:index.php');
			}
            if(isset($_POST['op1'])){
	            var_dump($_SESSION['res']);

	            $res=$_SESSION['res'];
	            $op=$_POST['op1'];
	            $situationSession= $controllSession-> controllSessionArray($res,$op);
	            var_dump( $situationSession);
	            session_unset();
	            $_SESSION['res'] = $situationSession;
	           // header('location:index.php');
           }
            if(isset($_POST['plus'])){
	            $plus=$_POST['plus'];

	            $res= $controllSession->addPlus($res,$plus);
	            session_unset();
	            $_SESSION['res'] = $res;
	            //header('location:index.php');


           }
            if(isset($_POST['egal'])){
	            var_dump($_SESSION['res']);
                $egal=$_POST['egal'];
	            $res= $controllSession-> addEgalResultat($res,$egal);
	            var_dump($res);
	            $resultat=$controllSession->additionRomaine($res[0],$res[2]);
                $res[4] =$resultat;
	            session_unset();
	            $_SESSION['res'] = $res;
	            var_dump($res);
	           // header('location:index.php');

			}
















