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
    private $tab3= ['0','0','0','0'];

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


    public function controllData($op1)
    {
        $tabToken = ["I","II","III", "IV", "V","VI","VII","VIII", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];
        if (in_array($op1,$tabToken )){
            $this->op1=$op1;
           // var_dump($this->op1);

            $this->tab3[0]=$this->op1;
            $this->tab3[1]='+';

             return  $this->tab3;
        }
        else{
            var_dump('hii2');
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
        $tabd = [1, 4, 5, 9, 10, 40, 50, 90, 100, 400, 500, 900, 1000];
        $tabr = ["I", "IV", "V", "IX", "X", "XL", "L", "XC", "C", "CD", "D", "CM", "M"];



        $tabdrev = array_reverse($tabd);
        $tabrrev = array_reverse($tabr);


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

        $tabd = [1,4,5,9,10,40,50,90,100,400,500,900,1000];
        $tabr=["I","IV","V","IX","X","XL","L","XC","C","CD","D","CM","M"];


        $tabdrev = array_reverse($tabd);
        $tabrrev = array_reverse($tabr);
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

        //var_dump($this->tabredd);

        //implode(",", $this->tabredd);

        return  implode(",", $this->tabredd);
    }

}
?>        


