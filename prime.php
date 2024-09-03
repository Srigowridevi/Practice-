<?php 
function isprime($number){
    if($number < 2){ 
        return false;  
     }
    for($i=2; $i <= Sqrt($number); $i ++){
        if($number % $i ==0){
            return false;
        }
    }

    return true;
}
$number =32;
if(isprime($number)){

    echo "$number, is a prime number";
}else{

     echo "$number, is not a prime number";
}

?>
