<?php
session_start();
include_once('service.php');


     if(!isset($_SESSION['res'])) {
	     $_SESSION['res']=['0','0','0','0','0'];
	     $res=['0','0','0','0','0'];
	     $plus="";
     }
     elseif(isset($_SESSION['res']))
     {
         $res=$_SESSION['res'];

     }

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
		<title>Interface Addition Two romane numbers</title>
	</head>
	<body>
		<div id="container">
			<div id="calculator">
                <form action="InterfaceController.php" method="post">
                        <div id="result">
                            <div id="history">
                                <p id="history-value"></p>
                            </div>
                            <div id="output">
                                <p id="output-value"></p>
                            <?php
                                if($res[0]==="0"){

                                }
                                else{

                                   echo $res[0];
                                }
	                            if($res[1]=="0"){

	                            }
	                            else{
	                                echo $res[1];
	                            }
	                            if($res[2]=="0"){

	                            }
	                            else{
		                            echo $res[2];
	                            }
	                            if($res[3]=="0"){

	                            }
	                            else{
		                            echo $res[3].$res[4];            
	                            }


                            ?>
                            </div>
                        </div>

                        <div id="keyboard">
                            <input class="plusoperator" type='submit' name = 'plus'    value = '+' id="+">
                            <input class="egaloperator" type='submit' name = 'egal'    value = '=' id="=">
                            <input class="egaloperator" type='submit' name = 'clean'    value = '*' id="="><br>

                            <input class="number" type='submit' name = 'op1'    value = 'I' id="1">
                            <input class="number" type='submit' name = 'op1'    value = 'II' id="2">
                            <input class="number" type='submit' name = 'op1'    value = 'III' id="3">
                            <input class="number" type='submit' name = 'op1'    value = 'IV' id="4">
                            <input class="number" type='submit' name = 'op1'    value = 'V' id="5"
                            <input class="number" type='submit' name = 'op1'    value = 'VI' id="6">
                            <input class="number" type='submit' name = 'op1'    value = 'VII' id="7">
                            <input class="number" type='submit' name = 'op1'    value = 'VIII' id="8">
                            <input class="number" type='submit' name = 'op1'    value = 'IX' id="9">
                            <input class="number" type='submit' name = 'op1'    value = 'X' id="10">
                            <input class="number" type='submit' name = 'op1'    value = 'XL' id="40">
                            <input class="number" type='submit' name = 'op1'    value = 'L' id="50">
                            <input class="number" type='submit' name = 'op1'    value = 'XC' id="90">
                            <input class="number" type='submit' name = 'op1'    value = 'C' id="100">
                            <input class="number" type='submit' name = 'op1'    value = 'CD' id="400">
                            <input class="number" type='submit' name = 'op1'    value = 'D' id="500">
                            <input class="number" type='submit' name = 'op1'    value = 'CM' id="900">
                            <input class="number" type='submit' name = 'op1'    value = 'M' id="1000">
                        </div>
                </form>
			</div>
		</div>

	</body>
</html>