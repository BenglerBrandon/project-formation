 <?php
 // remet tout a zero 
 $array = array("firstname" => " ", "name" => " ", "email" => " ", "phone" => " ", "message" => " ",
  "firstnameError" => " ", "nameError" => " ", "emailError" => " ", "phoneError" => " ", "messageError" => " ", "isSuccess" => false )
 

 
 
 $emailTo = " rs.bengler@gmail.com";




  

 if ( $_SERVER["REQUEST_METHOD"] == "POST")
 {
    $array ["$firstname"] = verifyInput($_POST['firstname']);
    $array ["$name"] = verifyInput($_POST['name']);
    $array ["$email"] = verifyInput($_POST['email']);
    $array ["$phone"] = verifyInput($_POST['phone']);
    $array ["$message"] = verifyInput($_POST['message']);
    $array ["$isSuccess"] = true;
    $emailText = "";




//message d'erreur en cas de vide ou autre 
    if(empty($array["firstname"]))
     {
        $array["firstnameError"] = "veuillez entrer un prénom  valide !";
        $array["isSuccess"] = false;
     }
     else

        $emailText .= "firstName: {$array["firstname"]}\n";

    if(empty($array["name"]))
     {
        $array["nameError"] = "veuillez entrer un nom  valide !";
        $array["isSuccess"] = false;
     }
     else

        $emailText .= "Name :{$array["name"]}\n";

    if(!isEmail($array["email"]))
    {
        $array["emailError"] = "veuillez entrer un email  valide !";
        $array["isSuccess"] = false;
    }
    else

        $emailText .= "email: {$array["email"]}\n";

    if(!isPhone($array["phone"]))
    {
        $array["phoneError"] = "Que des chiffres et des espaces s'il te plait";
        $array["isSuccess"] = false;
    }
    else

        $emailText .= "phone : {$array["phone"]}\n";

    if(empty($array["message"]))
    {
        $array["messageError"] = "veuillez entrer un message  valide !";
        $array["isSuccess"] = false;;
    }
    else

           $emailText .= "message :{$array["message"]}\n";
   

    //envoie de l'email
    if($array["isSuccess"])
    {
        
        $headers = "from:  {$array["firstname"]} {$array["name"]} <{$array["email"]}>\r\nReply-To: $email";//de qui  vien l'email et a qui le renvoyer
        mail($emailTo, "un message de votre site" , $emailText , $headers);
        
    }
    echo json_encode($array);

 }





function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
}

 function isEmail($var)
 {
    return filter_var ($var , FILTER_VALIDATE_EMAIL);
 }


 //verifier nos imput 
 function verifyInput($var)
 {
     $var = trim($var);
     $var = stripcslashes($var);
     $var = htmlspecialchars($var);
    return $var; 
}






 ?>
 
 