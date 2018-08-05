<?php
    echo "Hello World!\n";
 
 
    function testloop($n) {
        //count from 0 to N
        $i=1;
        while ( $i <=  $n ) {
            echo "counting: $i of $n\n";
            $i=addone($i);
        } 
    } 
 
    function addone($v) {
        // adds one to the number and returns
        return $v + 1;  
    } 
 
 
    function testadd($n1,$n2) { 
 
        // adds two numbers passed to it
        return $n1 + $n2; 
 
    } 
 
    function testaddnums($max) {
        echo "TestAddNums: I will add all the numbers from 1 to $max\n";
        
        # triangle number formula
        $result = $max*($max+1)/2;
        
        $resultstr = "1";
        for($i = 2; $i < $max+2; $i++){
            $resultstr .= "+".$i."";
        }
        
        echo ("$resultstr=$result");
    } 
 
    function testprintnums() {
        $size = 8;
        echo "\nTestPrintNums:\n";
        for($i = 1; $i < $size+1; $size--){
            $row = "";
            for($j = 1; $j < $size+1; $j++){
                $row .= $j." ";
            }
            echo $row."\n";
        }
    } 
 
 
# examples testloop(10); testadd(2,55); 
 
# test tasks
testaddnums(57);
testprintnums(); 
 
?>