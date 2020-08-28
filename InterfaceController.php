<?php
session_start();
include_once('service.php');

           $controllSession =new Service();
           $res=$_SESSION['res'];

           if(isset($_POST['op1'])){
	           $situationSession= $controllSession-> controllSessionArray($res);
	           $op1=$_POST['op1'];
	           $res= $controllSession-> addOperator1($res,$op1);
	           session_unset();
	           $_SESSION['res'] = $res;

	           header('location:index.php');
           }
			if(isset($_POST['plus'])){
                $plus=$_POST['plus'];
				$situationSession= $controllSession-> controllSessionArray($res,$plus);
				$res= $controllSession->addPlus($res);
			}

			//var_dump($res);

          // var_dump($situationSession);  // mai trebuie un caz cand se incarca pagina pria data si este 0000

          /*

           if(($situationSession==="A") || ($situationSession==="B")){

	           if(isset($_POST['op1']) && (!isset($_POST['plus'])) )
	           {
		           $op1=$_POST['op1'];
		           $controllObj =new Service();
		           $res=$controllObj->controllData($op1);
		           session_unset();
		           $_SESSION['res'] = $res;

		            header('location:index.php');
	           }
	           if( (!isset($_POST['op1'])) && ($_POST['plus']) )
	           {
		           $controllObj =new Service();
		           $res=$_SESSION['res'];
		           $plus=$_POST['plus'];


		           $addPlus= $controllObj->addPlus($plus,$res);

		           //var_dump($addPlus);

		           session_unset();
		           $_SESSION['res'] = $$addPlus;
		          // var_dump( $_SESSION['res']);

		          // header('location:index.php');
	           }




           }
           elseif($situationSession==="C"){

	           if(isset($_POST['plus']))
	           {
		           $plus=$_POST['plus'];
		           $controllPlus =new Service();

		           $res=$controllPlus->controllPlus($plus,$res[0]);
		           //var_dump($res);
		           session_unset();
		           // reset session
		           $_SESSION['res']= $res;
		           var_dump($_SESSION['res']);
		           //header('location:index.php');
	           }

           }
           elseif($situationSession==="D"){
		           $op1=$_POST['op1'];
		           $controllObj =new Service();
		           $res=$controllObj->controllData($op1);
		           $_SESSION['res'] = $res;

		           // header('location:index.php');
           }
           elseif($situationSession==="D"){

	           if(isset($_POST['egal']))
	           {
		           $egal=$_POST['egal'];
		           var_dump($egal);
		           // header('location:index.php');

	           }


			*/














