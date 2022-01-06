<?php
class MyException extends Exception{} ;
class NetworkException extends Exception{}; 

function testExceptions(){
    throw new NetworkException();
}

try{
    testExceptions();
}catch(MyException $e){
    echo "My exception caught";
}catch(NetworkException $e){
    echo "Network exception caught";
}catch(Exception $e){
    echo "Exception caught";
}finally{
    echo "\nCleaned Up";
} 
