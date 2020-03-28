<?php
if(isset($_POST["submit"])){

    $lastname = $_POST["lastname"];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $comment = $_POST['comment'];
    $terms = $_POST['terms'];

    if( $lastname != "" || $firstname != "" || $email != "" || $state !=""){
        $file_name = $lastname.$firstname.".txt";
        //create file
        $createfile = fopen($file_name,'w') or die("Failed to create ". $file_name);
        $content = "Last Name: ".$lastname." First Name ".$firstname.", Email: ".$email." ".$state." ".
        $comment." terms: ".$terms. PHP_EOL;
        //save the file
        fwrite($createfile,$content);
        //close file
        fclose($createfile);

        print_r($content);
    }
}

?>