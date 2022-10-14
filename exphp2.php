<?php
    $grade= 60;
    if ($grade >= 60 )
    {
        print "You belong to the First Division.";
    }
    elseif ($grade > 44 )
    {
        print "You belong to the second division";    
    }
    
    elseif ($grade > 32 )
    {
        print "You belong to the Third Division";
    }
    else
    {
        print "You are Fail";
    }
    

?>