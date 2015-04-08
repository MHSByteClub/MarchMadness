<?php 
    //this won't work without a server since, php is server-side
    //However it does work on my apache dev site 
    $username = "";
    $id = "";
    $err = "";
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
?>
