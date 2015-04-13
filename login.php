<?php 
    //this won't work without a server since, php is server-side
    //However it does work on my apache dev site 
    $username = "";
    $id = "";
    $err = "";
    //the id (not the school one) for position in the sql database table
    //(id_num)id: 0 | (id) school_id = 100100 | (username) username = "myusername" 
    //made id_num static so it will keep track of all logins
    static $id_num = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST["username"])){
            $err = "No name present";
        }else{
          $username = test_input($_POST["username"]);
        }
        
        if(empty($_POST["id"])){
          $err =  "No id present";
        }else{
          $id = test_input($_POST["id"]);
        }
    }
    //removes all charactors that messes up the prorgram
    function test_input($input){
        //remove whitespace
         $input = trim($input);
         //pretty straight forward, removes slashes
         $input = stripslashes($input);
         //removes special cahractors
         $input = htmlspecialchars($input);
         return $input;
    }
    $id_num++;
?>
