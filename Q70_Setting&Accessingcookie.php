<?php

    setcookie("username", "Sanyam19", time()+30*24*60*60);
    

    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "<br>";
    } else{
        echo "Welcome Guest!<br>";
    
    }
    
    print_r($_COOKIE);
    echo"<br>This code is executed by Sanyam Bansal";

?>