
<?php
session_start();

    include_once('service.php');



     $op1=$_POST['Op1'];
     $op2=$_POST['Op2'];

     $res =new Service();

     $result=$res->additionRomaine($op1,$op2);


      //var_dump($res->additionRomaine($op1,$op2));

        header('location:result.php?res='.$result);
  ?>        

