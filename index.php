<?php


class Solution {
    public  $Stack = [];
    function Push($val){
        //check first empty or not to push on it
        if($this->isEmpty()){
            array_push($this->Stack,$val);
            $Stack[0] = $val;
        }else{
            array_push($this->Stack,$val);
        }
    }
    function Pop()
    {
        array_pop($this->Stack);
    }
    function isempty(){
        // is empty
        if(count($this->Stack) < 0){
            return true;
        }else{
            //not empty
            return false;
        }
    }
    function GetTop(){
        return $this->Stack;
    }
}
$data = new Solution();
$data->Push(4);
$data->Push(8);
$data->Push(66);
$data->Pop();
$res = $data->GetTop();
echo "<pre>";
echo print_r($res);
echo "</pre>";
?>