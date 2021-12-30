<?php

class method{
    public function __call($name,$argumnets){
        echo "calling object method '$name'"
        .implode(',',$argumnets)."\n";

        echo $argumnets[0]*$argumnets[1];
    }

    public static __callstatic($name,$argumnets){
        echo "calling"
    }
} 

?>