<?php

    
class Service
{
    private $op1;
    private $op2;
    private $nbrom;
    private $tabres;
    private $tabredd;
    private $tabsplit1;
    private $tabsplit2;
    private $nbr1;
    private $nbr2;
    private $result;
    private $arrayResult= ['0','0','0','0','0'];
    private  $tabDecimal = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];
    private $tabToken = ["I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];

    public function __construct()  
    {
        $this->op1="";
        $this->op2="";

    }

    public function getOp1(){
        return $this->op1;
    }

    public function getOp2(){
        return $this->op2;
    }
    
    public function controllSessionArray($res,$op)
    {

        $arrayOperator=str_split($op);
        if(($res[0]=="0") && array_intersect($this->tabToken, $arrayOperator) && $res[1]=="0" ) {
        $res[0]=$op;
        }
        elseif(($res[0]!="0") && array_intersect($this->tabToken, $arrayOperator) && $res[1]=="0" ){
            var_dump($op);
            var_dump($res);
            $res[0]=$res[0].$op;
            var_dump($res);
        }
        elseif($res[0]!="0" && array_intersect($this->tabToken, $arrayOperator) && $res[1]=="+" && $res[2]=="0" ){
            $res[2]=$op;
        }
        elseif($res[0]!="0" && array_intersect($this->tabToken, $arrayOperator) && $res[1]=="+" && $res[2]!="0" ){
            $res[2]=$res[2].$op;
        }
        else
        {
            return $this->arrayResult;
        }
        $this->arrayResult= $res;
        return $this->arrayResult;
    }

    public function addPlus($res,$plus)
    {
        $plusArray=['+'] ;
        if (in_array($plus,$plusArray )){

            $this->arrayResult=$res;
            $this->arrayResult[1]=$plus;
            return  $this->arrayResult;
        }
        else{
            $res=['0','0','0','0','0'];
            $this->arrayResult=$res;
            return  $this->arrayResult;
        }
    }

    public function addEgalResultat($res,$egal){
        if ($res[0]!="0" && $res[2]!="0"  ) {
            $res[3] = $egal;
            $this->arrayResult = $res;
            return $this->arrayResult;
        }
        else{
            $res=['0','0','0','0','0'];
            $this->arrayResult=$res;
            return $this->arrayResult;
        }
    }

    public function actionClean($res,$clean)
    {
        var_dump($res);
        $plusArray=['*'] ;
        if (in_array($clean,$plusArray )){
            for ($i=count($res)-1;$i>=0;$i--){
                if($res[$i]!="0")
                {
                    $res[$i]="0";
                    break;
                }
            }
            $this->arrayResult=$res;

            return  $this->arrayResult;
        }
        else{
            return  $this->arrayResult;
        }
    }

    
    public function additionRomaine($op1,$op2)
    {

        $this->op1 = $op1;
        $this->op2 = $op2;
        $this->tabres = [];
        $this->tabredd= [];
        $this->tabsplit1 = [];
        $this->tabsplit2 = [];
        $this->nbr1=0;
        $this->nbr2=0;
        $this->result=" ";

        $this->tabsplit1 = str_split($this->op1);


        $this->tabsplit2 = str_split($this->op2);

        $nb1 = $this->convertToDec($this->tabsplit1);

        var_dump($nb1);

        $nb2 = $this->convertToDec($this->tabsplit2);

        var_dump($nb2);

        $resultAddDec=$nb1+$nb2;

        return $this->convertDecToRomaine($resultAddDec);
    }

    public function convertToDec($tab)
    {
        $tabdrev = array_reverse($this->tabDecimal);
        $tabrrev = array_reverse($this->tabToken);


        foreach ($tab as $key => $value) {

            foreach ($tabrrev as $key2 => $value2) {


                if ($tab[$key] == $tabrrev[$key2]) {

                    $this->tabres[] = $tabdrev[$key2];

                }
            }
        }

        for($i=0;$i<count($this->tabres)-1;$i++) {

            if($this->tabres[$i]<$this->tabres[$i+1]){

                $this->tabres[$i+1]=$this->tabres[$i+1]-$this->tabres[$i];
                $this->tabres[$i]=0;
            }
        }

        // var_dump(array_sum($this->tabres));

        $result=array_sum($this->tabres);
        unset($this->tabres);

        return  $result;
    }

    public function convertDecToRomaine($op){

        $tabdrev = array_reverse($this->tabDecimal);
        $tabrrev = array_reverse($this->tabToken);
        
        $j=0;
        foreach($tabdrev  as $key=>$value){

            if($tabdrev[$key]<=$op){

                $quotient=(intdiv($op,$tabdrev[$key]));
                $rest=$op%$tabdrev[$key];

                for($i=$quotient;$i>0;$i--){

                    $this->tabredd[$j]=$tabrrev[$key];
                    $j=$j+1;
                }

                if( $rest==0){
                    break;
                }
                else{
                    $op= $rest;
                }
            }
        }

        return  implode("", $this->tabredd);
    }

}
?>        


